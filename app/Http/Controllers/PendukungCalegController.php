<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\CalegRi;
use App\Models\RefAgama;
use App\Models\CalegProv;
use App\Models\CalegKabkota;
use App\Models\RefPekerjaan;
use Illuminate\Http\Request;
use App\Models\RefPendidikan;
use App\Models\CalegPendukung;
use App\Models\CalegPendukungKabkota;
use App\Models\CalegPendukungProv;
use App\Models\CalegPendukungRi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class PendukungCalegController extends Controller
{
    public function create($id_dpt, $id_status)
    {

        // 1 sudah terinput di pendukung , 2 belum terinput di pendukung
        $agama = RefAgama::all();
        $pekerjaan = RefPekerjaan::all();
        $pendidikan = RefPendidikan::all();

        if ($id_status == 1) {
            $dpt = CalegPendukung::where('dpt', $id_dpt)->first();
        }

        if ($id_status == 2) {
            $dpt = Dpt::where('id', $id_dpt)->first();
        }

        $url_direct = url()->previous();

        $level_caleg = session()->get('level_caleg');
        if ($level_caleg == 3) {
            $view = 'caleg.pendukung.form_caleg_kabkota';
        } elseif ($level_caleg == 2) {
            $view = 'caleg.pendukung.form_caleg_prov';
        } elseif ($level_caleg == 1) {
            $view = 'caleg.pendukung.form_caleg_ri';
        }

        return view($view, [
            'title' => 'Input Pendukung',
            'agama' => $agama,
            'dpt' => $dpt,
            'status' => $id_status,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'jenis_kelamin' => ['L', 'P'],
            'status_perkawinan' => ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'],
            'url_direct' => $url_direct
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * tambah pendukung dulu
     * tambah pendukung kabkota/prov/ri
     */
    public function store(Request $request)
    {
        if ($request->file('foto')) {
            $validasi['foto'] = ['image', 'file', 'mimes:jpeg,png,jpg', 'max:5024'];
        } else {
            $validasi['foto'] = [];
        }

        $request->validate($validasi);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $path = Storage::put('foto_pendukung_teman_caleg', $file);
            Storage::setVisibility($path, 'public');
            $pendukung_caleg['foto'] = Storage::url($path);
        }

        $status = $request->status;
        $url = $request->url_direct;

        // dd($request->dpt_id);

        $dpt = Dpt::where('id', $request->dpt_id)->first();
        $pendukung['dpt'] = $dpt->id;
        $pendukung['nama'] = $dpt->nama;
        $pendukung['kabkota'] = $dpt->kabkota;
        $pendukung['kecamatan'] = $dpt->kecamatan;
        $pendukung['kelurahan_desa'] = $dpt->kelurahan_desa;
        $pendukung['rt'] = $dpt->rt;
        $pendukung['rw'] = $dpt->rw;
        $pendukung['tps'] = $dpt->tps;
        $pendukung['usia'] = $dpt->usia;
        $pendukung['jenis_kelamin'] = $dpt->jenis_kelamin;

        $pendukung_caleg['ktp'] = $request->ktp;
        $pendukung_caleg['tempat_lahir'] = $request->tempat_lahir;
        $pendukung_caleg['tanggal_lahir'] = $request->tanggal_lahir;
        $pendukung_caleg['agama'] = $request->agama;
        $pendukung_caleg['pekerjaan'] = $request->pekerjaan;
        $pendukung_caleg['alamat_detail'] = $request->alamat_detail;
        $pendukung_caleg['no_hp'] = $request->no_hp;
        $pendukung_caleg['no_wa'] = $request->no_wa;
        $pendukung_caleg['status_perkawinan'] = $request->status_perkawinan;
        $pendukung_caleg['referensi_id'] = $request->referensi_id;
        $pendukung_caleg['klasifikasi_id'] = $request->klasifikasi_id;
        $pendukung_caleg['strtime_tanggal_lahir'] = strtotime($pendukung_caleg['tanggal_lahir']);
        $pendukung_caleg['long'] = $request->long;
        $pendukung_caleg['lat'] = $request->lat;

        $caleg_id = $request->session()->get('caleg_id');
        $pendukung_caleg['caleg_id'] = $caleg_id;

        $level_caleg = $request->session()->get('level_caleg');
        $dapil_id = $request->session()->get('dapil_id');
        dd($pendukung_caleg);
        if ($level_caleg == 1) {
            $pendukung['dapil_ri'] = $dapil_id;
            CalegPendukungRi::create($pendukung_caleg);

            // if ($request->caleg_prov != 'TIDAK MEMILIH CALEG DPR PROVINSI') {
            //     $data['caleg_prov'] = $request->caleg_prov;
            //     $data['dapil_prov'] = CalegProv::where('id', $request->caleg_prov)->first()->dapil_prov;

            //     if (isset($dpt->pendukung->user_update_prov)) {
            //         $data['user_update_prov'] = $dpt->pendukung->user_update_prov;
            //     } else {
            //         $data['user_update_prov'] = $caleg_id;
            //     }
            // }

            // if ($request->caleg_kabkota != 'TIDAK MEMILIH CALEG DPR KABUPATEN KOTA') {
            //     $data['caleg_kabkota'] = $request->caleg_kabkota;
            //     $data['dapil_kabkota'] = CalegKabkota::where('id', $request->caleg_kabkota)->first()->dapil_kabkota;
            //     if (isset($dpt->pendukung->user_update_kabkota)) {
            //         $data['user_update_kabkota'] = $dpt->pendukung->user_update_kabkota;
            //     } else {
            //         $data['user_update_kabkota'] = $caleg_id;
            //     }
            // }
        } elseif ($level_caleg == 2) {

            $pendukung['dapil_prov'] = $dapil_id;
            CalegPendukungProv::create($pendukung_caleg);

            // if ($request->caleg_ri != 'TIDAK MEMILIH CALEG DPR RI') {
            //     $data['caleg_ri'] = $request->caleg_prov;
            //     $data['dapil_ri'] = CalegProv::where('id', $request->caleg_ri)->first()->dapil_ri;

            //     if (isset($dpt->pendukung->user_update_ri)) {
            //         $data['user_update_ri'] = $dpt->pendukung->user_update_ri;
            //     } else {
            //         $data['user_update_ri'] = $caleg_id;
            //     }
            // }

            // if ($request->caleg_kabkota != 'TIDAK MEMILIH CALEG DPR KABUPATEN KOTA DARI NASDEM') {
            //     $data['caleg_kabkota'] = $request->caleg_kabkota;
            //     $data['dapil_ri'] = CalegKabkota::where('id', $request->caleg_kabkota)->first()->dapil_kabkota;
            //     if (isset($dpt->pendukung->user_update_kabkota)) {
            //         $data['user_update_kabkota'] = $dpt->pendukung->user_update_kabkota;
            //     } else {
            //         $data['user_update_kabkota'] = $caleg_id;
            //     }
            // }
        } elseif ($level_caleg == 3) {
            $pendukung['dapil_kabkota'] = $dapil_id;
            CalegPendukungKabkota::create($pendukung_caleg);
            // if ($request->caleg_prov != 'TIDAK MEMILIH CALEG DPR PROVINSI') {
            //     $data['caleg_prov'] = $request->caleg_prov;
            //     $data['dapil_prov'] = CalegProv::where('id', $request->caleg_prov)->first()->dapil_prov;
            //     if (isset($dpt->pendukung->user_update_prov)) {
            //         $data['user_update_prov'] = $dpt->pendukung->user_update_prov;
            //     } else {
            //         $data['user_update_prov'] = $caleg_id;
            //     }
            // }

            // if ($request->caleg_ri != 'TIDAK MEMILIH CALEG DPR RI DARI NASDEM') {
            //     $data['caleg_ri'] = $request->caleg_ri;
            //     $data['dapil_ri'] = CalegRi::where('id', $request->caleg_ri)->first()->dapil_ri;

            //     if (isset($dpt->pendukung->user_update_ri)) {
            //         $data['user_update_ri'] = $dpt->pendukung->user_update_ri;
            //     } else {
            //         $data['user_update_ri'] = $caleg_id;
            //     }
            // }
        }

        // dd($data);
        if ($status == 2) {
            CalegPendukung::create($pendukung);
        }

        return redirect("$url")->with('pesan', 'Pendukung Berhasil di tambahkan');
    }
}
