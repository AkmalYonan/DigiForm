<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showProfile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $namaPaket = $user->paket->nama; // Mengakses atribut 'nama' pada model 'Paket'
            return view('account', ['namaPaket' => $namaPaket]);
        } else {
            return redirect('/login');
        }
    }
}
