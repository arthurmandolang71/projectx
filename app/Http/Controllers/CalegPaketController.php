<?php

namespace App\Http\Controllers;

use App\Models\CalegKabkota;
use App\Models\CalegProv;
use App\Models\CalegRi;
use App\Models\PaketKabkotaProv;
use App\Models\PaketKabkotaRi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalegPaketController extends Controller
{
    //
    public function index()
    {
        $paket_prov = PaketKabkotaProv::with(['caleg_kabkota_ref', 'caleg_prov_ref', 'caleg_kabkota_ref.dapil', 'caleg_prov_ref.dapil'])->get();
        $paket_kabkota = PaketKabkotaRi::with(['caleg_kabkota_ref', 'caleg_ri_ref', 'caleg_kabkota_ref.dapil', 'caleg_ri_ref.dapil'])->get();

        // dd($paket_prov);

        return view('admin.calegpaket.index', [
            'title' => 'Paket Caleg',
            'paket_prov' => $paket_prov,
            'paket_kabkota' => $paket_kabkota,
        ]);
    }

    public function create()
    {
        $caleg_ri = CalegRi::all();
        $caleg_prog = CalegProv::all();
        $caleg_kabkota = CalegKabkota::all();

        // dd($caleg_kabkota);

        return view('admin.calegpaket.create', [
            'title' => 'Tambah Paket Caleg',
            'caleg_ri' => $caleg_ri,
            'caleg_prov' => $caleg_prog,
            'caleg_kabkota' => $caleg_kabkota,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $caleg_ri = CalegRi::all();
        $caleg_prog = CalegProv::all();
        $caleg_kabkota = CalegKabkota::all();

        //get paket kabkota prov
        $cek_paket_prov = PaketKabkotaProv::find($id);
        if ($cek_paket_prov) {
            $paket_tipe = 1;
            $getpaketcaleg = PaketKabkotaProv::where('id', $id)->with(['caleg_kabkota_ref', 'caleg_prov_ref', 'caleg_kabkota_ref.dapil', 'caleg_prov_ref.dapil'])->first();
        }

        //get paket kabkota ri
        $cek_paket_prov = PaketKabkotaRi::find($id);
        if ($cek_paket_prov) {
            $paket_tipe = 2;
            $getpaketcaleg = PaketKabkotaRi::where('id', $id)->with(['caleg_kabkota_ref', 'caleg_ri_ref', 'caleg_kabkota_ref.dapil', 'caleg_ri_ref.dapil'])->first();
        }

        // dd($caleg);

        return view('admin.calegpaket.edit', [
            'title' => 'Set Ubah Data Paket Caleg',
            'paket_tipe' => $paket_tipe,
            'caleg_ri' => $caleg_ri,
            'caleg_prov' => $caleg_prog,
            'caleg_kabkota' => $caleg_kabkota,
            'getpaketcaleg' => $getpaketcaleg,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->post());
        if (!$request->is_active) {
            $inset_paket_caleg['is_active'] = false;
        } else {
            $inset_paket_caleg['is_active'] = true;
        }

        if ($request->paket_tipe == 1) {

            $inset_paket_caleg['caleg_prov'] = $request->caleg_prov;
            $inset_paket_caleg['caleg_kabkota'] = $request->caleg_kabkota;
            PaketKabkotaProv::create($inset_paket_caleg);
        }

        if ($request->paket_tipe == 2) {

            $inset_paket_caleg['caleg_ri'] = $request->caleg_ri;
            $inset_paket_caleg['caleg_kabkota'] = $request->caleg_kabkota;
            PaketKabkotaRi::create($inset_paket_caleg);
        }

        return redirect('/calegpaket')->with('pesan', 'data barhasil di tambah');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        if (!$request->is_active) {
            $inset_paket_caleg['is_active'] = false;
        } else {
            $inset_paket_caleg['is_active'] = true;
        }

        if ($request->paket_tipe == 1) {
            $inset_paket_caleg['caleg_prov'] = $request->caleg_prov;
            $inset_paket_caleg['caleg_kabkota'] = $request->caleg_kabkota;
            PaketKabkotaProv::where('id', $id)->update($inset_paket_caleg);
        }

        if ($request->paket_tipe == 2) {
            $inset_paket_caleg['caleg_ro'] = $request->caleg_ri;
            $inset_paket_caleg['caleg_kabkota'] = $request->caleg_kabkota;
            PaketKabkotaRi::where('id', $id)->update($inset_paket_caleg);
        }

        return redirect("/calegpaket")->with('pesan', 'data barhasil di update! silakan cek kembali');
    }
}
