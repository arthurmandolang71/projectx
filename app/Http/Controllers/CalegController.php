<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partai;
use App\Models\CalegRi;
use App\Models\DapilRi;
use App\Models\CalegProv;
use App\Models\DapilProv;
use App\Models\CalegKabkota;
use App\Models\DapilKabkota;
use App\Models\TimReferensi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CalegController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caleg_ri = CalegRi::with(['user', 'partai', 'dapil'])->get();
        $caleg_prov = CalegProv::with(['user', 'partai', 'dapil'])->get();
        $caleg_kabkota = CalegKabkota::with(['user', 'partai', 'dapil'])->get();

        // dd($caleg_kabkota);

        return view('admin.caleg.index', [
            'title' => 'Admin Caleg',
            'caleg_ri' => $caleg_ri,
            'caleg_prov' => $caleg_prov,
            'caleg_kabkota' => $caleg_kabkota,
        ]);
    }

    public function create()
    {
        $dapil_ri = DapilRi::all();
        $dapil_prov = DapilProv::all();
        $dapil_kabkota = DapilKabkota::all();
        $partai = Partai::all();

        // dd($kabupaten_kota);

        return view('admin.caleg.create', [
            'title' => 'Tambah Client',
            'dapil_ri' => $dapil_ri,
            'dapil_prov' => $dapil_prov,
            'dapil_kabkota' => $dapil_kabkota,
            'partai' => $partai,
            'jenis_kelamin' => ['L', 'P']
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_caleg)
    {
        $dapil_ri = DapilRi::all();
        $dapil_prov = DapilProv::all();
        $dapil_kabkota = DapilKabkota::all();
        $partai = Partai::all();

        $cek_ri = CalegRi::find($id_caleg);
        if ($cek_ri) {
            $caleg_level = 1;
            $getcaleg = CalegRi::where('id', $id_caleg);
        }

        $cek_prov = CalegProv::find($id_caleg);
        if ($cek_prov) {
            $caleg_level = 2;
            $getcaleg = CalegProv::where('id', $id_caleg);
        }

        $cek_kabkota = CalegKabkota::find($id_caleg);
        if ($cek_kabkota) {
            $caleg_level = 3;
            $getcaleg = CalegKabkota::where('id', $id_caleg);
        }

        $caleg = $getcaleg->with('user')->first();

        // dd($caleg);

        return view('admin.caleg.edit', [
            'title' => 'Set Ubah Data Client',
            'caleg_level' => $caleg_level,
            'caleg' =>  $caleg,
            'dapil_ri' => $dapil_ri,
            'dapil_prov' => $dapil_prov,
            'dapil_kabkota' => $dapil_kabkota,
            'partai' => $partai,
            'jenis_kelamin' => ['L', 'P']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validasi = [
            'username' => ['required', 'unique:users'],
            'ktp' => ['required', 'unique:caleg_dapil_ri', 'unique:caleg_dapil_prov', 'unique:caleg_dapil_kabkota'],
            'partai_id' => ['required'],
            'nama' => ['required'],
            'no_urut' => ['required'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => [],
            'tanggal_lahir' => [],
            'alamat' => [],
            'no_wa' => [],
            'keterangan' => [],
            'subdomain' => [],
        ];

        if ($request->file('foto_profil')) {
            $validasi['foto_profil'] = ['image', 'file', 'mimes:jpeg,png,jpg', 'max:5024'];
        }

        if ($request->file('banner_client')) {
            $validasi['banner_client'] = ['image', 'file', 'mimes:jpeg,png,jpg', 'max:5024'];
        }

        $validateData = $request->validate($validasi);

        if ($request->file('foto_profil')) {
            $file = $request->file('foto_profil');
            $path = Storage::put('foto_profil', $file);
            Storage::setVisibility($path, 'public');
            $insert_user['foto_profil'] = Storage::url($path);
        }

        if ($request->file('banner_client')) {
            $file = $request->file('banner_client');
            $path = Storage::put('banner_client', $file);
            Storage::setVisibility($path, 'public');
            $insert_user['banner_client'] = Storage::url($path);
        }

        $insert_user['active'] = 1;
        $insert_user['level'] = 2;
        $insert_user['username'] = $request->username;
        $insert_user['name'] = $request->nama;
        $insert_user['password'] = Hash::make($request->password);

        if ($request->dapil_ri) {

            $insert_user['caleg_level'] = 1;
            $user_created = User::create($insert_user);

            $validateData['dapil_ri'] = $request->dapil_ri;
            $validateData['user_id'] = $user_created->id;

            CalegRi::create($validateData);
        }

        if ($request->dapil_prov) {

            $insert_user['caleg_level'] = 2;
            $user_created = User::create($insert_user);

            $validateData['dapil_prov'] = $request->dapil_prov;
            $validateData['user_id'] = $user_created->id;

            CalegProv::create($validateData);
        }

        if ($request->dapil_kabkota) {

            $insert_user['caleg_level'] = 3;
            $user_created = User::create($insert_user);

            $validateData['dapil_kabkota'] = $request->dapil_kabkota;
            $validateData['user_id'] = $user_created->id;

            CalegKabkota::create($validateData);
        }

        return redirect('/caleg')->with('pesan', 'data barhasil di tambah');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_caleg)
    {
        $user = User::where('id', $request->user_id)->first();

        $validasi = [
            'partai_id' => ['required'],
            'nama' => ['required'],
            'no_urut' => ['required'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => [],
            'tanggal_lahir' => [],
            'alamat' => [],
            'no_wa' => [],
            'keterangan' => [],
            'subdomain' => [],
        ];



        $validateData = $request->validate($validasi);

        if ($request->file('foto_profil')) {
            $file = $request->file('foto_profil');
            $path = Storage::put('foto_profil', $file);
            Storage::setVisibility($path, 'public');
            $user_update['foto_profil'] = Storage::url($path);
        }

        if ($request->file('banner_client')) {
            $file = $request->file('banner_client');
            $path = Storage::put('banner_client', $file);
            Storage::setVisibility($path, 'public');
            $user_update['banner_client'] = Storage::url($path);
        }

        if ($request->password) {
            $user_update['password'] = Hash::make($validateData['password']);
        }

        if ($request->username != $user->username) {
            $user_update['username'] = ['required', 'unique:users', 'min:6'];
        }

        if (!$request->active) {
            $user_update['active'] = false;
        } else {
            $user_update['active'] = true;
        }

        if ($request->caleg_level == 1) {
            CalegRi::where('id', $id_caleg)->update($validateData);
        }

        if ($request->caleg_level == 2) {
            CalegProv::where('id', $id_caleg)->update($validateData);
        }

        if ($request->caleg_level == 3) {
            CalegKabkota::where('id', $id_caleg)->update($validateData);
        }

        User::where('id', $user->id)->update($user_update);

        return redirect("/caleg")->with('pesan', 'data barhasil di update! silakan cek kembali');
    }
}
