<?php

use App\Livewire\Page\Admin\Assign;
use App\Livewire\Page\Admin\Role;
use App\Livewire\Page\Admin\Users;
use App\Livewire\Page\App\Dashboard;
use App\Livewire\Page\App\LayananPengaduan;
use App\Livewire\Page\App\Profile\Sdm\Sotk;
use App\Livewire\Page\App\Profile\Sejarah;
use App\Livewire\Page\App\ProfileDeskripsi;
use App\Livewire\Page\App\ProfileVisiMisi;
use App\Livewire\Page\Login;
use App\Livewire\Page\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', Dashboard::class)->name('/');
Route::get('/profile/layanan-pengaduan', LayananPengaduan::class)->name('layanan-pengaduan');

// Profile Menu
Route::get('/profile/deskripsi', ProfileDeskripsi::class)->name('profile-deskripsi');
Route::get('/profile/visi-dan-misi', ProfileVisiMisi::class)->name('profile-visimisi');
Route::get('/profile/simber-daya-manusia/struktur-organisasi-tenaga-kependidikan', Sotk::class)->name('profile-sotk');
Route::get('/profile/sejarah', Sejarah::class)->name('profile-sejarah');


// Ranahna nu gaduh akses
Route::middleware(['auth', 'access'])->group(function () {

    // -- *** Admin Area --- //
    Route::get('/menu', Menu::class)->name('menu');
    Route::get('/users', Users::class)->name('user-manajemen');
    Route::get('/role', Role::class)->name('role-manajemen');
    Route::get('/assign', Assign::class)->name('assign-manajemen');
    // <!-- End Of Admin area !--->

});



// Ranahna gapura
Route::get('/login', Login::class)->middleware('guest')->name('login');
Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('login');
})->middleware('auth')->name('logout');
