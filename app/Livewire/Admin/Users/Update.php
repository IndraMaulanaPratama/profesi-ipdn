<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $id, $name, $email, $password, $role;

    #[Rule('image|max:1024')]
    public $photo;


    /**
     * Fungsi kanggo ngabersihkeun data formulir
     */
    public function resetForm()
    {
        $this->reset();
        $this->photo = null;
        $this->sign = null;
    }



    // Fungsi kanggo ngarubah eusi data form dumasar kana id user anu dipilih
    #[On("selected-user")]
    public function updateForm($id)
    {
        $user = User::with('role')->where('id', $id)->first();

        $this->id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->user_role;
    }



    // Fungsi kanggo nangtoskeun nami file
    public function fileName($file)
    {
        if (null != $file) {
            return Carbon::now()->timestamp . '-' . $this->photo->getClientOriginalName();
        } else {
            return null;
        }
    }



    // Fungsi kanggo ngarobih data user dumasar kana form anu tos dirobih
    public function updateData()
    {
        try {
            $photoName = $this->fileName($this->photo);

            $data = [
                'name' => $this->name,
                'email' => $this->email,
                'photo' => str_replace(" ", "", $photoName),
                'user_role' => $this->role,
            ];

            if (null == $this->photo) {
                unset($data['photo']);
            }
            if (null == $this->role) {
                unset($data['user_role']);
            }

            // Miwarang livewire kanggo nyimpen data dumasar kana katangtosan nu tos di damel
            $this->photo?->storeAs('foto_pegawai', $data['photo'], 'public');

            User::where('id', $this->id)->update($data);
            $this->dispatch('user-updated', 'Data ' . $data['name'] . ' berhasil diperbaharui');

        } catch (\Throwable $th) {
            $this->dispatch('failed-updating-user', '' . $th->getMessage());
        }
    }


    public function render()
    {
        $roles = Role::query()->whereNot('ROLE_NAME', '=', 'Super Admin')->get([
            'ROLE_ID AS id',
            'ROLE_NAME AS name'
        ]);

        return view('livewire.admin.users.update', [
            'data_role' => $roles,
        ]);
    }
}
