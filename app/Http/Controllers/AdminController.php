<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Data;
use App\Models\Fitur;
use App\Models\Paket;
use App\Models\pesan;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        $totalPakets = Paket::count();
        $totalTemplates = Template::count();
        $totalUser = User::count();
        $totalFitur = Fitur::count();
        $totalPesan = Data::count();
        return view('admin.index', compact('admins', 'totalPakets', 'totalTemplates', 'totalUser', 'totalFitur', 'totalPesan'));
    }

    public function viewPesanan()
    {
        $datas = Data::all();
        $pesans = pesan::all();
        return view('admin.viewPesan', compact('datas', 'pesans'));
    }
    public function detailPesanan($pesan)
    {
        return view('admin.detailPesan', [
            'pesan' => pesan::find($pesan)
        ]);
    }




    public function viewUser()
    {

        $pakets = Paket::all();
        $users = User::all();
        $totalUsers = User::count();
        return view('admin.user', compact('users', 'totalUsers', 'pakets'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $pakets = Paket::all();

        return view('edit-user', compact('user', 'pakets'));
    }

    public function updatePaket(Request $request, $id)
    {
        $users = User::find($id);

        $users->paket_id = $request->input('paket_id'); // 'nama' sesuai dengan nama input pada formulir
        $users->save();

        return redirect()->route('admin-user')->with('success', 'Paket ID pengguna berhasil diperbarui.');
    }
}
