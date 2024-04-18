<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'fakultas_id' => 'required|exists:fakultas,id',
        ]);

        Jurusan::create([
            'nama' => $request->nama,
            'fakultas_id' => $request->fakultas_id,
        ]);

        return redirect('/admin/jurusan')->with('success', 'Data jurusan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'fakultas_id' => 'required|exists:fakultas,id',
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update([
            'nama' => $request->nama,
            'fakultas_id' => $request->fakultas_id,
        ]);

        return redirect('/admin/jurusan')->with('success', 'Jurusan berhasil diubah!');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect('/admin/jurusan')->with('success', 'Jurusan berhasil dihapus!');
    }
}
