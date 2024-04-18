<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Fakultas::create([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/fakultas')->with('success', 'Data fakultas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        return redirect('/admin/fakultas')->with('success', 'Fakultas berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/fakultas')->with('success', 'Fakultas berhasil diubah!');
    }
}
