<?php

namespace App\Livewire\Admin\LayananPengaduan;

use App\Models\Akses;
use App\Models\Menu;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{

    use WithPagination;

    // Variable Access
    public $accessUpdate, $accessDelete, $accessDetail, $roleLogin, $userLogin;

    // Variable Button
    public $buttonCreate = "hidden", $buttonReply, $buttonDelete, $buttonDetail, $buttonAttachment;

    // Variable Detail
    public $detailId,
    $detailEmail,
    $detailName,
    $detailStatus,
    $detailOfficer,
    $detailValue,
    $detailSolution,
    $detailAttachment;

    // Variable Form
    public $search, $inputReply, $sortStatus;



    // Mounting data View
    public function mount()
    {
        $this->userLogin = Auth::user();
        $this->roleLogin = Auth::user()->user_role;
        $url = Route::getCurrentRoute()->action['as']; // Maca nami route anu nuju di buka
        $menu = Menu::where("MENU_URL", $url)->first();

        $access = Akses::
            join("PIVOT_MENU", "ACCESSES.ACCESS_MENU", '=', "PIVOT_MENU.PIVOT_ID")
            ->where(['PIVOT_MENU.PIVOT_MENU' => $menu->MENU_ID, 'PIVOT_MENU.PIVOT_ROLE' => $this->roleLogin])
            ->first();

        $this->accessUpdate = $this->generateAccess($access->ACCESS_UPDATE);
        $this->accessDelete = $this->generateAccess($access->ACCESS_DELETE);
        $this->accessDetail = $this->generateAccess($access->ACCESS_DETAIL);
    }



    // Generate Access Menu
    public function generateAccess($value)
    {
        return $value == 1 ? null : 'hidden';
    }



    // Reset Form Reply
    public function resetForm()
    {
        $this->reset();
    }



    public function updateDetailAttachment($file)
    {
        $this->detailAttachment = $file;
    }



    // Fungsi Kanggo nyandak rincian data pengajuan
    public function detailPengaduan($id)
    {
        try {
            $pengaduan = Pengaduan::where('PENGADUAN_ID', '=', $id)->first();


            if (null != $pengaduan):
                $this->detailId = $pengaduan->PENGADUAN_ID;
                $this->detailEmail = $pengaduan->PENGADUAN_EMAIL;
                $this->detailName = $pengaduan->PENGADUAN_NAME;
                $this->detailStatus = $pengaduan->PENGADUAN_STATUS;
                $this->detailOfficer = $pengaduan->user->name;
                $this->detailValue = $pengaduan->PENGADUAN_VALUE;
                $this->detailSolution = $pengaduan->PENGADUAN_SOLUTION;
                $this->detailAttachment = $pengaduan->PENGADUAN_ATTACHMENT;

                $this->updateDetailAttachment($pengaduan->PENGADUAN_ATTACHMENT);
            endif;

            // dd($this->detailAttachment);


        } catch (\Throwable $th) {

            $this->dispatch("failed-get-data", $th->getMessage());
        }
    }




    // Fungsi kanggo ngawaler pengaduan
    public function replyPengaduan()
    {
        try {

            if (null != $this->detailSolution):

                $data = [
                    'PENGADUAN_OFFICER' => $this->userLogin->id,
                    'PENGADUAN_STATUS' => 'Selesai',
                    'PENGADUAN_SOLUTION' => $this->detailSolution,
                ];

                // Insert data
                Pengaduan::where('PENGADUAN_ID', $this->detailId)->update($data);

                // ngadamel pengumuman kanggo component nu sanes
                $this->dispatch('process-success', 'Pengaduan berhasil dijawab');

            else:

                // Bewara kumargi teu masihan solusi
                $this->dispatch('process-warning', 'Solusi pengaduan tidak boleh dikosongkan');

            endif;

        } catch (\Throwable $th) {
            // ngadamel pengumuman kanggo component nu sanes
            $this->dispatch('process-failed', 'Terjadi kelasahan saat melakukan proses, silahkan hubungi pihak pengembang');
        }

    }



    // Render View
    public function render()
    {

        $pengaduan = Pengaduan::
            when(
                $this->search,
                function ($query, $search) {
                    return $query->where('PENGADUAN_ID', 'like', '%' . $search . '%')->orWhere('PENGADUAN_VALUE', 'like', '%' . $search . '%');
                }
            )->when(
                $this->sortStatus,
                function ($query, $status) {
                    return $query->where('PENGADUAN_STATUS', $status);
                }
            )->latest()->paginate();

        return view('livewire.admin.layanan-pengaduan.table', [
            'data' => $pengaduan,
        ]);
    }
}
