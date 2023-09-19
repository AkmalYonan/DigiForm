<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Fitur;
use App\Models\Paket;
use App\Models\Template;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{

    public function updateHp(Request $request)
    {

        $request->validate([
            'noHp' => 'required|max:16',
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

    public function viewSettingPaket()
    {
        $pakets = Paket::all();
        $fiturs = Fitur::all();
        $templates = Template::all();

        return view('admin.setting.paketTemplate', compact('pakets', 'fiturs', 'templates'));
    }
}
