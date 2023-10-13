<?php

namespace App\Http\Controllers;

use App\Models\CalegRi;
use App\Models\CalegProv;
use App\Models\CalegKabkota;
use Illuminate\Http\Request;
use App\Models\DapilProvWilayah;
use Illuminate\Routing\Controller;
use App\Models\DapilKabkotaWilayah;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // dd('test');
        return view(
            'auth.login'
        );
    }

    public function auth(Request $request)
    {
        // dd($request->post());
        $cridentials = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required']
            ]
        );

        $cridentials['active'] = 1;

        if (Auth::attempt($cridentials)) {
            $request->session()->regenerate();

            // Caleg
            if (auth()->user()->level == 2) {
                $level_caleg = auth()->user()->caleg_level;

                if ($level_caleg == 1) {
                    $caleg = CalegRi::where('user_id', auth()->user()->id)->first();

                    $request->session()->put('prov_dapil', 71);
                    $request->session()->put('dapil_id', 1);
                }

                if ($level_caleg == 2) {
                    $caleg = CalegProv::where('user_id', auth()->user()->id)->first();

                    $dapil = DapilProvWilayah::where('dapil_prov_id', $caleg->dapil_prov)->get();
                    $kabkota_dapil = [];
                    foreach ($dapil as $item) {
                        array_push($kabkota_dapil, $item->kabkota);
                    }

                    $request->session()->put('dapil_id', $caleg->dapil_prov);
                    $request->session()->put('prov_dapil', 71);
                    $request->session()->put('kabkota_dapil', $kabkota_dapil);
                }

                if ($level_caleg == 3) {
                    $caleg = CalegKabkota::where('user_id', auth()->user()->id)->first();

                    $dapil = DapilKabkotaWilayah::where('dapil_kabkota_id', $caleg->dapil_kabkota)->get();
                    $kabkota_dapil = DapilKabkotaWilayah::where('dapil_kabkota_id', $caleg->dapil_kabkota)->first()->kabkota;
                    $dapil_kecamatan = [];
                    foreach ($dapil as $item) {
                        array_push($dapil_kecamatan, $item->kecamatan);
                    }

                    $request->session()->put('dapil_id', $caleg->dapil_kabkota);
                    $request->session()->put('prov_dapil', 71);
                    $request->session()->put('kabkota_dapil', [$kabkota_dapil]);
                    $request->session()->put('kecamatan_dapil', $dapil_kecamatan);
                }

                $request->session()->put('level_caleg', $level_caleg);
                $request->session()->put('caleg_id', $caleg->id);
            }

            $id = auth()->user()->id;
            $username = auth()->user()->username;
            $name = auth()->user()->name;
            $foto = auth()->user()->foto;

            $request->session()->put('user_id', $id);
            $request->session()->put('username', $username);
            $request->session()->put('name', $name);
            $request->session()->put('foto', $foto);

            // dd(Auth::user());

            return redirect()->intended('/welcome');
        }

        return back()->with('pesan', 'Username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/login')->with('pesan', 'anda berhasil logout');
    }
}
