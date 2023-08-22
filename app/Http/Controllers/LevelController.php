<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\level;
use ErrorException;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = level::all();
        $totalLevels = level::count();

        return view('admin.level', compact('levels', 'totalLevels'));
    }

    public function store(Request $request)
    {
        try {

            $lastId = level::max('id');
            $id = $lastId ? $lastId + 1 : 1;

            $levels = new level();
            $levels->id = $id;
            $levels->kelas = $request->input('namaLevel');
            $levels->save();

            return redirect()->route('admin-addlevel')->with('success', 'Level baru berhasil ditambahkan.');
        } catch (ErrorException $e) {
            return redirect()->route('admin-addlevel')->with('error', 'Level Gagal ditambahkan.');
        }
    }

    public function edit($id)
    {
        $levels = level::find($id);
        return view('admin.edit-level', compact('levels'));
    }

    public function update(Request $request, $id)
    {
        $level = level::find($id);
        try {
            $level->kelas = $request->input('namaLevel'); // 'nama' sesuai dengan nama input pada formulir
            $level->save();

            return redirect()->route('admin-addlevel')->with('success', 'Nama Fitur berhasil diperbarui.');
        } catch (ErrorException $e) {
            return redirect()->route('admin-addlevel')->with('error', 'Nama Level Gagal diperbarui.');
        }
        $level->kelas = $request->input('namaLevel'); // 'nama' sesuai dengan nama input pada formulir
        $level->save();

        return redirect()->route('admin-addlevel')->with('success', 'Nama Fitur berhasil diperbarui.');
    }

    public function delete($id)
    {
        $level = level::find($id);
        if (!$level) {
            return redirect()->route('admin-addlevel')->with('error', 'Data Level tidak ditemukan.');
        }
        $level->delete();
        return redirect()->route('admin-addlevel')->with('success', 'Data Level berhasil dihapus.');
    }
}
