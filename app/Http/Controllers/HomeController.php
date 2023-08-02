<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use App\Models\Verifytoken;
use App\Mail\OtpEmail;
use App\Models\Admin;
use App\Models\Fitur;
use App\Models\Paket;
use App\Models\Template;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $Pakets = Paket::all();
        $Templates = Template::all();
        $Fiturs = Fitur::all();
        $admins = Admin::all();
        $admin = Admin::first(); // Misalnya kita ambil admin pertama, Anda bisa menyesuaikan dengan kebutuhan Anda.
        $whatsappNumber = $admin->noHp;

        foreach ($Pakets as $paket) {
            $paket->harga = 'Rp ' . number_format($paket->harga, 0, ',', '.');
        }

        return view('index', compact('whatsappNumber', 'admin', 'Fiturs', 'Templates', 'Pakets'));

        // $get_user = User::where('email', auth()->user()->email)->first();
        // if ($get_user->is_activated == 1) {
        //     if ($get_user->level == 1) {
        //         return view('index', compact('whatsappNumber'));
        //     } else {
        //         return view('index', compact('whatsappNumber'));
        //     }
        // } else {
        //     return redirect('/verify-account');
        // }
    }

    public function verifyaccount()
    {
        $get_user = User::where('email', auth()->user()->email)->first();
        if ($get_user->is_activated == 1) {
            return redirect('/');
        } else {
            return view('opt_verification');
        }
    }

    public function useractivation(Request $request)
    {
        $get_token = $request->token;
        $get_token = Verifytoken::where('token', $get_token)->first();

        if ($get_token) {
            $get_token->is_activated = 1;
            $get_token->save();
            $user  = User::where('email', $get_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $getting_token = Verifytoken::where('token', $get_token->token)->first();
            $getting_token->delete();
            return redirect('/')->with('activated', 'Your account has been Activated');
        } else {
            return redirect('/verify-account')->with('incorrect', 'SALAH OTP');
        }
    }

    public function resendOtp()
    {
        // Generate OTP baru
        $newToken = rand(100000, 999999); // Mengenerate angka acak antara 100000 dan 999999 sebagai OTP baru
        $get_user_name = auth()->user()->name;

        // Simpan OTP yang baru di database
        $user = User::where('email', auth()->user()->email)->first();
        $verifyToken = Verifytoken::where('email', $user->email)->first();
        if ($verifyToken) {
            $verifyToken->token = $newToken;
            $verifyToken->save();
        } else {
            $verifyToken = new Verifytoken();
            $verifyToken->email = $user->email;
            $verifyToken->token = $newToken;
            $verifyToken->save();
        }
        Mail::to($user->email)->send(new OtpEmail($newToken, $get_user_name));

        return redirect('/verify-account')->with('resent', 'OTP telah dikirim ulang.');
    }

    public function changePlan()
    {
        $admin = Admin::first();
        $whatsappNumber = $admin->noHp;
        $Pakets = Paket::all();
        $Templates = Template::all();
        $Fiturs = Fitur::all();

        foreach ($Pakets as $paket) {
            $paket->harga = 'Rp ' . number_format($paket->harga, 0, ',', '.');
        }
        return view('home.changeplan', compact('Pakets', 'Templates', 'Fiturs', 'whatsappNumber'));
    }

    public function priceList()
    {
        $Pakets = Paket::all();
        $Templates = Template::all();
        $Fiturs = Fitur::all();

        foreach ($Pakets as $paket) {
            $paket->harga = 'Rp ' . number_format($paket->harga, 0, ',', '.');
        }
        return view('home.pricelist', compact('Pakets', 'Templates', 'Fiturs'));
    }

    public function tempAmara()
    {

        return view('template.amara');
    }
    public function tempAmartha()
    {

        return view('template.amartha');
    }
    public function tempPrima()
    {

        return view('template.prima');
    }
    public function tempArta()
    {

        return view('template.arta');
    }
    public function tempYonans()
    {

        return view('template.yonans');
    }
    public function tempDawa()
    {

        return view('template.dawa');
    }
}
