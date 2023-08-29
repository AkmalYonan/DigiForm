<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showProfile()
    {
        if (Auth::check()) {
            if (Auth::user()->is_order == 1) {
                $orderHistory = auth()->user()->id;
                $pesan = Pesan::where('id_user', $orderHistory)->get()[0];

                $user = Auth::user();
                $namaPaket = $user->paket->nama; // Mengakses atribut 'nama' pada model 'Paket'
                return view('account', compact('namaPaket', 'pesan'));
            }

            $user = Auth::user();
            $namaPaket = $user->paket->nama; // Mengakses atribut 'nama' pada model 'Paket'
            return view('account', compact('namaPaket'));
        } else {
            return redirect()->route('login');
        }
    }

    public function editAccount(Request $request)
    {
        if (Auth::check()) {
            try {

                $user = auth()->user()->id;
                $request->validate([
                    'username' => 'required',
                ]);
                User::where('id', $user)->update([
                    'name' => $request->input('username')
                ]);
                return redirect()->route('homeaccount')->with('success', 'Edit Account Berhasil');
            } catch (\Exception $e) {
                return redirect()->route('homeaccount')->with('error', 'Gagal menyimpan perubahan.');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
