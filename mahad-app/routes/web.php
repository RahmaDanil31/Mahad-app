<?php

// use App\Http\Controllers\AdminController;

use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Gedung;
use App\Models\User;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Models\Kamar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//portal route

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


//admin controller
Route::middleware(['Admin', 'auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view("admin.dashboard");
    });

    // fakultas
    Route::get('/admin/fakultas', function () {
        $fakultas = Fakultas::all();
        return view('admin.data-fakultas', compact('fakultas'));
    });

    Route::post('/admin/fakultas', 'App\Http\Controllers\FakultasController@store')->name('fakultas.store');

    Route::delete('/admin/fakultas/{id}', 'App\Http\Controllers\FakultasController@destroy')->name('fakultas.destroy');

    Route::put('/admin/fakultas/{id}', 'App\Http\Controllers\FakultasController@update')->name('fakultas.update');

    // jurusan
    Route::get('/admin/jurusan', function () {
        $fakultas = Fakultas::all();
        $jurusan = Jurusan::all();
        return view('admin.data-jurusan', compact('jurusan', 'fakultas'));
    });

    Route::post('/admin/jurusan', 'App\Http\Controllers\JurusanController@store')->name('jurusan.store');

    Route::put('/admin/jurusan/{id}', 'App\Http\Controllers\JurusanController@update')->name('jurusan.update');

    Route::delete('/admin/jurusan/{id}', 'App\Http\Controllers\JurusanController@destroy')->name('jurusan.destroy');

    //gedung
    Route::get('/admin/gedung', function () {
        $gedungs = Gedung::all();
        return view('admin.data-gedung', compact('gedungs'));
    });

    Route::post('/admin/gedung', 'App\Http\Controllers\GedungController@store')->name('gedung.store');

    Route::put('/admin/gedung/{id}', 'App\Http\Controllers\GedungController@update')->name('gedung.update');

    Route::delete('/admin/gedung/{id}', 'App\Http\Controllers\GedungController@destroy')->name('gedung.destroy');

    //kamar
    Route::get('/admin/kamar', function () {
        $kamars = Kamar::all();
        $gedung = Gedung::all();
        return view('admin.data-kamar', compact('kamars', 'gedung'));
    });

    Route::post('/admin/kamar', 'App\Http\Controllers\KamarController@store')->name('kamar.store');

    Route::put('/admin/kamar/{id}', 'App\Http\Controllers\KamarController@update')->name('kamar.update');

    Route::delete('/admin/kamar/{id}', 'App\Http\Controllers\KamarController@destroy')->name('kamar.destroy');


    //petugas
    Route::get('/admin/petugas', function () {
        $users = User::where('role_id', 1)->get();
        return view('admin.data-petugas', compact('users'));
    });

    Route::get('/admin/form-petugas', function () {
        $kamars = Kamar::all();
        $gedung = Gedung::all();
        return view('admin.form-petugas', compact('kamars', 'gedung'));
    });

    Route::post('/admin/petugas', 'App\Http\Controllers\AdminController@store')->name('petugas.store');

    Route::delete('/admin/petugas/{id}', 'App\Http\Controllers\AdminController@destroy')->name('petugas.destroy');

    Route::post('/admin/petugas/{id}', 'App\Http\Controllers\AdminController@status')->name('petugas.status');

    Route::put('/admin/petugas/{id}', 'App\Http\Controllers\AdminController@update')->name('petugas.update');

    // pendaftaran

    Route::get('/admin/pendaftaran', function () {
        $users = User::where('role_id', 2)->get();
        return view('admin.data-pendaftaran', compact('users'));
    });

    Route::get('/admin/form-pendaftaran', function () {
        $kamars = Kamar::all();
        $jurusans = Jurusan::all();
        $jurusan1 = Jurusan::first();
        return view('admin.form-pendaftaran', compact('kamars', 'jurusans', 'jurusan1'));
    });

    Route::post('/admin/form-pendaftaran', 'App\Http\Controllers\PendaftaranController@store')->name('daftar.store');

    Route::delete('/admin/pendaftaran/{id}', 'App\Http\Controllers\PendaftaranController@destroy')->name('daftar.destroy');
});

Route::middleware(['User'])->group(function () {

    Route::get('/user', function () {
        return view("mahasiswa.dashboard");
    })->middleware('auth');
});

Route::get('/', function () {
    return redirect("/home");
});

Route::get('/home', function () {
    return view("Portal/home");
});

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Koneksi database berhasil.";
    } catch (\Exception $e) {
        return "Gagal terhubung ke database. Error: " . $e->getMessage();
    }
});
