<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Detail_paket_template;
use App\Models\fitur;
use App\Models\Paket;
use App\Models\pesan;
use App\Models\Template;
use App\Models\Detail_fitur;
use App\Models\Mempelai_pria;
use App\Models\Mempelai_wanita;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        // $pakets = Paket::all();
        // $templates = Template::all();
        // return view('home.order', compact('pakets', 'templates'));
        $paketId = auth()->user()->paket_id;

        if ($paketId) {
            // Dapatkan template yang terkait dengan `paket_id` pengguna
            $templates = Template::whereHas('pakets', function ($query) use ($paketId) {
                $query->where('paket_id', $paketId);
            })->get();

            $fiturs = fitur::whereHas('pakets', function ($query) use ($paketId) {
                $query->where('paket_id', $paketId);
            })->get();

            $user = Auth::user();
            $namaPaket = $user->paket->nama;

            return view('home.order', ['templates' => $templates, 'fiturs' => $fiturs, 'namaPaket' => $namaPaket]);
        } else {
            return redirect()->route('home.order');
        }
    }

    public function pesan(Request $request)
    {

        $user_id = auth()->user()->id;
        $lastId = Pesan::max('id');
        $id = $lastId ? $lastId + 1 : 1;

        $pesan = new pesan;
        $pesan->id = $id;
        $pesan->id_user = $user_id;
        $pesan->id_template = $request->input('template_id');
        $pesan->save();

        // Simpan data ke tabel kedua
        $mempelai_pria = new Mempelai_pria;
        $mempelai_pria->id_pesan = $id;
        $mempelai_pria->nama_pria = $request->input('nama_mempelai_pria');
        $mempelai_pria->anak_ke = $request->input('anak_ke_pria');
        $mempelai_pria->nama_ayah = $request->input('nama_ayah_pria');
        $mempelai_pria->nama_ibu = $request->input('nama_ibu_pria');
        $mempelai_pria->username_ig = $request->input('username_ig_pria');
        $mempelai_pria->save();

        $mempelai_wanita = new Mempelai_wanita;
        $mempelai_wanita->id_pesan = $id;
        $mempelai_wanita->nama_wanita = $request->input('nama_mempelai_wanita');
        $mempelai_wanita->anak_ke = $request->input('anak_ke_wanita');
        $mempelai_wanita->nama_ayah = $request->input('nama_ayah_wanita');
        $mempelai_wanita->nama_ibu = $request->input('nama_ibu_wanita');
        $mempelai_wanita->username_ig = $request->input('username_ig_wanita');
        $mempelai_wanita->save();

        $data = new Data;
        $data->id_pesan = $id;
        $data->salam_pembuka = $request->input('salam');
        $data->lokasi_acara = $request->input('lokasi_acara');
        $data->tgl_resepsi = $request->input('tgl_akad');
        $data->tgl_akad = $request->input('tgl_resepsi');
        $data->jam_acara = $request->input('jam_acara');
        $data->email = $request->input('email');
        $data->no_wa = $request->input('no_wa');
        $data->nama_panggilan = $request->input('nama_panggilan');
        $data->save();

        // var_dump($request);
        // die;
        $id_pesan = $id; //sudah ada id yang disediakan
        $id_fiturs_selected = $request->input('selected_fiturs');
        if (!empty($id_fiturs_selected)) {
            $dataToInsert = [];
            foreach ($id_fiturs_selected as $id_fitur) {
                $dataToInsert[] = [
                    'id_pesan' => $id_pesan,
                    'id_fitur' => $id_fitur
                ];
            }

            Detail_fitur::insert($dataToInsert);
        }

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
