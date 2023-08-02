<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        foreach ($pakets as $paket) {
            $paket->harga = 'Rp ' . number_format($paket->harga, 0, ',', '.');
        }

        $totalPakets = Paket::count();

        return view('admin.paket', compact('pakets', 'totalPakets'));
    }

    public function store(Request $request)
    {
        $paket = new Paket();
        $paket->nama = $request->input('namaTemplate');
        $paket->save();

        return redirect()->route('admin-addpaket')->with('success', 'Fitur baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pakets = Paket::find($id);
        return view('admin.edit-paket', compact('pakets'));
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);

        $paket->nama = $request->input('namaBaru'); // 'nama' sesuai dengan nama input pada formulir
        $paket->harga = $request->input('hargaBaru');
        $paket->save();

        return redirect()->route('admin-addpaket')->with('success', 'Nama template berhasil diperbarui.');
    }

    public function delete($id)
    {
        $paket = Paket::find($id);

        if (!$paket) {
            return redirect()->route('admin-addpaket')->with('error', 'Data template tidak ditemukan.');
        }

        $paket->delete();

        return redirect()->route('admin-addpaket')->with('success', 'Data template berhasil dihapus.');
    }
}
