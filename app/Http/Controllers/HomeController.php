<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use App\Models\Verifytoken;
use App\Mail\OtpEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $get_user = User::where('email', auth()->user()->email)->first();
        if ($get_user->is_activated == 1) {
            return view('home');
        } else {
            return redirect('/verify-account');
        }
    }

    public function verifyaccount()
    {
        return view('opt_verification');
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
            return redirect('/home')->with('activated', 'Your account has been Activated');
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
}
