<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Data;
use App\Models\Fitur;
use App\Models\Level;
use App\Models\Paket;
use App\Models\Pesan;
use App\Models\Template;
use App\Models\User;
use ErrorException;
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
        $totalLevel = Level::count();
        $pesans = Pesan::orderBy('created_at', 'desc')->take(3)->get();
        return view('admin.index', compact('admins', 'totalPakets', 'pesans', 'totalTemplates', 'totalUser', 'totalFitur', 'totalPesan', 'totalLevel'));
    }

    public function viewPesanan()
    {
        $datas = Data::all();
        $pesans = pesan::all();
        $users = User::all();
        return view('admin.viewPesan', compact('datas', 'pesans', 'users'));
    }
    public function detailPesanan($pesan)
    {
        return view('admin.detailPesan', [
            'pesan' => pesan::find($pesan)
        ]);
    }

    public function updateMapsUserAkad(Request $request, $id)
    {
        try {
            $pesan = Pesan::find($id);

            Data::where('id_pesan', $pesan->id)->update([
                'iframeMaps_akad' => $request->input('updateMapsUserAkad'),
            ]);

            return redirect()->back()->with('success', 'Link Maps Pesanan berhasil diperbarui.');
        } catch (ErrorException $e) {
            return redirect()->back()->with('failed', 'Link Maps Pesanan Gagal diperbarui.');
        }
    }

    public function updateMapsUserResepsi(Request $request, $id)
    {
        try {
            $pesan = Pesan::find($id);

            Data::where('id_pesan', $pesan->id)->update([
                'iframeMaps_resepsi' => $request->input('updateMapsUserResepsi'),
            ]);

            return redirect()->back()->with('success', 'Link Maps Pesanan berhasil diperbarui.');
        } catch (ErrorException $e) {
            return redirect()->back()->with('failed', 'Link Maps Pesanan Gagal diperbarui.');
        }
    }




    public function viewUser()
    {
        $levels = Level::all();
        $pakets = Paket::all();
        $users = User::orderByDesc('level')->get();
        $totalUsers = User::count();
        return view('admin.user', compact('users', 'totalUsers', 'pakets', 'levels'));
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

    public function updateLevel(Request $request, $id)
    {
        $users = User::find($id);

        $users->level = $request->input('level');
        $users->save();
        return redirect()->route('admin-user')->with('success', 'Level ID pengguna berhasil diperbarui.');
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $pesan = Pesan::find($id);

            $pesan->status = $request->input('status');
            $pesan->save();
            return redirect()->route('admin-viewPesan')->with('success', 'Level ID pengguna berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('admin-viewPesan')->with('success', 'Status Pesanan Pengguna Gagal diperbarui');
        }
    }

    public function deletePesan($id)
    {
        $pesan = pesan::find($id);

        if (!$pesan) {
            return redirect()->route('admin-viewPesan')->with('error', 'Data pesan gagal ditemukan!.');
        }

        User::where('id', $pesan->user->id)->update([
            'is_order' => '0'
        ]);
        $pesan->delete();

        return redirect()->route('admin-viewPesan')->with('success', 'Data pesan berhasil dihapus.');
    }
}
