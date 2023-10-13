<?php

namespace App\Http\Controllers;

use App\Models\CalegKabkota;
use App\Models\CalegProv;
use App\Models\CalegRi;
use App\Models\DapilKabkota;
use App\Models\DapilProv;
use App\Models\DapilRi;
use Illuminate\Http\Request;
use App\Models\TimReferensi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class CalegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $caleg_ri = CalegRi::with(['user']);
        $caleg_prov = CalegProv::with(['user']);
        $caleg_kabkota = CalegKabkota::with(['user']);
       
        return view('admin.caleg.index', [
            'title' => 'Client Caleg',
            'caleg_ri' => $caleg_ri,
            'caleg_prov' => $caleg_prov,
            'caleg_kabkota' => $caleg_kabkota,
        ]);
    }

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dapil_ri = DapilRi::all();
        $dapil_prov = DapilProv::all();
        $dapil_kabkota = DapilKabkota::all();
  
        // dd($kabupaten_kota);

        return view('dpw.kta.create', [
            'title' => 'Tambah Client',
            'dapil_ri' => $dapil_ri,
            'dapil_prov' => $dapil_prov,
            'dapil_kabkota' => $dapil_kabkota,
            'jenis_kelamin' => ['L', 'P'],
            'status_perkawinan' => ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'],
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validasi = [
            'user_id' => ['required'],
            'partai_id' => ['required'],
            'nama' => ['required'],
            'no_urut' => [],
            'jenis_kelamin' => [],
            'tempat_lahir' => [],
            'tanggal_lahir' => [],
            'alamat' => [],
            'no_wa' => [],
            'keterangan' => [],

            'username' => ['required'],
            'password' => ['required'],
        ];

        if ($request->file('foto')) {
            $validasi['foto'] = ['image', 'file', 'mimes:jpeg,png,jpg', 'max:5024'];
        }

        $validateData = $request->validate($validasi);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $path = Storage::put('kta', $file);
            Storage::setVisibility($path, 'public');
            $validateData['foto'] = Storage::url($path);
        }

        // dd($validateData);
        if($request->dapil_ri) {
            $validateData['dapil_ri'] = $request->dapil_ri;
            CalegRi::create($validateData);
        }

        if($request->dapil_prov) {
            $validateData['dapil_prov'] = $request->dapil_prov;
            CalegProv::create($validateData);
        }

        if($request->dapil_kabkota) {
            $validateData['dapil_kabkota'] = $request->dapil_kabkota;
            CalegKabkota::create($validateData);
        }

        return redirect('/caleg')->with('pesan', 'data barhasil di tambah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimReferensi $kta)
    {
        $dapil_ri = DapilRi::all();
        $dapil_prov = DapilProv::all();
        $dapil_kabkota = DapilKabkota::all();
    

        return view('dpw.kta.edit', [
            'title' => 'Edit Caleg',
            'jenis_kelamin' => ['L', 'P'],
            'status_perkawinan' => ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'],
            'kta' => $kta
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, TimReferensi $kta)
    {
        // dd($request);
        $validasi = [
            'user_id' => ['required'],
            'partai_id' => ['required'],
            'nama' => ['required'],
            'no_urut' => [],
            'jenis_kelamin' => [],
            'tempat_lahir' => [],
            'tanggal_lahir' => [],
            'alamat' => [],
            'no_wa' => [],
            'keterangan' => [],

            'username' => ['required'],
            'password' => ['required'],
        ];

        if ($request->file('foto')) {
            $validasi['foto'] = ['image', 'file', 'mimes:jpeg,png,jpg', 'max:5024'];
        }

        $validateData = $request->validate($validasi);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $path = Storage::put('kta', $file);
            Storage::setVisibility($path, 'public');
            $validateData['foto'] = Storage::url($path);
        }

        $validateData['strtime_tanggal_lahir'] = strtotime($validateData['tanggal_lahir']);

        TimReferensi::where(
            'id',
            $kta->id
        )->update($validateData);

        return redirect("/kta/$kta->id")->with('pesan', 'data barhasil di ubah');
    }

   
}
