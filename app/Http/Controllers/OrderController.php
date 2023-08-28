<?php

namespace App\Http\Controllers;

use App\Mail\notifConfirm;
use App\Models\Data;
use App\Models\Detail_paket_template;
use App\Models\fitur;
use App\Models\Paket;
use App\Models\pesan;
use App\Models\Template;
use App\Models\Detail_fitur;
use App\Models\GalleryUser;
use App\Models\Mempelai_pria;
use App\Models\Mempelai_wanita;
use App\Models\User;
use Carbon\Carbon;
use ErrorException;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $order = auth()->user()->is_order;
        if ($order) {
            $Id = auth()->user()->id;
            $pesan = pesan::where('id_user', $Id)->get()[0];
            // dd($pesan);
            $fiturs = Detail_fitur::where('id_pesan', $pesan->id)->get();

            $cooldownRemaining = 0;
            if ($pesan->status > 0) {
                $confirmedTimestamp = strtotime($pesan->updated_at);
                $cooldownDuration = 60 * 60; // Durasi cooldown dalam detik (60 menit)
                $currentTime = time();
                $cooldownRemaining = max(0, $confirmedTimestamp + $cooldownDuration - $currentTime);
            }

            return view('home.userOrder', compact('pesan', 'fiturs', 'cooldownRemaining'));
        } else {
            $paketId = auth()->user()->paket_id;
            $namaUser = auth()->user();

            if ($paketId) {
                $templates = Template::whereHas('pakets', function ($query) use ($paketId) {
                    $query->where('paket_id', $paketId);
                })->get();

                $fiturs = fitur::whereHas('pakets', function ($query) use ($paketId) {
                    $query->where('paket_id', $paketId);
                })->get();

                $user = Auth::user();
                $namaPaket = $user->paket->nama;

                return view('home.order', ['templates' => $templates, 'fiturs' => $fiturs, 'namaPaket' => $namaPaket, 'namaUser' => $namaUser]);
            } else {
                return redirect()->route('home.order');
            }
        }
    }

    public function pesan(Request $request)
    {

        // dd($request->all());

        try {
            $request->validate([
                'fotoPria' => 'required|mimes:png,jpeg,jpg,pdf|max:5120',
                'fotoWanita' => 'required|mimes:png,jpeg,jpg,pdf|max:5120',
                'fotoBanner' => 'required|mimes:png,jpeg,jpg,pdf|max:5120',
                'fotoGallery' => 'required|array',
                'fotoGallery.*' => 'mimes:png,jpeg,jpg,pdf',
                'fotoThumbnail' => 'required|mimes:png,jpeg,jpg,pdf|max:5120',
                'fotoCouple' => 'required|mimes:png,jpeg,jpg,pdf|max:5120',
            ]);


            $user_id = auth()->user()->id;
            $lastId = Pesan::max('id');
            $id = $lastId ? $lastId + 1 : 1;

            User::where('id', $user_id)->update(['is_order' => 1]);
            $user = User::where('id', $user_id)->get()[0];
            // dd($user);

            $pesan = new pesan;
            if ($pesan) {
                $pesan->id = $id;
                $pesan->id_user = $user_id;
                $pesan->encrypted = bcrypt($user->name);
                $pesan->id_template = $request->input('template_id');
                $pesan->save();
            }
            // Simpan data ke tabel kedua
            $mempelai_pria = new Mempelai_pria;
            if ($mempelai_pria) {
                $mempelai_pria->id_pesan = $id;
                $mempelai_pria->nama_pria = $request->input('nama_mempelai_pria');
                $mempelai_pria->nama_pria_lengkap = $request->input('nama_mempelai_pria_lengkap');
                $mempelai_pria->anak_ke = $request->input('anak_ke_pria');
                $mempelai_pria->nama_ayah = $request->input('nama_ayah_pria');
                $mempelai_pria->nama_ibu = $request->input('nama_ibu_pria');
                $mempelai_pria->username_ig = $request->input('username_ig_pria');
                $fileName = now()->timestamp . '.' . $request->file('fotoPria')->getClientOriginalExtension();
                $mempelai_pria->image = $request->file('fotoPria')->storeAs('fotoPria', $fileName);
                $mempelai_pria->save();
            }
            $mempelai_wanita = new Mempelai_wanita;
            if ($mempelai_wanita) {
                $mempelai_wanita->id_pesan = $id;
                $mempelai_wanita->nama_wanita = $request->input('nama_mempelai_wanita');
                $mempelai_wanita->nama_wanita_lengkap = $request->input('nama_mempelai_wanita_lengkap');
                $mempelai_wanita->anak_ke = $request->input('anak_ke_wanita');
                $mempelai_wanita->nama_ayah = $request->input('nama_ayah_wanita');
                $mempelai_wanita->nama_ibu = $request->input('nama_ibu_wanita');
                $mempelai_wanita->username_ig = $request->input('username_ig_wanita');
                $fileName = now()->timestamp . '.' . $request->file('fotoWanita')->getClientOriginalExtension();
                $mempelai_wanita->image = $request->file('fotoWanita')->storeAs('fotoWanita', $fileName);
                $mempelai_wanita->save();
            }


            $data = new Data;
            $data->id_pesan = $id;
            $data->salam_pembuka = $request->input('salam');
            $data->lokasi_akad = $request->input('lokasi_akad');
            $data->lokasi_resepsi = $request->input('lokasi_resepsi');
            $data->tgl_resepsi = $request->input('tgl_akad');
            $data->tgl_akad = $request->input('tgl_resepsi');
            $data->jam_akad = $request->input('jam_akad');
            $data->jam_resepsi = $request->input('jam_resepsi');
            $data->email = $request->input('email');
            $data->no_wa = $request->input('no_wa');
            $data->iframeMaps_akad = $request->input('iframeMaps_akad');
            $data->iframeMaps_resepsi = $request->input('iframeMaps_resepsi');
            $data->nama_panggilan = $request->input('nama_panggilan');
            $fileNameThumbnail = now()->timestamp . '.' . $request->file('fotoThumbnail')->getClientOriginalExtension();
            $data->imgThumbnail = $request->file('fotoThumbnail')->storeAs('fotoThumbnail', $fileNameThumbnail);
            $fileNameBanner = now()->timestamp . '.' . $request->file('fotoBanner')->getClientOriginalExtension();
            $data->imgBanner = $request->file('fotoBanner')->storeAs('fotoBanner', $fileNameBanner);
            $fileNameCouple = now()->timestamp . '.' . $request->file('fotoCouple')->getClientOriginalExtension();
            $data->imgCouple = $request->file('fotoCouple')->storeAs('fotoCouple', $fileNameCouple);
            $data->nama_pasangan = $request->input('nama_mempelai_pria') . '&' . $request->input('nama_mempelai_wanita');
            $data->save();

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

            foreach ($request->file('fotoGallery') as $uploadedFile) {
                $gallery = new GalleryUser;
                $gallery->id_pesan = $id;
                $fileName = now()->timestamp . '_' . uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
                $gallery->nameFile = $uploadedFile->storeAs('fotoGallery', $fileName);
                $gallery->save();
            }

            // var_dump($request);
            // die;


            // Redirect atau berikan respons sesuai kebutuhan
            return redirect()->route('homeorder')->with('success', 'Data berhasil disimpan!');
        } catch (ErrorException $e) {
            return redirect()->back()->with('Failed', 'Data Gagal disimpan!');
        }
    }

    public function edit()
    {
        $Id = auth()->user()->id;
        $pesan = pesan::where('id_user', $Id)->get()[0];
        $fitur_pilih = Detail_fitur::where('id_pesan', $pesan->id)->get();
        $paketId = auth()->user()->paket_id;
        $namaUser = auth()->user();

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

            return view('home.userEdit', compact('pesan', 'fiturs', 'namaPaket', 'templates', 'fitur_pilih', 'namaUser'));
        }
    }

    public function ubah(Request $request)
    {
        try {

            $user = auth()->user()->id;
            $id = pesan::where('id_user', $user)->get()[0]; // Mengeksekusi kueri dan mendapatkan model
            $id_pesan = $id->id;

            pesan::where('id', $id_pesan)->update([
                'id_template' => $request->input('template_id')
            ]);

            Mempelai_pria::where('id_pesan', $id_pesan)->update([
                'nama_pria' => $request->input('nama_mempelai_pria'),
                'nama_pria_lengkap' => $request->input('nama_mempelai_pria_lengkap'),
                'anak_ke' => $request->input('anak_ke_pria'),
                'nama_ayah' => $request->input('nama_ayah_pria'),
                'nama_ibu' => $request->input('nama_ibu_pria'),
                'username_ig' => $request->input('username_ig_pria')
            ]);

            Mempelai_wanita::where('id_pesan', $id_pesan)->update([
                'nama_wanita' => $request->input('nama_mempelai_wanita'),
                'nama_wanita_lengkap' => $request->input('nama_mempelai_wanita_lengkap'),
                'anak_ke' => $request->input('anak_ke_wanita'),
                'nama_ayah' => $request->input('nama_ayah_wanita'),
                'nama_ibu' => $request->input('nama_ibu_wanita'),
                'username_ig' => $request->input('username_ig_wanita')
            ]);

            Data::where('id_pesan', $id_pesan)->update([
                'salam_pembuka' => $request->input('salam'),
                'lokasi_akad' => $request->input('lokasi_akad'),
                'lokasi_resepsi' => $request->input('lokasi_resepsi'),
                'tgl_resepsi' => $request->input('tgl_resepsi'),
                'tgl_akad' => $request->input('tgl_akad'),
                'jam_akad' => $request->input('jam_akad'),
                'jam_resepsi' => $request->input('jam_resepsi'),
                'email' => $request->input('email'),
                'no_wa' => $request->input('no_wa'),
                'nama_panggilan' => $request->input('nama_panggilan'),
                'nama_pasangan' => $request->input('nama_mempelai_pria') . '&' . $request->input('nama_mempelai_wanita'),
                'iframeMaps_akad' => $request->input('iframeMaps_akad'),
                'iframeMaps_resepsi' => $request->input('iframeMaps_resepsi'),
            ]);

            $id_fiturs_selected = $request->input('selected_fiturs');
            if (!empty($id_fiturs_selected)) {
                $dataToInsert = [];
                foreach ($id_fiturs_selected as $id_fitur) {
                    $dataToInsert[] = [
                        'id_pesan' => $id_pesan,
                        'id_fitur' => $id_fitur
                    ];
                }
                // Hapus detail fitur yang sudah ada untuk id_pesan tertentu sebelum menambahkan yang baru
                Detail_fitur::where('id_pesan', $id_pesan)->delete();
                // Masukkan detail fitur yang baru
                Detail_fitur::insert($dataToInsert);
            }

            return redirect()->route('homeorder')->with('success', 'Data berhasil disimpan!');
        } catch (ErrorException $e) {
            return redirect()->back()->with('Failed', 'Data Gagal disimpan!');
        }
    }

    public function preview(Request $request)
    {
        $id = $request->input('id');
        // dd($id);
        $pesan = pesan::where('id', $id)->get()[0];
        // dd($pesan);
        $fitur = [];

        foreach ($pesan->fitur as $fit) {
            $fitur[] = $fit->fitur_name->nama;
        }
        // return $pesan->template->nama;
        return view('preview.' . strtolower($pesan->template->nama), compact('pesan', 'fitur'));
    }

    public function deleteUser($id)
    {
        $user = Pesan::find($id);

        $title = 'Delete Pesan!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        if (!$user) {
            return redirect()->route('admin-user')->with('error', 'Data User tidak ditemukan.');
        }
        $user->delete();

        return redirect()->route('admin-user')->with('success', 'Data User berhasil dihapus.');
    }

    public function confirm()
    {
        $user = auth()->user()->id;
        $pesan = pesan::where('id_user', $user)->get()[0];
        $id_pesan = $pesan->id;
        $manager = User::where('level', '1')->get();
        // var_dump($manager);
        Pesan::where('id', $id_pesan)->update([
            'status' => '1'
        ]);
        foreach ($manager as $manager) {
            Mail::to($manager->email)->send(new notifConfirm($pesan));
        }
        return redirect()->route('homeorder')->with('success', 'Pesanan Sudah di Confirm! Harap Tunggu!');
    }
}
