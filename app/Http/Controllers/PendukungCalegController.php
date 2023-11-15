<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\Tps;
use App\Models\CalegRi;
use App\Models\DapilRi;
use App\Models\Kabkota;
use App\Models\Wilayah;
use App\Models\Provinsi;
use App\Models\RefAgama;
use App\Models\CalegProv;
use App\Models\DapilProv;
use App\Models\Kecamatan;
use App\Models\CalegKabkota;
use App\Models\DapilKabkota;
use App\Models\RefPekerjaan;
use App\Models\TimReferensi;
use Illuminate\Http\Request;
use App\Models\RefPendidikan;
use App\Models\CalegPendukung;
use App\Models\CalegPendukungRi;
use App\Models\CalegPendukungProv;
use App\Models\KlasifikasiBantuan;
use Illuminate\Routing\Controller;
use App\Models\KlasifikasiPendukung;
use App\Models\CalegPendukungKabkota;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class PendukungCalegController extends Controller
{
    public function dashboard(Request $request)
    {

        //filter per dapil
        $level_caleg = $request->session()->get('level_caleg');
        $dapil_id = $request->session()->get('dapil_id');
        $dapil_kabkota = $request->session()->get('kabkota_dapil');
        $dapil_kecamatan = $request->session()->get('kecamatan_dapil');
        $caleg_id = $request->session()->get('caleg_id');

        $pendukung = null;

        // dd($total_pendukung);

        if ($level_caleg > 1) {
            $kabkota_dapil = $request->session()->get('kabkota_dapil');
            $kabkota_list = Kabkota::whereIn('id', $kabkota_dapil)->get();
        } else {
            $kabkota_list = Kabkota::get();
        }


        // kalo default tapilih kelurahan
        if (
            request('kelurahandesa') != '' and
            request('kecamatan') != '' and request('kabkota') != '' and
            request('prov') != ''
        ) {
            $get_data = Wilayah::where('id', request('kelurahandesa'))->first();
            $get_data_turunan = Tps::where('wilayah_id', request('kelurahandesa'))->get();
            $pendukung = CalegPendukung::cari([])->where('kelurahan_desa', request('kelurahandesa'))->get();

            if ($level_caleg == 1) {
                $pendukung = CalegPendukungRi::cari([])->where('kelurahan_desa', request('kelurahandesa'))->get();
            } elseif ($level_caleg == 2) {
                $pendukung = CalegPendukungProv::cari([])->where('kelurahan_desa', request('kelurahandesa'))->get();
            } elseif ($level_caleg == 3) {
                $pendukung = CalegPendukungKabkota::cari([])->where('kelurahan_desa', request('kelurahandesa'))->get();
            }

            $where_turunan = 'tps';
        }

        // kalo default tapilih kecamatan
        elseif (
            request('kecamatan') != '' and request('kabkota') != '' and
            request('prov') != ''
        ) {
            $get_data = Kecamatan::where('id', request('kecamatan'))->first();
            $get_data_turunan = Wilayah::where('parent_id', request('kecamatan'))->get();

            if ($level_caleg == 1) {
                $pendukung = CalegPendukungRi::cari([])->where('kecamatan', request('kecamatan'))->get();
            } elseif ($level_caleg == 2) {
                $pendukung = CalegPendukungProv::cari([])->where('kecamatan', request('kecamatan'))->get();
            } elseif ($level_caleg == 3) {
                $pendukung = CalegPendukungKabkota::cari([])->where('kecamatan', request('kecamatan'))->get();
            }

            $where_turunan = 'kelurahan_desa';
        }

        // kalo default tapilih kab kota
        elseif (
            request('kabkota') != '' and
            request('prov') != ''
        ) {
            // dpr kabupaten kota
            if ($level_caleg == 3) {
                $nama_dapil = Kabkota::whereIn('id', $dapil_kabkota)->first()->nama;
                $get_data_turunan = Kecamatan::whereIn('id', $dapil_kecamatan)->get();
                $pendukung = CalegPendukungKabkota::cari([])->where('kabkota', $dapil_kabkota)->get();
                // dd($pendukung);
            }
            // dpr provinsi dan dpr ri
            else {
                $nama_dapil = Kabkota::where('id', request('kabkota'))->first()->nama;
                $get_data_turunan = Kecamatan::where('parent_id', request('kabkota'))->get();

                if ($level_caleg == 1) {
                    $pendukung = CalegPendukungRi::cari([])->where('kabkota', request('kabkota'))->get();
                } elseif ($level_caleg == 2) {
                    $pendukung = CalegPendukungProv::cari([])->where('kabkota', request('kabkota'))->get();
                }
            }

            $where_turunan = 'kecamatan';
            $get_data = Kabkota::where('id', request('kabkota'))->first();
        }

        // kalo defualt utama
        elseif (
            request('prov') != ''
        ) {

            // dpr ri
            if ($level_caleg == 1) {
                $nama_dapil = DapilRi::where('id', $dapil_id)->first()->keterangan;
                $get_data_turunan = Kabkota::get();
                $where_turunan = 'kabkota';
            }
            // dpr provinsi$
            elseif ($level_caleg == 2) {
                $nama_dapil = DapilProv::where('id', $dapil_id)->first()->keterangan;
                $get_data_turunan = Kabkota::whereIn('id', $dapil_kabkota)->get();
                $where_turunan = 'kabkota';
            }
            // dpr kabupaten kota
            elseif ($level_caleg == 3) {
                $nama_dapil = DapilKabkota::where('id', $dapil_id)->first()->keterangan;
                $get_data_turunan = Kecamatan::whereIn('id', $dapil_kecamatan)->get();
                $where_turunan = 'kecamatan';
            }

            $get_data = Provinsi::where('id', request('prov'))->first();
            $get_data->nama = $nama_dapil;

            if ($level_caleg == 1) {
                $pendukung = CalegPendukungRi::cari([])->get();
            } elseif ($level_caleg == 2) {
                $pendukung = CalegPendukungProv::cari([])->get();
            } elseif ($level_caleg == 3) {
                $pendukung = CalegPendukungKabkota::cari([])->get();
                $jenis_kelamin['L'] = CalegPendukungKabkota::with(['pendukung_ref' => function ($query, $dapil_kecamatan) {
                    $query->select('jenis_kelamin');
                    $query->where('jenis_kelamin', 'L');
                    $query->whereIn('kecamatan', $dapil_kecamatan);
                    $query->count();
                }]);

                dd($jenis_kelamin['L']);

                $jenis_kelamin['P'] = CalegPendukungKabkota::with(['pendukung_ref' => function ($query, $dapil_kecamatan) {
                    $query->select('jenis_kelamin');
                    $query->where('jenis_kelamin', 'P');
                    $query->whereIn('kecamatan', $dapil_kecamatan);
                    $query->count();
                }]);
                // $jenis_kelamin['P'] = CalegPendukungKabkota::select('pendukung_ref.jenis_kelamin')->has('pendukung_ref.jenis_kelamin', 'P')->whereIn('pendukung_ref.kecamatan', $dapil_kecamatan)->count();
            }
        }

        // dd($get_data_turunan);

        $list_turunan = [];
        foreach ($get_data_turunan as $item) {

            if ($level_caleg == 1) {
                $pendukung_turunan = CalegPendukungRi::cari([]);
            } elseif ($level_caleg == 2) {
                $pendukung_turunan = CalegPendukungProv::cari([]);
            } elseif ($level_caleg == 3) {
                $pendukung_turunan = CalegPendukungKabkota::cari([]);
            }

            if ($where_turunan == 'tps') {
                $item->nama = sprintf('%03d', $item->nama);


                $fresh_get = $pendukung_turunan->where('tps', $item->nama)
                    ->where('kelurahan_desa', $item->wilayah_id)
                    ->count();
            } else {
                // $fresh_get = $pendukung_turunan->where($where_turunan, $item->id)->count();
                // $itemid = $item->id;
                $fresh_get = $pendukung_turunan->has('pendukung_ref.kecamatan_ref', $item->id)->count();
                // dd($fresh_get);
            }

            array_push($list_turunan, [
                'nama'    =>    $item->nama,
                'jumlah'    =>   $fresh_get ?? null,
            ]);
        }

        $jumlah_PB = $pendukung->where('usia', '>=', 78);
        $jumlah_BB = $pendukung->whereBetween('usia', [59, 77]);
        $jumlah_X = $pendukung->whereBetween('usia', [43, 58]);
        $jumlah_Y = $pendukung->whereBetween('usia', [27, 42]);
        $jumlah_Z = $pendukung->whereBetween('usia', [11, 26]);

        $jenis_kelamin['L'] = Dpt::select('jenis_kelamin')->where('jenis_kelamin', 'L')->whereIn('kecamatan', $dapil_kecamatan)->count();
        $jenis_kelamin['P'] = Dpt::select('jenis_kelamin')->where('jenis_kelamin', 'P')->whereIn('kecamatan', $dapil_kecamatan)->count();

        return view('caleg.pendukung.dashboard', [
            'title' => "PENDUKUNG: $get_data->nama",
            'total_pemilih_turunan' => $pendukung->count(),
            'jenis_kelamin' => $jenis_kelamin,
            'list_turunan' => $list_turunan ?? null,
            'total_pemilih_PB' => $jumlah_PB->count(),
            'total_pemilih_BB' => $jumlah_BB->count(),
            'total_pemilih_X' => $jumlah_X->count(),
            'total_pemilih_Y' => $jumlah_Y->count(),
            'total_pemilih_Z' => $jumlah_Z->count(),
            'kabkota_list' => $kabkota_list,
            'select_kabkota' => null,
            'select_kecamatan' => null,
            'select_kelurahandesa' => null,
            'select_tps' => null
        ]);
    }
    //
    public function index(Request $request)
    {
        //filter per dapil
        $level_caleg = $request->session()->get('level_caleg');

        if (request('kabkota') != '') {
            $get_kabkota = Kabkota::firstWhere('id', request('kabkota'));
            $select_kabkota = [
                'id' => $get_kabkota->id,
                'nama' => $get_kabkota->nama,
            ];
        } else {
            $select_kabkota = NULL;
        }

        if (request('kecamatan') != '') {
            $get_kecamatan = Kecamatan::firstWhere('id', request('kecamatan'));
            $select_kecamatan = [
                'id' => $get_kecamatan->id,
                'nama' => $get_kecamatan->nama,
            ];
        } else {
            $select_kecamatan = NULL;
        }

        if (request('kelurahandesa') != '') {
            $get_kelurahandesa = Wilayah::firstWhere('id', request('kelurahandesa'));
            $select_kelurahandesa = [
                'id' => $get_kelurahandesa->id,
                'nama' => $get_kelurahandesa->nama,
            ];
        } else {
            $select_kelurahandesa = NULL;
        }

        if (request('tps') != '') {
            $string_tps = sprintf('%03d', request('tps'));
            $select_tps = $string_tps;
        } else {
            $select_tps = NULL;
        }

        if (request('cari_nama') != '') {
            $cari_nama = request('cari_nama');
        } else {
            $cari_nama = NULL;
        }

        if ($level_caleg == 1) {
            $pendukung = CalegPendukungRi::with('kabkota_ref', 'kecamatan_ref', 'kelurahandesa_ref')
                ->orderBy("nama", "asc")
                ->cari(request(['kabkota', 'kecamatan', 'kelurahandesa', 'tps', 'cari_nama']));
        }

        if ($level_caleg == 2) {
            $pendukung = CalegPendukungProv::with('kabkota_ref', 'kecamatan_ref', 'kelurahandesa_ref')
                ->orderBy("nama", "asc")
                ->cari(request(['kabkota', 'kecamatan', 'kelurahandesa', 'tps', 'cari_nama']));
        }

        if ($level_caleg == 3) {
            $pendukung = CalegPendukungKabkota::with('klasifikasi_ref', 'bantuan_ref', 'relawan_ref', 'pendukung_ref', 'pendukung_ref.kabkota_ref', 'pendukung_ref.kecamatan_ref', 'pendukung_ref.kelurahandesa_ref')
                // ->orderBy("pendukung_ref.nama", "asc")
                ->cari(request(['kabkota', 'kecamatan', 'kelurahandesa', 'tps', 'cari_nama']));
        }

        if ($level_caleg > 1) {
            $kabkota_dapil = $request->session()->get('kabkota_dapil');
            $kabkota_list = Kabkota::whereIn('id', $kabkota_dapil)->get();
        } else {
            $kabkota_list = Kabkota::get();
        }

        // dd($pendukung->get());

        return view('caleg.pendukung.index', [
            'title' => 'Data Pendukung',
            'pendukung' => $pendukung->cursorPaginate(300)->withQueryString(),
            'total_get' => $pendukung->count(),
            'kabkota_list' => $kabkota_list,
            'select_kabkota' => $select_kabkota,
            'select_kecamatan' => $select_kecamatan,
            'select_kelurahandesa' => $select_kelurahandesa,
            'select_tps' => $select_tps,
            'cari_nama' => $cari_nama,
        ]);
    }

    public function create(Request $request, $id_dpt, $id_status)
    {

        // 1 sudah terinput di pendukung , 2 belum terinput di pendukung
        $agama = RefAgama::all();
        $pekerjaan = RefPekerjaan::all();
        $pendidikan = RefPendidikan::all();

        $user_id = $request->session()->get('user_id');
        $referensi = TimReferensi::where('user_id_caleg', $user_id)->get();
        $bantuan = KlasifikasiBantuan::where('user_id', $user_id)->get();
        $klasifikasi = KlasifikasiPendukung::where('user_id', $user_id)->get();

        // dd($user_id);

        if ($id_status == 1) {
            $level_caleg = $request->session()->get('level_caleg');
            if ($level_caleg == 1) {
                $dpt = CalegPendukung::with(['pendukung_caleg_ri'])->where('dpt', $id_dpt)->first();
            } elseif ($level_caleg == 2) {
                $dpt = CalegPendukung::with(['pendukung_caleg_prov'])->where('dpt', $id_dpt)->first();
            } elseif ($level_caleg == 3) {
                $dpt = CalegPendukung::with(['pendukung_caleg_kabkota'])->where('dpt', $id_dpt)->first();
                // dd($id_dpt);
            }
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
            'bantuan' => $bantuan,
            'klasifikasi' => $klasifikasi,
            'referensi' => $referensi,
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
        $pendukung_caleg['klasifikasi_bantuan_id'] = $request->klasifikasi_bantuan_id;
        $pendukung_caleg['strtime_tanggal_lahir'] = strtotime($pendukung_caleg['tanggal_lahir']);
        $pendukung_caleg['long'] = $request->long;
        $pendukung_caleg['lat'] = $request->lat;
        $pendukung_caleg['dpt'] = $pendukung['dpt'];

        $caleg_id = $request->session()->get('caleg_id');
        $pendukung_caleg['celeg_id'] = $caleg_id;

        $level_caleg = $request->session()->get('level_caleg');
        $dapil_id = $request->session()->get('dapil_id');
        // dd($pendukung_caleg);
        if ($level_caleg == 1) {
            // $pendukung['dapil_ri'] = $dapil_id;
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

            // $pendukung['dapil_prov'] = $dapil_id;
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
            // $pendukung['dapil_kabkota'] = $dapil_id;
            $cek_sudah_input = CalegPendukungKabkota::where('dpt', $request->dpt_id)->where('celeg_id', $caleg_id)->first();
            if ($cek_sudah_input) {
                CalegPendukungKabkota::where('id', $cek_sudah_input->id)->update($pendukung_caleg);
            } else {
                CalegPendukungKabkota::create($pendukung_caleg);
            }

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

        // return "berhasil";

        return redirect("$url")->with('pesan', 'Pendukung Berhasil di tambahkan');
    }
}
