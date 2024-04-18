<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class PendaftaranController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'jenis_kelamin' => 'required|string|in:L,P',
            'telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'slta' => 'required|string|max:255',
            'wa' => 'required|string|max:15',
            'pendidikan_pesantren' => 'required|string|max:255',
            'kamar_id' => 'required|exists:kamar,id',
            'nama_ayah' => 'required|string|max:150',
            'nama_ibu' => 'required|string|max:150',
            'pekerjaan_ortu' => 'required|string|max:250',
            'telepon_ortu' => 'required|string|max:20',
            'wa_ortu' => 'required|string|max:20',
            'alamat_ortu' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusan,id',
        ]);

        // Create and save the user
        $validatedData['password'] = bcrypt($validatedData['nim']);
        $validatedData['status'] = 0;
        $validatedData['role_id'] = 2;

        $file = $request->file('surat');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $fixName = str_replace(' ', '_', $fileName);
        $file->move(public_path('surat'), $fixName);

        $validatedData['path_file'] = 'surat/' . $fixName;

        $file = $request->file('foto');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $fixName = str_replace(' ', '_', $fileName);
        $file->move(public_path('foto'), $fixName);
        $validatedData['path_foto'] = 'foto/' . $fixName;

        // Create and save the user
        User::create($validatedData);

        return redirect('/admin/pendaftaran')->with('success', 'Data pendaftar berhasil ditambahkan!');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $surat = public_path($user->path_file);
        File::delete($surat);

        $foto = public_path($user->path_foto);
        File::delete($foto);

        $user->delete();

        return redirect('/admin/pendaftaran')->with('success', 'Pendaftar berhasil dihapus!');
    }
}
