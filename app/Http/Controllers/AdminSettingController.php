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

    public function viewfitur(Request $request)
    {
        $selectedPaketID = $request->input('paketDropdown-fitur');
        $selectedFiturIDs = $request->input('checkbox');

        // Lakukan apa yang perlu Anda lakukan dengan data yang telah dipilih, misalnya:
        // - Menyimpan pemilihan ke dalam database
        // - Melakukan validasi
        // - Menampilkan pesan sukses atau kesalahan

        // Misalnya, menyimpan data pemilihan ke dalam database
        $detailTemplate = ::find($selectedPaketID);

        if (!$detailTemplate) {
            return redirect()->back()->with('error', 'Detail Template not found');
        }

        $detailTemplate->fiturs()->sync($selectedFiturIDs);

        return redirect()->back()->with('success', 'Detail Template updated successfully');
    }
}
