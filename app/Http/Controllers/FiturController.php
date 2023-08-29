<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index()
    {
        $fiturs = Fitur::all();

        $totalFiturs = Fitur::count();

        return view('admin.fitur', compact('fiturs', 'totalFiturs'));
    }

    public function store(Request $request)
    {
        $fiturs = new Fitur();
        $fiturs->nama = $request->input('namaFitur');
        $fiturs->save();

        return redirect()->route('admin-addfitur')->with('success', 'Fitur baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $fiturs = Fitur::find($id);
        return view('admin.edit-fitur', compact('fiturs'));
    }

    public function update(Request $request, $id)
    {
        $fitur = Fitur::find($id);

        $fitur->nama = $request->input('namaBaru'); // 'nama' sesuai dengan nama input pada formulir
        $fitur->harga = $request->input('hargaBaru');
        $fitur->save();

        return redirect()->route('admin-addpaket')->with('success', 'Nama Fitur berhasil diperbarui.');
    }

    public function delete($id)
    {
        $fitur = Fitur::find($id);

        if (!$fitur) {
            return redirect()->route('admin-addpaket')->with('error', 'Data template tidak ditemukan.');
        }

        $fitur->delete();

        return redirect()->route('admin-addpaket')->with('success', 'Data template berhasil dihapus.');
    }
}
