<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminHome()
    {
        return view('admin.dashboard'); // Gantilah 'admin.index' dengan nama view yang sesuai
    }

    public function store(Request $request)
    {

        if ($request->password != $request->konfirm_password)
            return redirect('/admin/form-petugas')->with('error', 'Password Yang Anda Masukan Tidak Sama !!');


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'jenis_kelamin' => 'required|string|in:L,P',
            'telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
        ]);

        // Create and save the user
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['status'] = 1;
        $validatedData['role_id'] = 1;
        // Create and save the user
        User::create($validatedData);

        return redirect('/admin/petugas')->with('success', 'Data petugas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/admin/petugas')->with('success', 'Petugas berhasil dihapus!');
    }

    public function status($id)
    {

        $user = User::findOrFail($id);
        $user->update([
            'status' => !$user->status,
        ]);

        return redirect('/admin/petugas')->with('success', 'Petugas berhasil diubah!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:L,P',
            'telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
        ]);

        $fakultas = User::findOrFail($id);
        $fakultas->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
        ]);

        return redirect('/admin/petugas')->with('success', 'Petugas berhasil diubah!');
    }
}
