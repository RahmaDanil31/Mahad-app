<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedung;

class GedungController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Gedung::create([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/gedung')->with('success', 'Data gedung berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $gedung = Gedung::findOrFail($id);
        $gedung->delete();

        return redirect('/admin/gedung')->with('success', 'Gedung berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $gedung = Gedung::findOrFail($id);
        $gedung->update([
            'nama' => $request->nama,
        ]);

        return redirect('/admin/gedung')->with('success', 'Gedung berhasil diubah!');
    }
}
