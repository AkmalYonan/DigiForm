<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{

    public function updateHp(Request $request)
    {

        $request->validate([
            'noHp' => 'required',
        ]);

        $hp = Admin::first();
        $hp->noHp = $request->input('noHp');
        $hp->save();

        return redirect()->route('admindashboard')->with('success', 'Nomor Hp berhasil diperbarui.');
    }

    public function updateEmail(Request $request)
    {

        $request->validate([
            'emailAdmin' => 'required',
        ]);

        $email = Admin::first();
        $email->emailAdmin = $request->input('emailAdmin');
        $email->save();

        return redirect()->route('admindashboard')->with('success', 'Email Admin Website berhasil diperbarui.');
    }
}
