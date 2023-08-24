<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showProfile()
    {
        if (Auth::check()) {
            $orderHistory = auth()->user()->id;
            $pesan = Pesan::where('id_user', $orderHistory)->get()[0];

            $user = Auth::user();
            $namaPaket = $user->paket->nama; // Mengakses atribut 'nama' pada model 'Paket'
            return view('account', compact('namaPaket', 'pesan'));
        } else {
            return redirect('/login');
        }
    }
}
