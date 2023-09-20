<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Detail_paket_fitur;
use App\Models\Detail_paket_template;
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

        $bronze = Paket::first();
        $detail_bronze = [[]];
        foreach ($bronze->detailPaketTemplate as $template) {
            $detail_bronze[0][] = $template->template_id;
        }
        foreach ($bronze->detailPaketFitur as $template) {
            $detail_bronze[1][] = $template->fitur_id;
        }
        // ddd($detail_bronze);

        return view('admin.setting.paket', compact('pakets', 'fiturs', 'templates', 'detail_bronze'));
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

    public function updatePaketTemplate(Request $request)
    {
        $paket_id = $request->input('dropdownTemplate');
        $templates_id = $request->input('checkboxTemplate');
        if (!empty($templates_id)) {
            $dataToInsert = [];
            foreach ($templates_id as $template_id) {
                $dataToInsert[] = [
                    'paket_id' => $paket_id,
                    'template_id' => $template_id
                ];
            }
            // Hapus detail fitur yang sudah ada untuk id_pesan tertentu sebelum menambahkan yang baru
            Detail_paket_template::where('paket_id', $paket_id)->delete();
            // Masukkan detail fitur yang baru
            Detail_paket_template::insert($dataToInsert);
        }
        return redirect()->route('admin-settingPaket')->with('success', 'Data berhasil disimpan!');
    }

    public function updatePaketFitur(Request $request)
    {
        $paket_id = $request->input('dropdownFitur');
        $fiturs_id = $request->input('checkboxFitur');
        if (!empty($fiturs_id)) {
            $dataToInsert = [];
            foreach ($fiturs_id as $fitur_id) {
                $dataToInsert[] = [
                    'paket_id' => $paket_id,
                    'fitur_id' => $fitur_id
                ];
            }
            // Hapus detail fitur yang sudah ada untuk id_pesan tertentu sebelum menambahkan yang baru
            Detail_paket_fitur::where('paket_id', $paket_id)->delete();
            // Masukkan detail fitur yang baru
            Detail_paket_fitur::insert($dataToInsert);
        }
        return redirect()->route('admin-settingPaket')->with('success', 'Data berhasil disimpan!');
    }
}
