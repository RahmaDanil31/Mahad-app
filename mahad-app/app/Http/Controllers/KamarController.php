<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gedung_id' => 'required|exists:gedung,id',
        ]);

        Kamar::create([
            'nama' => $request->nama,
            'gedung_id' => $request->gedung_id,
        ]);

        return redirect('/admin/kamar')->with('success', 'Data kamar berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gedung_id' => 'required|exists:gedung,id',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update([
            'nama' => $request->nama,
            'gedung_id' => $request->gedung_id,
        ]);

        return redirect('/admin/kamar')->with('success', 'Kamar berhasil diubah!');
    }

    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();

        return redirect('/admin/kamar')->with('success', 'Kamar berhasil dihapus!');
    }
}
