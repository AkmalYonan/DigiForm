<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Detail_paket_fitur;
use App\Models\Fitur;
use App\Models\Paket;
use App\Models\Template;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

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


        return view('admin.setting.paket', compact('pakets', 'fiturs', 'templates'));
    }

    //  

    public function paketChange(Request $request)
    {

        $paket = Paket::find($request->id_paket);

        if ($request->sesi === 'template') {
            $detail_template = $paket->detailPaketTemplate;
        } else {
            $detail_template = $paket->detailPaketFitur;
        }


        return response()->json(['detail_paket' => $detail_template]);
        // dd($paket);
    }
}
