<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Partai;
use App\Models\CalegRi;
use App\Models\DapilRi;
use App\Models\RefAgama;
use App\Models\DapilProv;
use Illuminate\Support\Str;
use App\Models\RefPekerjaan;
use App\Models\RefPendidikan;
use App\Models\DapilRiWilayah;
use Illuminate\Database\Seeder;
use App\Models\DapilProvWilayah;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        //user login utama
        User::create([
            'name' => 'unknow',
            'username' => 'balihobaru',
            'password' =>  bcrypt('12345678'),
            'level' => 100,
            'prov' => 71,
            'active' => 1,
            'foto' => 'defaul_user.jpg',
        ]);

        User::create([
            'name' => 'Super Admin DPW Sulut',
            'username' => 'superadmindpw',
            'password' =>  bcrypt('12345678'),
            'level' => 10,
            'prov' => 71,
            'active' => 1,
            'foto' => 'defaul_user.jpg',
        ]);

        User::create([
            'name' => 'Admin DPW Sulut',
            'username' => 'admindpw',
            'password' =>  bcrypt('12345678'),
            'level' => 1,
            'prov' => 71,
            'active' => 1,
            'foto' => 'defaul_user.jpg',
        ]);


        Partai::create([
            'nama' => 'Partai Kebangkitan Bangsa',
            'nama_singkat' => 'PKB',
            'logo' => 'PKB.png'
        ]);

        Partai::create([
            'nama' => 'Partai Gerakan Indonesia Raya',
            'nama_singkat' => 'Gerindra',
            'logo' => 'Gerindra.png'
        ]);

        Partai::create([
            'nama' => 'Partai Demokras Indonesia Perjuangan',
            'nama_singkat' => 'PDIP',
            'logo' => 'PDIP.png'
        ]);

        Partai::create([
            'nama' => 'Partai Golongan Karya',
            'nama_singkat' => 'Golkar',
            'logo' => 'Golkar.png'
        ]);

        Partai::create([
            'nama' => 'Partai Nasdem',
            'nama_singkat' => 'Nasdem',
            'logo' => 'Nasdem.png'
        ]);

        Partai::create([
            'nama' => 'Partai Buruh',
            'nama_singkat' => 'Buruh',
            'logo' => 'Buruh.png'
        ]);

        Partai::create([
            'nama' => 'Partai Gelombang Rakyat Indoensia',
            'nama_singkat' => 'Gelora',
            'logo' => 'Gelora.png'
        ]);

        Partai::create([
            'nama' => 'Partai Keadilan Sejahtera',
            'nama_singkat' => 'PKS',
            'logo' => 'PKS.png'
        ]);

        Partai::create([
            'nama' => 'Partai Kebangkitan Nusantara',
            'nama_singkat' => 'PKN',
            'logo' => 'PKN.png'
        ]);

        Partai::create([
            'nama' => 'Partai Hati Nurani Rakyat',
            'nama_singkat' => 'Hanura',
            'logo' => 'Hanura.png'
        ]);

        Partai::create([
            'nama' => 'Partai Garuda Perubahan Indonesia',
            'nama_singkat' => 'Garuda',
            'logo' => 'Garuda.png'
        ]);

        Partai::create([
            'nama' => 'Partai Amanat Nasional',
            'nama_singkat' => 'PAN',
            'logo' => 'PAN.png'
        ]);

        Partai::create([
            'nama' => 'Partai Bulan Bintang',
            'nama_singkat' => 'PBB',
            'logo' => 'PBB.png'
        ]);

        Partai::create([
            'nama' => 'Partai Persatuan Pembangunan',
            'nama_singkat' => 'PPP',
            'logo' => 'PPP.png'
        ]);

        Partai::create([
            'nama' => 'Partai Demokrat',
            'nama_singkat' => 'Demokrat',
            'logo' => 'Demokrat.png'
        ]);

        Partai::create([
            'nama' => 'Partai Solidaritas Indonesia',
            'nama_singkat' => 'PSI',
            'logo' => 'PSI.png'
        ]);

        Partai::create([
            'nama' => 'Partai Perindo',
            'nama_singkat' => 'Perindo',
            'logo' => 'Perindo.png'
        ]);

        Partai::create([
            'nama' => 'Partai Demo/Latihan',
            'nama_singkat' => 'demo',
            'logo' => 'demo.png'
        ]);

        // ref agama
        RefAgama::create([
            'nama' => 'Islam'
        ]);
        RefAgama::create([
            'nama' => 'Kristen Protestan'
        ]);
        RefAgama::create([
            'nama' => 'Katolik'
        ]);
        RefAgama::create([
            'nama' => 'Hindu'
        ]);
        RefAgama::create([
            'nama' => 'Buddha'
        ]);
        RefAgama::create([
            'nama' => 'Khonghucu'
        ]);
        RefAgama::create([
            'nama' => 'Lainya'
        ]);

        // ref pendidikan  
        RefPendidikan::create([
            'nama' => 'SD'
        ]);
        RefPendidikan::create([
            'nama' => 'SMP'
        ]);
        RefPendidikan::create([
            'nama' => 'SMA/SMK/Sederajat'
        ]);
        RefPendidikan::create([
            'nama' => 'D1'
        ]);
        RefPendidikan::create([
            'nama' => 'D2'
        ]);
        RefPendidikan::create([
            'nama' => 'D3'
        ]);
        RefPendidikan::create([
            'nama' => 'S1/D4'
        ]);
        RefPendidikan::create([
            'nama' => 'S2'
        ]);
        RefPendidikan::create([
            'nama' => 'S3'
        ]);


        // Ref pekerjaan
        RefPekerjaan::create([
            'nama' => 'Belum/ Tidak Bekerja'
        ]);
        RefPekerjaan::create([
            'nama' => 'Mengurus Rumah Tangga'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pelajar/ Mahasiswa'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pensiunan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pewagai Negeri Sipil'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tentara Nasional Indonesia'
        ]);
        RefPekerjaan::create([
            'nama' => 'Kepolisisan RI'
        ]);
        RefPekerjaan::create([
            'nama' => 'Perdagangan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Petani/ Pekebun'
        ]);
        RefPekerjaan::create([
            'nama' => 'Peternak'
        ]);
        RefPekerjaan::create([
            'nama' => 'Nelayan/ Perikanan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Industri'
        ]);
        RefPekerjaan::create([
            'nama' => 'Konstruksi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Transportasi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Karyawan Swasta'
        ]);
        RefPekerjaan::create([
            'nama' => 'Karyawan BUMN'
        ]);
        RefPekerjaan::create([
            'nama' => 'Karyawan BUMD'
        ]);
        RefPekerjaan::create([
            'nama' => 'Karyawan Honorer'
        ]);
        RefPekerjaan::create([
            'nama' => 'Buruh Harian Lepas'
        ]);
        RefPekerjaan::create([
            'nama' => 'Buruh Tani/ Perkebunan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Buruh Nelayan/ Perikanan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Buruh Peternakan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pembantu Rumah Tangga'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Cukur'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Listrik'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Batu'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Kayu'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Sol Sepatu'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Las/ Pandai Besi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Jahit'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tukang Gigi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Penata Rias'
        ]);
        RefPekerjaan::create([
            'nama' => 'Penata Busana'
        ]);
        RefPekerjaan::create([
            'nama' => 'Penata Rambut'
        ]);
        RefPekerjaan::create([
            'nama' => 'Mekanik'
        ]);
        RefPekerjaan::create([
            'nama' => 'Seniman'
        ]);
        RefPekerjaan::create([
            'nama' => 'Tabib'
        ]);
        RefPekerjaan::create([
            'nama' => 'Paraji'
        ]);
        RefPekerjaan::create([
            'nama' => 'Perancang Busana'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pendeta'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pastor'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wartawan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Ustadz/ Mubaligh'
        ]);
        RefPekerjaan::create([
            'nama' => 'Juru Masak'
        ]);
        RefPekerjaan::create([
            'nama' => 'Promotor Acara'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota DPR-RI'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota DPD'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota BPK'
        ]);
        RefPekerjaan::create([
            'nama' => 'Presiden'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wakil Presiden'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota Mahkamah Konstitusi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota Kabinet/ Kementerian'
        ]);
        RefPekerjaan::create([
            'nama' => 'Duta Besar'
        ]);
        RefPekerjaan::create([
            'nama' => 'Gubernur'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wakil Gubernur'
        ]);
        RefPekerjaan::create([
            'nama' => 'Bupati'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wakil Bupati'
        ]);
        RefPekerjaan::create([
            'nama' => 'Walikota'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wakil Walikota'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota DPRD Provinsi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Anggota DPRD Kabupaten/ Kota'
        ]);
        RefPekerjaan::create([
            'nama' => 'Dosen'
        ]);
        RefPekerjaan::create([
            'nama' => 'Guru'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pilot'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pengacara'
        ]);
        RefPekerjaan::create([
            'nama' => 'Notaris'
        ]);
        RefPekerjaan::create([
            'nama' => 'Arsitek'
        ]);
        RefPekerjaan::create([
            'nama' => 'Akuntan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Konsultan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Dokter'
        ]);
        RefPekerjaan::create([
            'nama' => 'Bidan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Perawat'
        ]);
        RefPekerjaan::create([
            'nama' => 'Apoteker'
        ]);
        RefPekerjaan::create([
            'nama' => 'Psikiater/ Psikolog'
        ]);
        RefPekerjaan::create([
            'nama' => 'Penyiar Televisi'
        ]);
        RefPekerjaan::create([
            'nama' => 'Penyiar Radio'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pelaut'
        ]);
        RefPekerjaan::create([
            'nama' => 'Peneliti'
        ]);
        RefPekerjaan::create([
            'nama' => 'Sopir'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pialang'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wartawan'
        ]);
        RefPekerjaan::create([
            'nama' => 'Paranormal'
        ]);
        RefPekerjaan::create([
            'nama' => 'Pedagang'
        ]);
        RefPekerjaan::create([
            'nama' => 'Perangkat Desa'
        ]);
        RefPekerjaan::create([
            'nama' => 'Kepala Desa'
        ]);
        RefPekerjaan::create([
            'nama' => 'Biarawati'
        ]);
        RefPekerjaan::create([
            'nama' => 'Wiraswasta'
        ]);
        RefPekerjaan::create([
            'nama' => 'Konsultan IT'
        ]);
        RefPekerjaan::create([
            'nama' => 'Driver Online'
        ]);

        // dapil ri
        DapilRi::create([
            'id' => 1,
            'nama' => 'Dapil 6',
            'keterangan' => 'Sulawesi Utara',
        ]);

        DapilRiWilayah::create([
            'id' => 1,
            'dapil_prov_id' => 1,
            'prov' => 71,
        ]);

        //caleg
        CalegRi::create([
            'nama' => Str::upper(
                'Ir. Hj. Tatong Bara'
            ),
            'no_urut' => 1,
            'dapil_ri' => 1,
        ]);

        CalegRi::create([
            'nama' => Str::upper(
                'G. S. Vicky Lumentut, S.H, M.Si'
            ),
            'no_urut' => 2,
            'dapil_ri' => 1,
        ]);

        CalegRi::create([
            'nama' => Str::upper(
                'Maximiliaan Jonas Lomban, M.Si'
            ),
            'no_urut' => 3,
            'dapil_ri' => 1,
        ]);

        CalegRi::create([
            'nama' => Str::upper(
                'Hamim Pou'
            ),
            'no_urut' => 4,
            'dapil_ri' => 1,
        ]);

        CalegRi::create([
            'nama' => Str::upper(
                Str::upper(
                    'Felly Estelita Runtuwene, SE'
                )
            ),
            'no_urut' => 5,
            'dapil_ri' => 1,
        ]);

        CalegRi::create([
            'nama' => Str::upper(
                'Andres Makarame Andaria'
            ),
            'no_urut' => 6,
            'dapil_ri' => 1,
        ]);

        //  dapil provinsi
        DapilProv::create([
            'id' => 1,
            'nama' => 'Dapil 1',
            'keterangan' => 'Manado',
        ]);

        DapilProv::create([
            'id' => 2,
            'nama' => 'Dapil 2',
            'keterangan' => 'Minahasa Utara -  Bitung',
        ]);

        DapilProv::create([
            'id' => 3,
            'nama' => 'Dapil 3',
            'keterangan' => 'Nusa Utara : Kepulauan Sangihe - Talaud - Sitaro',
        ]);

        DapilProv::create([
            'id' => 4,
            'nama' => 'Dapil 4',
            'keterangan' => 'Bolmong Raya : BOLMONG - BOLMUT - BOLTIM - BOLSEL - KOTAMOBAGU',
        ]);

        DapilProv::create([
            'id' => 5,
            'nama' => 'Dapil 5',
            'keterangan' => 'Minahasa Tenggara - Minahasa Selatan',
        ]);

        DapilProv::create([
            'id' => 6,
            'nama' => 'Dapil 6',
            'keterangan' => 'Minahasa - Tomohon',
        ]);

        DapilProvWilayah::create([
            'id' => 1,
            'dapil_prov_id' => 1,
            'prov' => 71,
            'kabkota' => 7171,
        ]);

        DapilProvWilayah::create([
            'id' => 2,
            'dapil_prov_id' => 2,
            'prov' => 71,
            'kabkota' => 7106,
        ]);

        DapilProvWilayah::create([
            'id' => 3,
            'dapil_prov_id' => 2,
            'prov' => 71,
            'kabkota' => 7172,
        ]);

        DapilProvWilayah::create([
            'id' => 4,
            'dapil_prov_id' => 3,
            'prov' => 71,
            'kabkota' => 7103,
        ]);

        DapilProvWilayah::create([
            'id' => 5,
            'dapil_prov_id' => 3,
            'prov' => 71,
            'kabkota' => 7104,
        ]);

        DapilProvWilayah::create([
            'id' => 6,
            'dapil_prov_id' => 3,
            'prov' => 71,
            'kabkota' => 7109,
        ]);

        DapilProvWilayah::create([
            'id' => 7,
            'dapil_prov_id' => 4,
            'prov' => 71,
            'kabkota' => 7101,
        ]);

        DapilProvWilayah::create([
            'id' => 8,
            'dapil_prov_id' => 4,
            'prov' => 71,
            'kabkota' => 7108,
        ]);

        DapilProvWilayah::create([
            'id' => 9,
            'dapil_prov_id' => 4,
            'prov' => 71,
            'kabkota' => 7110,
        ]);

        DapilProvWilayah::create([
            'id' => 10,
            'dapil_prov_id' => 4,
            'prov' => 71,
            'kabkota' => 7111,
        ]);

        DapilProvWilayah::create([
            'id' => 11,
            'dapil_prov_id' => 4,
            'prov' => 71,
            'kabkota' => 7174,
        ]);

        DapilProvWilayah::create([
            'id' => 12,
            'dapil_prov_id' => 5,
            'prov' => 71,
            'kabkota' => 7107,
        ]);

        DapilProvWilayah::create([
            'id' => 13,
            'dapil_prov_id' => 5,
            'prov' => 71,
            'kabkota' => 7105,
        ]);

        DapilProvWilayah::create([
            'id' => 14,
            'dapil_prov_id' => 6,
            'prov' => 71,
            'kabkota' => 7102,
        ]);

        DapilProvWilayah::create([
            'id' => 15,
            'dapil_prov_id' => 6,
            'prov' => 71,
            'kabkota' => 7173,
        ]);

        // wilayah
        DB::statement(
            "INSERT INTO provinsi (id, parent_id,nama,level_wilayah,level_label,kode_prov,kode_kab,kode_kec,kode_kel,zona_waktu,created_at,updated_at,flag_hide,kode_wilayah) VALUES  
                    (71,0,'SULAWESI UTARA','1','provinsi','71','7100','710000','7100000000','WITA',NULL,NULL,0,'71');
                    "
        );

        // kabkota
        DB::statement(
            "INSERT INTO kabkota (id, parent_id,nama,level_wilayah,level_label,kode_prov,kode_kab,kode_kec,kode_kel,zona_waktu,created_at,updated_at,flag_hide,kode_wilayah) VALUES  
                    (7101,71,'BOLAANG MONGONDOW','2','kabupaten','71','7101','710100','7101000000','WITA',NULL,NULL,0,'71.01'),
                    (7102,71,'MINAHASA','2','kabupaten','71','7102','710200','7102000000','WITA',NULL,NULL,0,'71.02'),
                    (7103,71,'KEPULAUAN SANGIHE','2','kabupaten','71','7103','710300','7103000000','WITA',NULL,NULL,0,'71.03'),
                    (7104,71,'KEPULAUAN TALAUD','2','kabupaten','71','7104','710400','7104000000','WITA',NULL,NULL,0,'71.04'),
                    (7105,71,'MINAHASA SELATAN','2','kabupaten','71','7105','710500','7105000000','WITA',NULL,NULL,0,'71.05'),
                    (7106,71,'MINAHASA UTARA','2','kabupaten','71','7106','710600','7106000000','WITA',NULL,NULL,0,'71.06'),
                    (7107,71,'MINAHASA TENGGARA','2','kabupaten','71','7107','710700','7107000000','WITA',NULL,NULL,0,'71.07'),
                    (7108,71,'BOLAANG MONGONDOW UTARA','2','kabupaten','71','7108','710800','7108000000','WITA',NULL,NULL,0,'71.08'),
                    (7109,71,'KEP. SIAU TAGULANDANG BIARO','2','kabupaten','71','7109','710900','7109000000','WITA',NULL,NULL,0,'71.09'),
                    (7110,71,'BOLAANG MONGONDOW TIMUR','2','kabupaten','71','7110','711000','7110000000','WITA',NULL,NULL,0,'71.10'),
                    (7111,71,'BOLAANG MONGONDOW SELATAN','2','kabupaten','71','7111','711100','7111000000','WITA',NULL,NULL,0,'71.11'),
                    (7171,71,'KOTA MANADO','2','kabupaten','71','7171','717100','7171000000','WITA',NULL,NULL,0,'71.71'),
                    (7172,71,'KOTA BITUNG','2','kabupaten','71','7172','717200','7172000000','WITA',NULL,NULL,0,'71.72'),
                    (7173,71,'KOTA TOMOHON','2','kabupaten','71','7173','717300','7173000000','WITA',NULL,NULL,0,'71.73'),
                    (7174,71,'KOTA KOTAMOBAGU','2','kabupaten','71','7174','717400','7174000000','WITA',NULL,NULL,0,'71.74');
                    "
        );

        // kecamatan
        DB::statement(
            "INSERT INTO kecamatan (id, parent_id,nama,level_wilayah,level_label,kode_prov,kode_kab,kode_kec,kode_kel,zona_waktu,created_at,updated_at,flag_hide,kode_wilayah) VALUES  
                    (710105,7101,'SANG TOMBOLANG','3','kecamatan','71','7101','710105','7101050000','WITA',NULL,NULL,0,'71.01.05'),
                    (710109,7101,'DUMOGA BARAT','3','kecamatan','71','7101','710109','7101090000','WITA',NULL,NULL,0,'71.01.09'),
                    (710110,7101,'DUMOGA TIMUR','3','kecamatan','71','7101','710110','7101100000','WITA',NULL,NULL,0,'71.01.10'),
                    (710111,7101,'DUMOGA UTARA','3','kecamatan','71','7101','710111','7101110000','WITA',NULL,NULL,0,'71.01.11'),
                    (710112,7101,'LOLAK','3','kecamatan','71','7101','710112','7101120000','WITA',NULL,NULL,0,'71.01.12'),
                    (710113,7101,'BOLAANG','3','kecamatan','71','7101','710113','7101130000','WITA',NULL,NULL,0,'71.01.13'),
                    (710114,7101,'LOLAYAN','3','kecamatan','71','7101','710114','7101140000','WITA',NULL,NULL,0,'71.01.14'),
                    (710119,7101,'PASSI BARAT','3','kecamatan','71','7101','710119','7101190000','WITA',NULL,NULL,0,'71.01.19'),
                    (710120,7101,'POIGAR','3','kecamatan','71','7101','710120','7101200000','WITA',NULL,NULL,0,'71.01.20'),
                    (710122,7101,'PASSI TIMUR','3','kecamatan','71','7101','710122','7101220000','WITA',NULL,NULL,0,'71.01.22'),
                    (710131,7101,'BOLAANG TIMUR','3','kecamatan','71','7101','710131','7101310000','WITA',NULL,NULL,0,'71.01.31'),
                    (710132,7101,'BILALANG','3','kecamatan','71','7101','710132','7101320000','WITA',NULL,NULL,0,'71.01.32'),
                    (710133,7101,'DUMOGA','3','kecamatan','71','7101','710133','7101330000','WITA',NULL,NULL,0,'71.01.33'),
                    (710134,7101,'DUMOGA TENGGARA','3','kecamatan','71','7101','710134','7101340000','WITA',NULL,NULL,0,'71.01.34'),
                    (710135,7101,'DUMOGA TENGAH','3','kecamatan','71','7101','710135','7101350000','WITA',NULL,NULL,0,'71.01.35'),
                    (710201,7102,'TONDANO BARAT','3','kecamatan','71','7102','710201','7102010000','WITA',NULL,NULL,0,'71.02.01'),
                    (710202,7102,'TONDANO TIMUR','3','kecamatan','71','7102','710202','7102020000','WITA',NULL,NULL,0,'71.02.02'),
                    (710203,7102,'ERIS','3','kecamatan','71','7102','710203','7102030000','WITA',NULL,NULL,0,'71.02.03'),
                    (710204,7102,'KOMBI','3','kecamatan','71','7102','710204','7102040000','WITA',NULL,NULL,0,'71.02.04'),
                    (710205,7102,'LEMBEAN TIMUR','3','kecamatan','71','7102','710205','7102050000','WITA',NULL,NULL,0,'71.02.05'),
                    (710206,7102,'KAKAS','3','kecamatan','71','7102','710206','7102060000','WITA',NULL,NULL,0,'71.02.06'),
                    (710207,7102,'TOMPASO','3','kecamatan','71','7102','710207','7102070000','WITA',NULL,NULL,0,'71.02.07'),
                    (710208,7102,'REMBOKEN','3','kecamatan','71','7102','710208','7102080000','WITA',NULL,NULL,0,'71.02.08'),
                    (710209,7102,'LANGOWAN TIMUR','3','kecamatan','71','7102','710209','7102090000','WITA',NULL,NULL,0,'71.02.09'),
                    (710210,7102,'LANGOWAN BARAT','3','kecamatan','71','7102','710210','7102100000','WITA',NULL,NULL,0,'71.02.10'),
                    (710211,7102,'SONDER','3','kecamatan','71','7102','710211','7102110000','WITA',NULL,NULL,0,'71.02.11'),
                    (710212,7102,'KAWANGKOAN','3','kecamatan','71','7102','710212','7102120000','WITA',NULL,NULL,0,'71.02.12'),
                    (710213,7102,'PINELENG','3','kecamatan','71','7102','710213','7102130000','WITA',NULL,NULL,0,'71.02.13'),
                    (710214,7102,'TOMBULU','3','kecamatan','71','7102','710214','7102140000','WITA',NULL,NULL,0,'71.02.14'),
                    (710215,7102,'TOMBARIRI','3','kecamatan','71','7102','710215','7102150000','WITA',NULL,NULL,0,'71.02.15'),
                    (710216,7102,'TONDANO UTARA','3','kecamatan','71','7102','710216','7102160000','WITA',NULL,NULL,0,'71.02.16'),
                    (710217,7102,'LANGOWAN SELATAN','3','kecamatan','71','7102','710217','7102170000','WITA',NULL,NULL,0,'71.02.17'),
                    (710218,7102,'TONDANO SELATAN','3','kecamatan','71','7102','710218','7102180000','WITA',NULL,NULL,0,'71.02.18'),
                    (710219,7102,'LANGOWAN UTARA','3','kecamatan','71','7102','710219','7102190000','WITA',NULL,NULL,0,'71.02.19'),
                    (710220,7102,'KAKAS BARAT','3','kecamatan','71','7102','710220','7102200000','WITA',NULL,NULL,0,'71.02.20'),
                    (710221,7102,'KAWANGKOAN UTARA','3','kecamatan','71','7102','710221','7102210000','WITA',NULL,NULL,0,'71.02.21'),
                    (710222,7102,'KAWANGKOAN BARAT','3','kecamatan','71','7102','710222','7102220000','WITA',NULL,NULL,0,'71.02.22'),
                    (710223,7102,'MANDOLANG','3','kecamatan','71','7102','710223','7102230000','WITA',NULL,NULL,0,'71.02.23'),
                    (710224,7102,'TOMBARIRI TIMUR','3','kecamatan','71','7102','710224','7102240000','WITA',NULL,NULL,0,'71.02.24'),
                    (710225,7102,'TOMPASO BARAT','3','kecamatan','71','7102','710225','7102250000','WITA',NULL,NULL,0,'71.02.25'),
                    (710308,7103,'TABUKAN UTARA','3','kecamatan','71','7103','710308','7103080000','WITA',NULL,NULL,0,'71.03.08'),
                    (710309,7103,'NUSA TABUKAN','3','kecamatan','71','7103','710309','7103090000','WITA',NULL,NULL,0,'71.03.09'),
                    (710310,7103,'MANGANITU SELATAN','3','kecamatan','71','7103','710310','7103100000','WITA',NULL,NULL,0,'71.03.10'),
                    (710311,7103,'TATOARENG','3','kecamatan','71','7103','710311','7103110000','WITA',NULL,NULL,0,'71.03.11'),
                    (710312,7103,'TAMAKO','3','kecamatan','71','7103','710312','7103120000','WITA',NULL,NULL,0,'71.03.12'),
                    (710313,7103,'MANGANITU','3','kecamatan','71','7103','710313','7103130000','WITA',NULL,NULL,0,'71.03.13'),
                    (710314,7103,'TABUKAN TENGAH','3','kecamatan','71','7103','710314','7103140000','WITA',NULL,NULL,0,'71.03.14'),
                    (710315,7103,'TABUKAN SELATAN','3','kecamatan','71','7103','710315','7103150000','WITA',NULL,NULL,0,'71.03.15'),
                    (710316,7103,'KENDAHE','3','kecamatan','71','7103','710316','7103160000','WITA',NULL,NULL,0,'71.03.16'),
                    (710317,7103,'TAHUNA','3','kecamatan','71','7103','710317','7103170000','WITA',NULL,NULL,0,'71.03.17'),
                    (710319,7103,'TABUKAN SELATAN TENGAH','3','kecamatan','71','7103','710319','7103190000','WITA',NULL,NULL,0,'71.03.19'),
                    (710320,7103,'TABUKAN SELATAN TENGGARA','3','kecamatan','71','7103','710320','7103200000','WITA',NULL,NULL,0,'71.03.20'),
                    (710323,7103,'TAHUNA BARAT','3','kecamatan','71','7103','710323','7103230000','WITA',NULL,NULL,0,'71.03.23'),
                    (710324,7103,'TAHUNA TIMUR','3','kecamatan','71','7103','710324','7103240000','WITA',NULL,NULL,0,'71.03.24'),
                    (710325,7103,'KEPULAUAN MARORE','3','kecamatan','71','7103','710325','7103250000','WITA',NULL,NULL,0,'71.03.25'),
                    (710401,7104,'LIRUNG','3','kecamatan','71','7104','710401','7104010000','WITA',NULL,NULL,0,'71.04.01'),
                    (710402,7104,'BEO','3','kecamatan','71','7104','710402','7104020000','WITA',NULL,NULL,0,'71.04.02'),
                    (710403,7104,'RAINIS','3','kecamatan','71','7104','710403','7104030000','WITA',NULL,NULL,0,'71.04.03'),
                    (710404,7104,'ESSANG','3','kecamatan','71','7104','710404','7104040000','WITA',NULL,NULL,0,'71.04.04'),
                    (710405,7104,'NANUSA','3','kecamatan','71','7104','710405','7104050000','WITA',NULL,NULL,0,'71.04.05'),
                    (710406,7104,'KABARUAN','3','kecamatan','71','7104','710406','7104060000','WITA',NULL,NULL,0,'71.04.06'),
                    (710407,7104,'MELONGUANE','3','kecamatan','71','7104','710407','7104070000','WITA',NULL,NULL,0,'71.04.07'),
                    (710408,7104,'GEMEH','3','kecamatan','71','7104','710408','7104080000','WITA',NULL,NULL,0,'71.04.08'),
                    (710409,7104,'DAMAU','3','kecamatan','71','7104','710409','7104090000','WITA',NULL,NULL,0,'71.04.09'),
                    (710410,7104,'TAMPAN'' AMMA','3','kecamatan','71','7104','710410','7104100000','WITA',NULL,NULL,0,'71.04.10'),
                    (710411,7104,'SALIBABU','3','kecamatan','71','7104','710411','7104110000','WITA',NULL,NULL,0,'71.04.11'),
                    (710412,7104,'KALONGAN','3','kecamatan','71','7104','710412','7104120000','WITA',NULL,NULL,0,'71.04.12'),
                    (710413,7104,'MIANGAS','3','kecamatan','71','7104','710413','7104130000','WITA',NULL,NULL,0,'71.04.13'),
                    (710414,7104,'BEO UTARA','3','kecamatan','71','7104','710414','7104140000','WITA',NULL,NULL,0,'71.04.14'),
                    (710415,7104,'PULUTAN','3','kecamatan','71','7104','710415','7104150000','WITA',NULL,NULL,0,'71.04.15'),
                    (710416,7104,'MELONGUANE TIMUR','3','kecamatan','71','7104','710416','7104160000','WITA',NULL,NULL,0,'71.04.16'),
                    (710417,7104,'MORONGE','3','kecamatan','71','7104','710417','7104170000','WITA',NULL,NULL,0,'71.04.17'),
                    (710418,7104,'BEO SELATAN','3','kecamatan','71','7104','710418','7104180000','WITA',NULL,NULL,0,'71.04.18'),
                    (710419,7104,'ESSANG SELATAN','3','kecamatan','71','7104','710419','7104190000','WITA',NULL,NULL,0,'71.04.19'),
                    (710501,7105,'MODOINDING','3','kecamatan','71','7105','710501','7105010000','WITA',NULL,NULL,0,'71.05.01'),
                    (710502,7105,'TOMPASO BARU','3','kecamatan','71','7105','710502','7105020000','WITA',NULL,NULL,0,'71.05.02'),
                    (710503,7105,'RANOYAPO','3','kecamatan','71','7105','710503','7105030000','WITA',NULL,NULL,0,'71.05.03'),
                    (710507,7105,'MOTOLING','3','kecamatan','71','7105','710507','7105070000','WITA',NULL,NULL,0,'71.05.07'),
                    (710508,7105,'SINONSAYANG','3','kecamatan','71','7105','710508','7105080000','WITA',NULL,NULL,0,'71.05.08'),
                    (710509,7105,'TENGA','3','kecamatan','71','7105','710509','7105090000','WITA',NULL,NULL,0,'71.05.09'),
                    (710510,7105,'AMURANG','3','kecamatan','71','7105','710510','7105100000','WITA',NULL,NULL,0,'71.05.10'),
                    (710512,7105,'TUMPAAN','3','kecamatan','71','7105','710512','7105120000','WITA',NULL,NULL,0,'71.05.12'),
                    (710513,7105,'TARERAN','3','kecamatan','71','7105','710513','7105130000','WITA',NULL,NULL,0,'71.05.13'),
                    (710515,7105,'KUMELEMBUAI','3','kecamatan','71','7105','710515','7105150000','WITA',NULL,NULL,0,'71.05.15'),
                    (710516,7105,'MAESAAN','3','kecamatan','71','7105','710516','7105160000','WITA',NULL,NULL,0,'71.05.16'),
                    (710517,7105,'AMURANG BARAT','3','kecamatan','71','7105','710517','7105170000','WITA',NULL,NULL,0,'71.05.17'),
                    (710518,7105,'AMURANG TIMUR','3','kecamatan','71','7105','710518','7105180000','WITA',NULL,NULL,0,'71.05.18'),
                    (710519,7105,'TATAPAAN','3','kecamatan','71','7105','710519','7105190000','WITA',NULL,NULL,0,'71.05.19'),
                    (710521,7105,'MOTOLING BARAT','3','kecamatan','71','7105','710521','7105210000','WITA',NULL,NULL,0,'71.05.21'),
                    (710522,7105,'MOTOLING TIMUR','3','kecamatan','71','7105','710522','7105220000','WITA',NULL,NULL,0,'71.05.22'),
                    (710523,7105,'SULUUN TARERAN','3','kecamatan','71','7105','710523','7105230000','WITA',NULL,NULL,0,'71.05.23'),
                    (710601,7106,'KEMA','3','kecamatan','71','7106','710601','7106010000','WITA',NULL,NULL,0,'71.06.01'),
                    (710602,7106,'KAUDITAN','3','kecamatan','71','7106','710602','7106020000','WITA',NULL,NULL,0,'71.06.02'),
                    (710603,7106,'AIRMADIDI','3','kecamatan','71','7106','710603','7106030000','WITA',NULL,NULL,0,'71.06.03'),
                    (710604,7106,'WORI','3','kecamatan','71','7106','710604','7106040000','WITA',NULL,NULL,0,'71.06.04'),
                    (710605,7106,'DIMEMBE','3','kecamatan','71','7106','710605','7106050000','WITA',NULL,NULL,0,'71.06.05'),
                    (710606,7106,'LIKUPANG BARAT','3','kecamatan','71','7106','710606','7106060000','WITA',NULL,NULL,0,'71.06.06'),
                    (710607,7106,'LIKUPANG TIMUR','3','kecamatan','71','7106','710607','7106070000','WITA',NULL,NULL,0,'71.06.07'),
                    (710608,7106,'KALAWAT','3','kecamatan','71','7106','710608','7106080000','WITA',NULL,NULL,0,'71.06.08'),
                    (710609,7106,'TALAWAAN','3','kecamatan','71','7106','710609','7106090000','WITA',NULL,NULL,0,'71.06.09'),
                    (710610,7106,'LIKUPANG SELATAN','3','kecamatan','71','7106','710610','7106100000','WITA',NULL,NULL,0,'71.06.10'),
                    (710701,7107,'RATAHAN','3','kecamatan','71','7107','710701','7107010000','WITA',NULL,NULL,0,'71.07.01'),
                    (710702,7107,'PUSOMAEN','3','kecamatan','71','7107','710702','7107020000','WITA',NULL,NULL,0,'71.07.02'),
                    (710703,7107,'BELANG','3','kecamatan','71','7107','710703','7107030000','WITA',NULL,NULL,0,'71.07.03'),
                    (710704,7107,'RATATOTOK','3','kecamatan','71','7107','710704','7107040000','WITA',NULL,NULL,0,'71.07.04'),
                    (710705,7107,'TOMBATU','3','kecamatan','71','7107','710705','7107050000','WITA',NULL,NULL,0,'71.07.05'),
                    (710706,7107,'TOULUAAN','3','kecamatan','71','7107','710706','7107060000','WITA',NULL,NULL,0,'71.07.06'),
                    (710707,7107,'TOULUAAN SELATAN','3','kecamatan','71','7107','710707','7107070000','WITA',NULL,NULL,0,'71.07.07'),
                    (710708,7107,'SILIAN RAYA','3','kecamatan','71','7107','710708','7107080000','WITA',NULL,NULL,0,'71.07.08'),
                    (710709,7107,'TOMBATU TIMUR','3','kecamatan','71','7107','710709','7107090000','WITA',NULL,NULL,0,'71.07.09'),
                    (710710,7107,'TOMBATU UTARA','3','kecamatan','71','7107','710710','7107100000','WITA',NULL,NULL,0,'71.07.10'),
                    (710711,7107,'PASAN','3','kecamatan','71','7107','710711','7107110000','WITA',NULL,NULL,0,'71.07.11'),
                    (710712,7107,'RATAHAN TIMUR','3','kecamatan','71','7107','710712','7107120000','WITA',NULL,NULL,0,'71.07.12'),
                    (710801,7108,'SANGKUB','3','kecamatan','71','7108','710801','7108010000','WITA',NULL,NULL,0,'71.08.01'),
                    (710802,7108,'BINTAUNA','3','kecamatan','71','7108','710802','7108020000','WITA',NULL,NULL,0,'71.08.02'),
                    (710803,7108,'BOLANGITANG TIMUR','3','kecamatan','71','7108','710803','7108030000','WITA',NULL,NULL,0,'71.08.03'),
                    (710804,7108,'BOLANGITANG BARAT','3','kecamatan','71','7108','710804','7108040000','WITA',NULL,NULL,0,'71.08.04'),
                    (710805,7108,'KAIDIPANG','3','kecamatan','71','7108','710805','7108050000','WITA',NULL,NULL,0,'71.08.05'),
                    (710806,7108,'PINOGALUMAN','3','kecamatan','71','7108','710806','7108060000','WITA',NULL,NULL,0,'71.08.06'),
                    (710901,7109,'SIAU TIMUR','3','kecamatan','71','7109','710901','7109010000','WITA',NULL,NULL,0,'71.09.01'),
                    (710902,7109,'SIAU BARAT','3','kecamatan','71','7109','710902','7109020000','WITA',NULL,NULL,0,'71.09.02'),
                    (710903,7109,'TAGULANDANG','3','kecamatan','71','7109','710903','7109030000','WITA',NULL,NULL,0,'71.09.03'),
                    (710904,7109,'SIAU TIMUR SELATAN','3','kecamatan','71','7109','710904','7109040000','WITA',NULL,NULL,0,'71.09.04'),
                    (710905,7109,'SIAU BARAT SELATAN','3','kecamatan','71','7109','710905','7109050000','WITA',NULL,NULL,0,'71.09.05'),
                    (710906,7109,'TAGULANDANG UTARA','3','kecamatan','71','7109','710906','7109060000','WITA',NULL,NULL,0,'71.09.06'),
                    (710907,7109,'BIARO','3','kecamatan','71','7109','710907','7109070000','WITA',NULL,NULL,0,'71.09.07'),
                    (710908,7109,'SIAU BARAT UTARA','3','kecamatan','71','7109','710908','7109080000','WITA',NULL,NULL,0,'71.09.08'),
                    (710909,7109,'SIAU TENGAH','3','kecamatan','71','7109','710909','7109090000','WITA',NULL,NULL,0,'71.09.09'),
                    (710910,7109,'TAGULANDANG SELATAN','3','kecamatan','71','7109','710910','7109100000','WITA',NULL,NULL,0,'71.09.10'),
                    (711001,7110,'TUTUYAN','3','kecamatan','71','7110','711001','7110010000','WITA',NULL,NULL,0,'71.10.01'),
                    (711002,7110,'KOTABUNAN','3','kecamatan','71','7110','711002','7110020000','WITA',NULL,NULL,0,'71.10.02'),
                    (711003,7110,'NUANGAN','3','kecamatan','71','7110','711003','7110030000','WITA',NULL,NULL,0,'71.10.03'),
                    (711004,7110,'MODAYAG','3','kecamatan','71','7110','711004','7110040000','WITA',NULL,NULL,0,'71.10.04'),
                    (711005,7110,'MODAYAG BARAT','3','kecamatan','71','7110','711005','7110050000','WITA',NULL,NULL,0,'71.10.05'),
                    (711006,7110,'MOTONGKAD','3','kecamatan','71','7110','711006','7110060000','WITA',NULL,NULL,0,'71.10.06'),
                    (711007,7110,'MOOAT','3','kecamatan','71','7110','711007','7110070000','WITA',NULL,NULL,0,'71.10.07'),
                    (711101,7111,'BOLAANG UKI','3','kecamatan','71','7111','711101','7111010000','WITA',NULL,NULL,0,'71.11.01'),
                    (711102,7111,'POSIGADAN','3','kecamatan','71','7111','711102','7111020000','WITA',NULL,NULL,0,'71.11.02'),
                    (711103,7111,'PINOLOSIAN','3','kecamatan','71','7111','711103','7111030000','WITA',NULL,NULL,0,'71.11.03'),
                    (711104,7111,'PINOLOSIAN TENGAH','3','kecamatan','71','7111','711104','7111040000','WITA',NULL,NULL,0,'71.11.04'),
                    (711105,7111,'PINOLOSIAN TIMUR','3','kecamatan','71','7111','711105','7111050000','WITA',NULL,NULL,0,'71.11.05'),
                    (711106,7111,'HELUMO','3','kecamatan','71','7111','711106','7111060000','WITA',NULL,NULL,0,'71.11.06'),
                    (711107,7111,'TOMINI','3','kecamatan','71','7111','711107','7111070000','WITA',NULL,NULL,0,'71.11.07'),
                    (717101,7171,'BUNAKEN','3','kecamatan','71','7171','717101','7171010000','WITA',NULL,NULL,0,'71.71.01'),
                    (717102,7171,'TUMINITING','3','kecamatan','71','7171','717102','7171020000','WITA',NULL,NULL,0,'71.71.02'),
                    (717103,7171,'SINGKIL','3','kecamatan','71','7171','717103','7171030000','WITA',NULL,NULL,0,'71.71.03'),
                    (717104,7171,'WENANG','3','kecamatan','71','7171','717104','7171040000','WITA',NULL,NULL,0,'71.71.04'),
                    (717105,7171,'TIKALA','3','kecamatan','71','7171','717105','7171050000','WITA',NULL,NULL,0,'71.71.05'),
                    (717106,7171,'SARIO','3','kecamatan','71','7171','717106','7171060000','WITA',NULL,NULL,0,'71.71.06'),
                    (717107,7171,'WANEA','3','kecamatan','71','7171','717107','7171070000','WITA',NULL,NULL,0,'71.71.07'),
                    (717108,7171,'MAPANGET','3','kecamatan','71','7171','717108','7171080000','WITA',NULL,NULL,0,'71.71.08'),
                    (717109,7171,'MALALAYANG','3','kecamatan','71','7171','717109','7171090000','WITA',NULL,NULL,0,'71.71.09'),
                    (717110,7171,'BUNAKEN KEPULAUAN','3','kecamatan','71','7171','717110','7171100000','WITA',NULL,NULL,0,'71.71.10'),
                    (717111,7171,'PAAL DUA','3','kecamatan','71','7171','717111','7171110000','WITA',NULL,NULL,0,'71.71.11'),
                    (717201,7172,'LEMBEH SELATAN','3','kecamatan','71','7172','717201','7172010000','WITA',NULL,NULL,0,'71.72.01'),
                    (717202,7172,'MADIDIR','3','kecamatan','71','7172','717202','7172020000','WITA',NULL,NULL,0,'71.72.02'),
                    (717203,7172,'RANOWULU','3','kecamatan','71','7172','717203','7172030000','WITA',NULL,NULL,0,'71.72.03'),
                    (717204,7172,'AERTEMBAGA','3','kecamatan','71','7172','717204','7172040000','WITA',NULL,NULL,0,'71.72.04'),
                    (717205,7172,'MATUARI','3','kecamatan','71','7172','717205','7172050000','WITA',NULL,NULL,0,'71.72.05'),
                    (717206,7172,'GIRIAN','3','kecamatan','71','7172','717206','7172060000','WITA',NULL,NULL,0,'71.72.06'),
                    (717207,7172,'MAESA','3','kecamatan','71','7172','717207','7172070000','WITA',NULL,NULL,0,'71.72.07'),
                    (717208,7172,'LEMBEH UTARA','3','kecamatan','71','7172','717208','7172080000','WITA',NULL,NULL,0,'71.72.08'),
                    (717301,7173,'TOMOHON SELATAN','3','kecamatan','71','7173','717301','7173010000','WITA',NULL,NULL,0,'71.73.01'),
                    (717302,7173,'TOMOHON TENGAH','3','kecamatan','71','7173','717302','7173020000','WITA',NULL,NULL,0,'71.73.02'),
                    (717303,7173,'TOMOHON UTARA','3','kecamatan','71','7173','717303','7173030000','WITA',NULL,NULL,0,'71.73.03'),
                    (717304,7173,'TOMOHON BARAT','3','kecamatan','71','7173','717304','7173040000','WITA',NULL,NULL,0,'71.73.04'),
                    (717305,7173,'TOMOHON TIMUR','3','kecamatan','71','7173','717305','7173050000','WITA',NULL,NULL,0,'71.73.05'),
                    (717401,7174,'KOTAMOBAGU UTARA','3','kecamatan','71','7174','717401','7174010000','WITA',NULL,NULL,0,'71.74.01'),
                    (717402,7174,'KOTAMOBAGU TIMUR','3','kecamatan','71','7174','717402','7174020000','WITA',NULL,NULL,0,'71.74.02'),
                    (717403,7174,'KOTAMOBAGU SELATAN','3','kecamatan','71','7174','717403','7174030000','WITA',NULL,NULL,0,'71.74.03'),
                    (717404,7174,'KOTAMOBAGU BARAT','3','kecamatan','71','7174','717404','7174040000','WITA',NULL,NULL,0,'71.74.04');
                    "
        );


        // wilayah
        DB::statement(
            "INSERT INTO wilayah (id, parent_id,nama,level_wilayah,level_label,kode_prov,kode_kab,kode_kec,kode_kel,zona_waktu,created_at,updated_at,flag_hide,kode_wilayah) VALUES  
                    (7101052001,710105,'AYONG','4','kelurahan','71','7101','710105','7101052001','WITA',NULL,NULL,0,'71.01.05.2001'),
                    (7101052002,710105,'BABO','4','kelurahan','71','7101','710105','7101052002','WITA',NULL,NULL,0,'71.01.05.2002'),
                    (7101052003,710105,'BOLANGAT','4','kelurahan','71','7101','710105','7101052003','WITA',NULL,NULL,0,'71.01.05.2003'),
                    (7101052004,710105,'MAELANG','4','kelurahan','71','7101','710105','7101052004','WITA',NULL,NULL,0,'71.01.05.2004'),
                    (7101052005,710105,'DOMISIL MOONOW','4','kelurahan','71','7101','710105','7101052005','WITA',NULL,NULL,0,'71.01.05.2005'),
                    (7101052006,710105,'PANGI','4','kelurahan','71','7101','710105','7101052006','WITA',NULL,NULL,0,'71.01.05.2006'),
                    (7101052012,710105,'LOLANAN','4','kelurahan','71','7101','710105','7101052012','WITA',NULL,NULL,0,'71.01.05.2012'),
                    (7101052015,710105,'CEMPAKA','4','kelurahan','71','7101','710105','7101052015','WITA',NULL,NULL,0,'71.01.05.2015'),
                    (7101052017,710105,'BATU MERAH','4','kelurahan','71','7101','710105','7101052017','WITA',NULL,NULL,0,'71.01.05.2017'),
                    (7101052018,710105,'PASIR PUTIH','4','kelurahan','71','7101','710105','7101052018','WITA',NULL,NULL,0,'71.01.05.2018'),
                    (7101052019,710105,'PANGI TIMUR','4','kelurahan','71','7101','710105','7101052019','WITA',NULL,NULL,0,'71.01.05.2019'),
                    (7101052020,710105,'BOLANGAT TIMUR','4','kelurahan','71','7101','710105','7101052020','WITA',NULL,NULL,0,'71.01.05.2020'),
                    (7101092001,710109,'MATAYANGAN','4','kelurahan','71','7101','710109','7101092001','WITA',NULL,NULL,0,'71.01.09.2001'),
                    (7101092002,710109,'UUAN','4','kelurahan','71','7101','710109','7101092002','WITA',NULL,NULL,0,'71.01.09.2002'),
                    (7101092003,710109,'IKHWAN','4','kelurahan','71','7101','710109','7101092003','WITA',NULL,NULL,0,'71.01.09.2003'),
                    (7101092004,710109,'DOLODUO','4','kelurahan','71','7101','710109','7101092004','WITA',NULL,NULL,0,'71.01.09.2004'),
                    (7101092005,710109,'WANGGA BARU','4','kelurahan','71','7101','710109','7101092005','WITA',NULL,NULL,0,'71.01.09.2005'),
                    (7101092010,710109,'TORAUT','4','kelurahan','71','7101','710109','7101092010','WITA',NULL,NULL,0,'71.01.09.2010'),
                    (7101092011,710109,'MEKARUO','4','kelurahan','71','7101','710109','7101092011','WITA',NULL,NULL,0,'71.01.09.2011'),
                    (7101092017,710109,'TORAUT UTARA','4','kelurahan','71','7101','710109','7101092017','WITA',NULL,NULL,0,'71.01.09.2017'),
                    (7101092018,710109,'DOLODUO SATU','4','kelurahan','71','7101','710109','7101092018','WITA',NULL,NULL,0,'71.01.09.2018'),
                    (7101092019,710109,'DOLODUO DUA','4','kelurahan','71','7101','710109','7101092019','WITA',NULL,NULL,0,'71.01.09.2019'),
                    (7101092020,710109,'DOLODUO TIGA','4','kelurahan','71','7101','710109','7101092020','WITA',NULL,NULL,0,'71.01.09.2020'),
                    (7101092022,710109,'TORAUT TENGAH','4','kelurahan','71','7101','710109','7101092022','WITA',NULL,NULL,0,'71.01.09.2022'),
                    (7101101003,710110,'IMANDI','4','kelurahan','71','7101','710110','7101101003','WITA',NULL,NULL,0,'71.01.10.1003'),
                    (7101102001,710110,'TONOM','4','kelurahan','71','7101','710110','7101102001','WITA',NULL,NULL,0,'71.01.10.2001'),
                    (7101102002,710110,'MOGOYUNGGUNG','4','kelurahan','71','7101','710110','7101102002','WITA',NULL,NULL,0,'71.01.10.2002'),
                    (7101102004,710110,'MODOMANG','4','kelurahan','71','7101','710110','7101102004','WITA',NULL,NULL,0,'71.01.10.2004'),
                    (7101102005,710110,'KEMBANG MERTHA','4','kelurahan','71','7101','710110','7101102005','WITA',NULL,NULL,0,'71.01.10.2005'),
                    (7101102006,710110,'DUMOGA','4','kelurahan','71','7101','710110','7101102006','WITA',NULL,NULL,0,'71.01.10.2006'),
                    (7101102013,710110,'PINONOBATUAN','4','kelurahan','71','7101','710110','7101102013','WITA',NULL,NULL,0,'71.01.10.2013'),
                    (7101102017,710110,'DUMOGA II','4','kelurahan','71','7101','710110','7101102017','WITA',NULL,NULL,0,'71.01.10.2017'),
                    (7101102018,710110,'PINONOBATUAN BARAT','4','kelurahan','71','7101','710110','7101102018','WITA',NULL,NULL,0,'71.01.10.2018'),
                    (7101102019,710110,'AMERTHA SARI','4','kelurahan','71','7101','710110','7101102019','WITA',NULL,NULL,0,'71.01.10.2019'),
                    (7101102020,710110,'KEMBANG SARI','4','kelurahan','71','7101','710110','7101102020','WITA',NULL,NULL,0,'71.01.10.2020'),
                    (7101102021,710110,'AMERTHA BUANA','4','kelurahan','71','7101','710110','7101102021','WITA',NULL,NULL,0,'71.01.10.2021'),
                    (7101102023,710110,'MOGOYUNGGUNG SATU','4','kelurahan','71','7101','710110','7101102023','WITA',NULL,NULL,0,'71.01.10.2023'),
                    (7101102024,710110,'MOGOYUNGGUNG DUA','4','kelurahan','71','7101','710110','7101102024','WITA',NULL,NULL,0,'71.01.10.2024'),
                    (7101102025,710110,'DUMOGA TIGA','4','kelurahan','71','7101','710110','7101102025','WITA',NULL,NULL,0,'71.01.10.2025'),
                    (7101102026,710110,'DUMOGA EMPAT','4','kelurahan','71','7101','710110','7101102026','WITA',NULL,NULL,0,'71.01.10.2026'),
                    (7101112001,710111,'TUMOKANG BARU','4','kelurahan','71','7101','710111','7101112001','WITA',NULL,NULL,0,'71.01.11.2001'),
                    (7101112002,710111,'MOPUGAD UTARA','4','kelurahan','71','7101','710111','7101112002','WITA',NULL,NULL,0,'71.01.11.2002'),
                    (7101112003,710111,'MOPUGAD SELATAN','4','kelurahan','71','7101','710111','7101112003','WITA',NULL,NULL,0,'71.01.11.2003'),
                    (7101112004,710111,'MOPUYA UTARA','4','kelurahan','71','7101','710111','7101112004','WITA',NULL,NULL,0,'71.01.11.2004'),
                    (7101112005,710111,'MOPUYA SELATAN','4','kelurahan','71','7101','710111','7101112005','WITA',NULL,NULL,0,'71.01.11.2005'),
                    (7101112007,710111,'DONDOMON','4','kelurahan','71','7101','710111','7101112007','WITA',NULL,NULL,0,'71.01.11.2007'),
                    (7101112014,710111,'MOPUGAD UTARA SATU','4','kelurahan','71','7101','710111','7101112014','WITA',NULL,NULL,0,'71.01.11.2014'),
                    (7101112015,710111,'MOPUGAD UTARA DUA','4','kelurahan','71','7101','710111','7101112015','WITA',NULL,NULL,0,'71.01.11.2015'),
                    (7101112016,710111,'MOPUGAD SELATAN SATU','4','kelurahan','71','7101','710111','7101112016','WITA',NULL,NULL,0,'71.01.11.2016'),
                    (7101112017,710111,'MOPUYA UTARA SATU','4','kelurahan','71','7101','710111','7101112017','WITA',NULL,NULL,0,'71.01.11.2017'),
                    (7101112018,710111,'MOPUYA UTARA DUA','4','kelurahan','71','7101','710111','7101112018','WITA',NULL,NULL,0,'71.01.11.2018'),
                    (7101112019,710111,'MOPUYA SELATAN SATU','4','kelurahan','71','7101','710111','7101112019','WITA',NULL,NULL,0,'71.01.11.2019'),
                    (7101112020,710111,'MOPUYA SELATAN DUA','4','kelurahan','71','7101','710111','7101112020','WITA',NULL,NULL,0,'71.01.11.2020'),
                    (7101112024,710111,'DONDOMON UTARA','4','kelurahan','71','7101','710111','7101112024','WITA',NULL,NULL,0,'71.01.11.2024'),
                    (7101112025,710111,'DONDOMON SELATAN','4','kelurahan','71','7101','710111','7101112025','WITA',NULL,NULL,0,'71.01.11.2025'),
                    (7101112026,710111,'TUMOKANG TIMUR','4','kelurahan','71','7101','710111','7101112026','WITA',NULL,NULL,0,'71.01.11.2026'),
                    (7101122001,710112,'TOTABUAN','4','kelurahan','71','7101','710112','7101122001','WITA',NULL,NULL,0,'71.01.12.2001'),
                    (7101122002,710112,'PINDOL','4','kelurahan','71','7101','710112','7101122002','WITA',NULL,NULL,0,'71.01.12.2002'),
                    (7101122003,710112,'SOLOG','4','kelurahan','71','7101','710112','7101122003','WITA',NULL,NULL,0,'71.01.12.2003'),
                    (7101122004,710112,'TANDU','4','kelurahan','71','7101','710112','7101122004','WITA',NULL,NULL,0,'71.01.12.2004'),
                    (7101122005,710112,'LOLAK','4','kelurahan','71','7101','710112','7101122005','WITA',NULL,NULL,0,'71.01.12.2005'),
                    (7101122006,710112,'MOTABANG','4','kelurahan','71','7101','710112','7101122006','WITA',NULL,NULL,0,'71.01.12.2006'),
                    (7101122007,710112,'MONGKOINIT','4','kelurahan','71','7101','710112','7101122007','WITA',NULL,NULL,0,'71.01.12.2007'),
                    (7101122008,710112,'LABUAN UKI','4','kelurahan','71','7101','710112','7101122008','WITA',NULL,NULL,0,'71.01.12.2008'),
                    (7101122009,710112,'PINOGALUMAN','4','kelurahan','71','7101','710112','7101122009','WITA',NULL,NULL,0,'71.01.12.2009'),
                    (7101122010,710112,'SAUK','4','kelurahan','71','7101','710112','7101122010','WITA',NULL,NULL,0,'71.01.12.2010'),
                    (7101122011,710112,'LALOW','4','kelurahan','71','7101','710112','7101122011','WITA',NULL,NULL,0,'71.01.12.2011'),
                    (7101122012,710112,'BUNTALO','4','kelurahan','71','7101','710112','7101122012','WITA',NULL,NULL,0,'71.01.12.2012'),
                    (7101122013,710112,'BUMBUNG','4','kelurahan','71','7101','710112','7101122013','WITA',NULL,NULL,0,'71.01.12.2013'),
                    (7101122014,710112,'BATURAPA','4','kelurahan','71','7101','710112','7101122014','WITA',NULL,NULL,0,'71.01.12.2014'),
                    (7101122015,710112,'TUYAT','4','kelurahan','71','7101','710112','7101122015','WITA',NULL,NULL,0,'71.01.12.2015'),
                    (7101122016,710112,'PINDOLILI','4','kelurahan','71','7101','710112','7101122016','WITA',NULL,NULL,0,'71.01.12.2016'),
                    (7101122017,710112,'LOLAK TOMBOLANGO','4','kelurahan','71','7101','710112','7101122017','WITA',NULL,NULL,0,'71.01.12.2017'),
                    (7101122018,710112,'LOLAK II','4','kelurahan','71','7101','710112','7101122018','WITA',NULL,NULL,0,'71.01.12.2018'),
                    (7101122019,710112,'BUNTALO TIMUR','4','kelurahan','71','7101','710112','7101122019','WITA',NULL,NULL,0,'71.01.12.2019'),
                    (7101122020,710112,'BUNTALO SELATAN','4','kelurahan','71','7101','710112','7101122020','WITA',NULL,NULL,0,'71.01.12.2020'),
                    (7101122021,710112,'BATURAPA II','4','kelurahan','71','7101','710112','7101122021','WITA',NULL,NULL,0,'71.01.12.2021'),
                    (7101122022,710112,'DIAT','4','kelurahan','71','7101','710112','7101122022','WITA',NULL,NULL,0,'71.01.12.2022'),
                    (7101122023,710112,'PINOGALUMAN TIMUR','4','kelurahan','71','7101','710112','7101122023','WITA',NULL,NULL,0,'71.01.12.2023'),
                    (7101122024,710112,'MONGKOINIT BARAT','4','kelurahan','71','7101','710112','7101122024','WITA',NULL,NULL,0,'71.01.12.2024'),
                    (7101122025,710112,'DULANGON','4','kelurahan','71','7101','710112','7101122025','WITA',NULL,NULL,0,'71.01.12.2025'),
                    (7101122026,710112,'PADANG LALOW','4','kelurahan','71','7101','710112','7101122026','WITA',NULL,NULL,0,'71.01.12.2026'),
                    (7101131006,710113,'INOBONTO','4','kelurahan','71','7101','710113','7101131006','WITA',NULL,NULL,0,'71.01.13.1006'),
                    (7101132001,710113,'KOMANGAAN','4','kelurahan','71','7101','710113','7101132001','WITA',NULL,NULL,0,'71.01.13.2001'),
                    (7101132002,710113,'SOLIMANDUNGAN II','4','kelurahan','71','7101','710113','7101132002','WITA',NULL,NULL,0,'71.01.13.2002'),
                    (7101132003,710113,'SOLIMANDUNGAN I','4','kelurahan','71','7101','710113','7101132003','WITA',NULL,NULL,0,'71.01.13.2003'),
                    (7101132004,710113,'BANGOMULUNOW','4','kelurahan','71','7101','710113','7101132004','WITA',NULL,NULL,0,'71.01.13.2004'),
                    (7101132005,710113,'LANGAGON','4','kelurahan','71','7101','710113','7101132005','WITA',NULL,NULL,0,'71.01.13.2005'),
                    (7101132007,710113,'INOBONTO II','4','kelurahan','71','7101','710113','7101132007','WITA',NULL,NULL,0,'71.01.13.2007'),
                    (7101132014,710113,'INOBONTO','4','kelurahan','71','7101','710113','7101132014','WITA',NULL,NULL,0,'71.01.13.2014'),
                    (7101132015,710113,'LANGAGON SATU','4','kelurahan','71','7101','710113','7101132015','WITA',NULL,NULL,0,'71.01.13.2015'),
                    (7101132016,710113,'LANGAGON DUA','4','kelurahan','71','7101','710113','7101132016','WITA',NULL,NULL,0,'71.01.13.2016'),
                    (7101132017,710113,'SOLIMANDUNGAN BARU','4','kelurahan','71','7101','710113','7101132017','WITA',NULL,NULL,0,'71.01.13.2017'),
                    (7101142001,710114,'BOMBANON','4','kelurahan','71','7101','710114','7101142001','WITA',NULL,NULL,0,'71.01.14.2001'),
                    (7101142002,710114,'ABAK','4','kelurahan','71','7101','710114','7101142002','WITA',NULL,NULL,0,'71.01.14.2002'),
                    (7101142003,710114,'TAPA AOG','4','kelurahan','71','7101','710114','7101142003','WITA',NULL,NULL,0,'71.01.14.2003'),
                    (7101142004,710114,'MOPUSI','4','kelurahan','71','7101','710114','7101142004','WITA',NULL,NULL,0,'71.01.14.2004'),
                    (7101142005,710114,'MATALI BARU','4','kelurahan','71','7101','710114','7101142005','WITA',NULL,NULL,0,'71.01.14.2005'),
                    (7101142006,710114,'BAKAN','4','kelurahan','71','7101','710114','7101142006','WITA',NULL,NULL,0,'71.01.14.2006'),
                    (7101142007,710114,'TANOYAN SELATAN','4','kelurahan','71','7101','710114','7101142007','WITA',NULL,NULL,0,'71.01.14.2007'),
                    (7101142008,710114,'TUNGOI I','4','kelurahan','71','7101','710114','7101142008','WITA',NULL,NULL,0,'71.01.14.2008'),
                    (7101142009,710114,'LOLAYAN','4','kelurahan','71','7101','710114','7101142009','WITA',NULL,NULL,0,'71.01.14.2009'),
                    (7101142010,710114,'MOPAIT','4','kelurahan','71','7101','710114','7101142010','WITA',NULL,NULL,0,'71.01.14.2010'),
                    (7101142017,710114,'KOPANDAKAN II','4','kelurahan','71','7101','710114','7101142017','WITA',NULL,NULL,0,'71.01.14.2017'),
                    (7101142019,710114,'TANOYAN UTARA','4','kelurahan','71','7101','710114','7101142019','WITA',NULL,NULL,0,'71.01.14.2019'),
                    (7101142020,710114,'TUNGOI II','4','kelurahan','71','7101','710114','7101142020','WITA',NULL,NULL,0,'71.01.14.2020'),
                    (7101142021,710114,'MENGKANG','4','kelurahan','71','7101','710114','7101142021','WITA',NULL,NULL,0,'71.01.14.2021'),
                    (7101192001,710119,'MUNTOI','4','kelurahan','71','7101','710119','7101192001','WITA',NULL,NULL,0,'71.01.19.2001'),
                    (7101192002,710119,'POYUYANAN','4','kelurahan','71','7101','710119','7101192002','WITA',NULL,NULL,0,'71.01.19.2002'),
                    (7101192003,710119,'LOBONG','4','kelurahan','71','7101','710119','7101192003','WITA',NULL,NULL,0,'71.01.19.2003'),
                    (7101192004,710119,'PASSI','4','kelurahan','71','7101','710119','7101192004','WITA',NULL,NULL,0,'71.01.19.2004'),
                    (7101192017,710119,'BINTAU','4','kelurahan','71','7101','710119','7101192017','WITA',NULL,NULL,0,'71.01.19.2017'),
                    (7101192018,710119,'BULUD','4','kelurahan','71','7101','710119','7101192018','WITA',NULL,NULL,0,'71.01.19.2018'),
                    (7101192019,710119,'OTAM','4','kelurahan','71','7101','710119','7101192019','WITA',NULL,NULL,0,'71.01.19.2019'),
                    (7101192020,710119,'WANGGA','4','kelurahan','71','7101','710119','7101192020','WITA',NULL,NULL,0,'71.01.19.2020'),
                    (7101192022,710119,'INUAI','4','kelurahan','71','7101','710119','7101192022','WITA',NULL,NULL,0,'71.01.19.2022'),
                    (7101192023,710119,'PASSI II','4','kelurahan','71','7101','710119','7101192023','WITA',NULL,NULL,0,'71.01.19.2023'),
                    (7101192024,710119,'MUNTOI TIMUR','4','kelurahan','71','7101','710119','7101192024','WITA',NULL,NULL,0,'71.01.19.2024'),
                    (7101192025,710119,'OTAM BARAT','4','kelurahan','71','7101','710119','7101192025','WITA',NULL,NULL,0,'71.01.19.2025'),
                    (7101192026,710119,'WANGGA SATU','4','kelurahan','71','7101','710119','7101192026','WITA',NULL,NULL,0,'71.01.19.2026'),
                    (7101202001,710120,'MARIRI LAMA','4','kelurahan','71','7101','710120','7101202001','WITA',NULL,NULL,0,'71.01.20.2001'),
                    (7101202002,710120,'MARIRI BARU','4','kelurahan','71','7101','710120','7101202002','WITA',NULL,NULL,0,'71.01.20.2002'),
                    (7101202003,710120,'NONAPAN II','4','kelurahan','71','7101','710120','7101202003','WITA',NULL,NULL,0,'71.01.20.2003'),
                    (7101202004,710120,'NONAPAN I','4','kelurahan','71','7101','710120','7101202004','WITA',NULL,NULL,0,'71.01.20.2004'),
                    (7101202005,710120,'WINERU','4','kelurahan','71','7101','710120','7101202005','WITA',NULL,NULL,0,'71.01.20.2005'),
                    (7101202006,710120,'GOGALUMAN','4','kelurahan','71','7101','710120','7101202006','WITA',NULL,NULL,0,'71.01.20.2006'),
                    (7101202007,710120,'POIGAR I','4','kelurahan','71','7101','710120','7101202007','WITA',NULL,NULL,0,'71.01.20.2007'),
                    (7101202008,710120,'NANASI','4','kelurahan','71','7101','710120','7101202008','WITA',NULL,NULL,0,'71.01.20.2008'),
                    (7101202009,710120,'POMOMAN','4','kelurahan','71','7101','710120','7101202009','WITA',NULL,NULL,0,'71.01.20.2009'),
                    (7101202010,710120,'TIBERIAS','4','kelurahan','71','7101','710120','7101202010','WITA',NULL,NULL,0,'71.01.20.2010'),
                    (7101202011,710120,'MONDATONG','4','kelurahan','71','7101','710120','7101202011','WITA',NULL,NULL,0,'71.01.20.2011'),
                    (7101202012,710120,'POIGAR II','4','kelurahan','71','7101','710120','7101202012','WITA',NULL,NULL,0,'71.01.20.2012'),
                    (7101202013,710120,'POIGAR III','4','kelurahan','71','7101','710120','7101202013','WITA',NULL,NULL,0,'71.01.20.2013'),
                    (7101202014,710120,'MARIRI II','4','kelurahan','71','7101','710120','7101202014','WITA',NULL,NULL,0,'71.01.20.2014'),
                    (7101202015,710120,'MARIRI I','4','kelurahan','71','7101','710120','7101202015','WITA',NULL,NULL,0,'71.01.20.2015'),
                    (7101202016,710120,'NONAPAN BARU','4','kelurahan','71','7101','710120','7101202016','WITA',NULL,NULL,0,'71.01.20.2016'),
                    (7101202017,710120,'NANASI TIMUR','4','kelurahan','71','7101','710120','7101202017','WITA',NULL,NULL,0,'71.01.20.2017'),
                    (7101202018,710120,'NONAPAN','4','kelurahan','71','7101','710120','7101202018','WITA',NULL,NULL,0,'71.01.20.2018'),
                    (7101202019,710120,'TANJUNG MARIRI','4','kelurahan','71','7101','710120','7101202019','WITA',NULL,NULL,0,'71.01.20.2019'),
                    (7101202020,710120,'MONDATONG BARU','4','kelurahan','71','7101','710120','7101202020','WITA',NULL,NULL,0,'71.01.20.2020'),
                    (7101222003,710122,'PANGIAN','4','kelurahan','71','7101','710122','7101222003','WITA',NULL,NULL,0,'71.01.22.2003'),
                    (7101222004,710122,'POOPO','4','kelurahan','71','7101','710122','7101222004','WITA',NULL,NULL,0,'71.01.22.2004'),
                    (7101222005,710122,'MANEMBO','4','kelurahan','71','7101','710122','7101222005','WITA',NULL,NULL,0,'71.01.22.2005'),
                    (7101222006,710122,'SINSINGON','4','kelurahan','71','7101','710122','7101222006','WITA',NULL,NULL,0,'71.01.22.2006'),
                    (7101222007,710122,'INSIL','4','kelurahan','71','7101','710122','7101222007','WITA',NULL,NULL,0,'71.01.22.2007'),
                    (7101222009,710122,'MOBUYA','4','kelurahan','71','7101','710122','7101222009','WITA',NULL,NULL,0,'71.01.22.2009'),
                    (7101222012,710122,'INSIL BARU','4','kelurahan','71','7101','710122','7101222012','WITA',NULL,NULL,0,'71.01.22.2012'),
                    (7101222013,710122,'PANGIAN TENGAH','4','kelurahan','71','7101','710122','7101222013','WITA',NULL,NULL,0,'71.01.22.2013'),
                    (7101222014,710122,'PANGIAN BARAT','4','kelurahan','71','7101','710122','7101222014','WITA',NULL,NULL,0,'71.01.22.2014'),
                    (7101222015,710122,'POOPO BARAT','4','kelurahan','71','7101','710122','7101222015','WITA',NULL,NULL,0,'71.01.22.2015'),
                    (7101222016,710122,'POOPO SELATAN','4','kelurahan','71','7101','710122','7101222016','WITA',NULL,NULL,0,'71.01.22.2016'),
                    (7101222017,710122,'SINSINGON BARAT','4','kelurahan','71','7101','710122','7101222017','WITA',NULL,NULL,0,'71.01.22.2017'),
                    (7101222018,710122,'SINSINGON TIMUR','4','kelurahan','71','7101','710122','7101222018','WITA',NULL,NULL,0,'71.01.22.2018'),
                    (7101312001,710131,'AMBANG I','4','kelurahan','71','7101','710131','7101312001','WITA',NULL,NULL,0,'71.01.31.2001'),
                    (7101312002,710131,'AMBANG II','4','kelurahan','71','7101','710131','7101312002','WITA',NULL,NULL,0,'71.01.31.2002'),
                    (7101312003,710131,'TADOY','4','kelurahan','71','7101','710131','7101312003','WITA',NULL,NULL,0,'71.01.31.2003'),
                    (7101312004,710131,'BOLAANG','4','kelurahan','71','7101','710131','7101312004','WITA',NULL,NULL,0,'71.01.31.2004'),
                    (7101312005,710131,'BANTIK','4','kelurahan','71','7101','710131','7101312005','WITA',NULL,NULL,0,'71.01.31.2005'),
                    (7101312006,710131,'LOLAN','4','kelurahan','71','7101','710131','7101312006','WITA',NULL,NULL,0,'71.01.31.2006'),
                    (7101312007,710131,'TADOY I','4','kelurahan','71','7101','710131','7101312007','WITA',NULL,NULL,0,'71.01.31.2007'),
                    (7101312008,710131,'BOLAANG SATU','4','kelurahan','71','7101','710131','7101312008','WITA',NULL,NULL,0,'71.01.31.2008'),
                    (7101312009,710131,'LOLAN DUA','4','kelurahan','71','7101','710131','7101312009','WITA',NULL,NULL,0,'71.01.31.2009'),
                    (7101322001,710132,'BILALANG III','4','kelurahan','71','7101','710132','7101322001','WITA',NULL,NULL,0,'71.01.32.2001'),
                    (7101322002,710132,'BILALANG IV','4','kelurahan','71','7101','710132','7101322002','WITA',NULL,NULL,0,'71.01.32.2002'),
                    (7101322003,710132,'TUDU AOG','4','kelurahan','71','7101','710132','7101322003','WITA',NULL,NULL,0,'71.01.32.2003'),
                    (7101322004,710132,'TUDU AOG BARU','4','kelurahan','71','7101','710132','7101322004','WITA',NULL,NULL,0,'71.01.32.2004'),
                    (7101322005,710132,'KOLINGANGA''AN','4','kelurahan','71','7101','710132','7101322005','WITA',NULL,NULL,0,'71.01.32.2005'),
                    (7101322006,710132,'BILALANG III UTARA','4','kelurahan','71','7101','710132','7101322006','WITA',NULL,NULL,0,'71.01.32.2006'),
                    (7101322007,710132,'BILALANG BARU','4','kelurahan','71','7101','710132','7101322007','WITA',NULL,NULL,0,'71.01.32.2007'),
                    (7101322008,710132,'APADO','4','kelurahan','71','7101','710132','7101322008','WITA',NULL,NULL,0,'71.01.32.2008'),
                    (7101332001,710133,'SERASI','4','kelurahan','71','7101','710133','7101332001','WITA',NULL,NULL,0,'71.01.33.2001'),
                    (7101332002,710133,'KANAAN','4','kelurahan','71','7101','710133','7101332002','WITA',NULL,NULL,0,'71.01.33.2002'),
                    (7101332003,710133,'TORUAKAT','4','kelurahan','71','7101','710133','7101332003','WITA',NULL,NULL,0,'71.01.33.2003'),
                    (7101332004,710133,'PUSIAN','4','kelurahan','71','7101','710133','7101332004','WITA',NULL,NULL,0,'71.01.33.2004'),
                    (7101332005,710133,'PONOMPIAAN','4','kelurahan','71','7101','710133','7101332005','WITA',NULL,NULL,0,'71.01.33.2005'),
                    (7101332006,710133,'MOTOTABIAN','4','kelurahan','71','7101','710133','7101332006','WITA',NULL,NULL,0,'71.01.33.2006'),
                    (7101332007,710133,'BUMBUNGON','4','kelurahan','71','7101','710133','7101332007','WITA',NULL,NULL,0,'71.01.33.2007'),
                    (7101332008,710133,'SINIYUNG','4','kelurahan','71','7101','710133','7101332008','WITA',NULL,NULL,0,'71.01.33.2008'),
                    (7101332009,710133,'SINIYUNG SATU','4','kelurahan','71','7101','710133','7101332009','WITA',NULL,NULL,0,'71.01.33.2009'),
                    (7101332010,710133,'DUMOGA SATU','4','kelurahan','71','7101','710133','7101332010','WITA',NULL,NULL,0,'71.01.33.2010'),
                    (7101332011,710133,'PUSIAN SELATAN','4','kelurahan','71','7101','710133','7101332011','WITA',NULL,NULL,0,'71.01.33.2011'),
                    (7101332012,710133,'PUSIAN BARAT','4','kelurahan','71','7101','710133','7101332012','WITA',NULL,NULL,0,'71.01.33.2012'),
                    (7101342001,710134,'BONAWANG','4','kelurahan','71','7101','710134','7101342001','WITA',NULL,NULL,0,'71.01.34.2001'),
                    (7101342002,710134,'TAPADAKA SATU','4','kelurahan','71','7101','710134','7101342002','WITA',NULL,NULL,0,'71.01.34.2002'),
                    (7101342003,710134,'TAPADAKA UTARA','4','kelurahan','71','7101','710134','7101342003','WITA',NULL,NULL,0,'71.01.34.2003'),
                    (7101342004,710134,'TAPADAKA TIMUR','4','kelurahan','71','7101','710134','7101342004','WITA',NULL,NULL,0,'71.01.34.2004'),
                    (7101342005,710134,'KONAROM','4','kelurahan','71','7101','710134','7101342005','WITA',NULL,NULL,0,'71.01.34.2005'),
                    (7101342006,710134,'KONAROM BARAT','4','kelurahan','71','7101','710134','7101342006','WITA',NULL,NULL,0,'71.01.34.2006'),
                    (7101342007,710134,'KONAROM UTARA','4','kelurahan','71','7101','710134','7101342007','WITA',NULL,NULL,0,'71.01.34.2007'),
                    (7101342008,710134,'OSION','4','kelurahan','71','7101','710134','7101342008','WITA',NULL,NULL,0,'71.01.34.2008'),
                    (7101342009,710134,'IKUNA','4','kelurahan','71','7101','710134','7101342009','WITA',NULL,NULL,0,'71.01.34.2009'),
                    (7101342010,710134,'DUMARA','4','kelurahan','71','7101','710134','7101342010','WITA',NULL,NULL,0,'71.01.34.2010'),
                    (7101352001,710135,'IBOLIAN','4','kelurahan','71','7101','710135','7101352001','WITA',NULL,NULL,0,'71.01.35.2001'),
                    (7101352002,710135,'IBOLIAN SATU','4','kelurahan','71','7101','710135','7101352002','WITA',NULL,NULL,0,'71.01.35.2002'),
                    (7101352003,710135,'KINOMALIGAN','4','kelurahan','71','7101','710135','7101352003','WITA',NULL,NULL,0,'71.01.35.2003'),
                    (7101352004,710135,'KOSIO','4','kelurahan','71','7101','710135','7101352004','WITA',NULL,NULL,0,'71.01.35.2004'),
                    (7101352005,710135,'KOSIO TIMUR','4','kelurahan','71','7101','710135','7101352005','WITA',NULL,NULL,0,'71.01.35.2005'),
                    (7101352006,710135,'KASIO BARAT','4','kelurahan','71','7101','710135','7101352006','WITA',NULL,NULL,0,'71.01.35.2006'),
                    (7101352007,710135,'WERDHI AGUNG','4','kelurahan','71','7101','710135','7101352007','WITA',NULL,NULL,0,'71.01.35.2007'),
                    (7101352008,710135,'WERDHI AGUNG SELATAN','4','kelurahan','71','7101','710135','7101352008','WITA',NULL,NULL,0,'71.01.35.2008'),
                    (7101352009,710135,'WERDHI AGUNG UTARA','4','kelurahan','71','7101','710135','7101352009','WITA',NULL,NULL,0,'71.01.35.2009'),
                    (7101352010,710135,'WERDHI AGUNG TIMUR','4','kelurahan','71','7101','710135','7101352010','WITA',NULL,NULL,0,'71.01.35.2010'),
                    (7102011007,710201,'MASARANG','4','kelurahan','71','7102','710201','7102011007','WITA',NULL,NULL,0,'71.02.01.1007'),
                    (7102011008,710201,'RINEGETAN','4','kelurahan','71','7102','710201','7102011008','WITA',NULL,NULL,0,'71.02.01.1008'),
                    (7102011009,710201,'ROONG','4','kelurahan','71','7102','710201','7102011009','WITA',NULL,NULL,0,'71.02.01.1009'),
                    (7102011010,710201,'TUUTU','4','kelurahan','71','7102','710201','7102011010','WITA',NULL,NULL,0,'71.02.01.1010'),
                    (7102011011,710201,'TOUNKURAMBER','4','kelurahan','71','7102','710201','7102011011','WITA',NULL,NULL,0,'71.02.01.1011'),
                    (7102011012,710201,'WAWALINTOUAN','4','kelurahan','71','7102','710201','7102011012','WITA',NULL,NULL,0,'71.02.01.1012'),
                    (7102011013,710201,'REREWOKAN','4','kelurahan','71','7102','710201','7102011013','WITA',NULL,NULL,0,'71.02.01.1013'),
                    (7102011014,710201,'WATULAMBOT','4','kelurahan','71','7102','710201','7102011014','WITA',NULL,NULL,0,'71.02.01.1014'),
                    (7102011015,710201,'WEWELAN','4','kelurahan','71','7102','710201','7102011015','WITA',NULL,NULL,0,'71.02.01.1015'),
                    (7102021001,710202,'LUAAN','4','kelurahan','71','7102','710202','7102021001','WITA',NULL,NULL,0,'71.02.02.1001'),
                    (7102021005,710202,'RANOWANGKO','4','kelurahan','71','7102','710202','7102021005','WITA',NULL,NULL,0,'71.02.02.1005'),
                    (7102021006,710202,'WENGKOL','4','kelurahan','71','7102','710202','7102021006','WITA',NULL,NULL,0,'71.02.02.1006'),
                    (7102021007,710202,'KENDIS','4','kelurahan','71','7102','710202','7102021007','WITA',NULL,NULL,0,'71.02.02.1007'),
                    (7102021008,710202,'KATINGGOLAN','4','kelurahan','71','7102','710202','7102021008','WITA',NULL,NULL,0,'71.02.02.1008'),
                    (7102021009,710202,'LININGAAN','4','kelurahan','71','7102','710202','7102021009','WITA',NULL,NULL,0,'71.02.02.1009'),
                    (7102021010,710202,'TALER','4','kelurahan','71','7102','710202','7102021010','WITA',NULL,NULL,0,'71.02.02.1010'),
                    (7102021011,710202,'KINIAR','4','kelurahan','71','7102','710202','7102021011','WITA',NULL,NULL,0,'71.02.02.1011'),
                    (7102021012,710202,'TOULUOR','4','kelurahan','71','7102','710202','7102021012','WITA',NULL,NULL,0,'71.02.02.1012'),
                    (7102021013,710202,'PAPAKELAN','4','kelurahan','71','7102','710202','7102021013','WITA',NULL,NULL,0,'71.02.02.1013'),
                    (7102021014,710202,'MAKALOUNSOW','4','kelurahan','71','7102','710202','7102021014','WITA',NULL,NULL,0,'71.02.02.1014'),
                    (7102032001,710203,'TELAP','4','kelurahan','71','7102','710203','7102032001','WITA',NULL,NULL,0,'71.02.03.2001'),
                    (7102032002,710203,'WATUMEA','4','kelurahan','71','7102','710203','7102032002','WITA',NULL,NULL,0,'71.02.03.2002'),
                    (7102032003,710203,'ERIS','4','kelurahan','71','7102','710203','7102032003','WITA',NULL,NULL,0,'71.02.03.2003'),
                    (7102032004,710203,'MAUMBI','4','kelurahan','71','7102','710203','7102032004','WITA',NULL,NULL,0,'71.02.03.2004'),
                    (7102032005,710203,'TANDENGAN','4','kelurahan','71','7102','710203','7102032005','WITA',NULL,NULL,0,'71.02.03.2005'),
                    (7102032006,710203,'RANOMERUT','4','kelurahan','71','7102','710203','7102032006','WITA',NULL,NULL,0,'71.02.03.2006'),
                    (7102032007,710203,'TOULIANG OKI','4','kelurahan','71','7102','710203','7102032007','WITA',NULL,NULL,0,'71.02.03.2007'),
                    (7102032008,710203,'TANDENGAN SATU','4','kelurahan','71','7102','710203','7102032008','WITA',NULL,NULL,0,'71.02.03.2008'),
                    (7102042001,710204,'TULAP','4','kelurahan','71','7102','710204','7102042001','WITA',NULL,NULL,0,'71.02.04.2001'),
                    (7102042002,710204,'LALUMPE','4','kelurahan','71','7102','710204','7102042002','WITA',NULL,NULL,0,'71.02.04.2002'),
                    (7102042003,710204,'KAYUBESI','4','kelurahan','71','7102','710204','7102042003','WITA',NULL,NULL,0,'71.02.04.2003'),
                    (7102042004,710204,'RANOWANGKO II','4','kelurahan','71','7102','710204','7102042004','WITA',NULL,NULL,0,'71.02.04.2004'),
                    (7102042005,710204,'KOMBI','4','kelurahan','71','7102','710204','7102042005','WITA',NULL,NULL,0,'71.02.04.2005'),
                    (7102042006,710204,'SAWANGAN','4','kelurahan','71','7102','710204','7102042006','WITA',NULL,NULL,0,'71.02.04.2006'),
                    (7102042007,710204,'KOLONGAN','4','kelurahan','71','7102','710204','7102042007','WITA',NULL,NULL,0,'71.02.04.2007'),
                    (7102042008,710204,'RERER','4','kelurahan','71','7102','710204','7102042008','WITA',NULL,NULL,0,'71.02.04.2008'),
                    (7102042009,710204,'KINALEOSAN','4','kelurahan','71','7102','710204','7102042009','WITA',NULL,NULL,0,'71.02.04.2009'),
                    (7102042010,710204,'MAKALISUNG','4','kelurahan','71','7102','710204','7102042010','WITA',NULL,NULL,0,'71.02.04.2010'),
                    (7102042011,710204,'KALAWIRAN','4','kelurahan','71','7102','710204','7102042011','WITA',NULL,NULL,0,'71.02.04.2011'),
                    (7102042012,710204,'KOLONGAN SATU','4','kelurahan','71','7102','710204','7102042012','WITA',NULL,NULL,0,'71.02.04.2012'),
                    (7102042013,710204,'RERER SATU','4','kelurahan','71','7102','710204','7102042013','WITA',NULL,NULL,0,'71.02.04.2013'),
                    (7102052001,710205,'KAPATARAN','4','kelurahan','71','7102','710205','7102052001','WITA',NULL,NULL,0,'71.02.05.2001'),
                    (7102052002,710205,'SERETAN','4','kelurahan','71','7102','710205','7102052002','WITA',NULL,NULL,0,'71.02.05.2002'),
                    (7102052003,710205,'ATEP OKI','4','kelurahan','71','7102','710205','7102052003','WITA',NULL,NULL,0,'71.02.05.2003'),
                    (7102052004,710205,'KAROR','4','kelurahan','71','7102','710205','7102052004','WITA',NULL,NULL,0,'71.02.05.2004'),
                    (7102052005,710205,'KALEOSAN','4','kelurahan','71','7102','710205','7102052005','WITA',NULL,NULL,0,'71.02.05.2005'),
                    (7102052006,710205,'WATULANEY','4','kelurahan','71','7102','710205','7102052006','WITA',NULL,NULL,0,'71.02.05.2006'),
                    (7102052007,710205,'KAYUROYA','4','kelurahan','71','7102','710205','7102052007','WITA',NULL,NULL,0,'71.02.05.2007'),
                    (7102052008,710205,'SERETAN TIMU','4','kelurahan','71','7102','710205','7102052008','WITA',NULL,NULL,0,'71.02.05.2008'),
                    (7102052009,710205,'PARENTEK','4','kelurahan','71','7102','710205','7102052009','WITA',NULL,NULL,0,'71.02.05.2009'),
                    (7102052010,710205,'KAPATARAN SATU','4','kelurahan','71','7102','710205','7102052010','WITA',NULL,NULL,0,'71.02.05.2010'),
                    (7102052011,710205,'WATULANEY AMIAN','4','kelurahan','71','7102','710205','7102052011','WITA',NULL,NULL,0,'71.02.05.2011'),
                    (7102062003,710206,'KAYUWATU','4','kelurahan','71','7102','710206','7102062003','WITA',NULL,NULL,0,'71.02.06.2003'),
                    (7102062004,710206,'WINERU','4','kelurahan','71','7102','710206','7102062004','WITA',NULL,NULL,0,'71.02.06.2004'),
                    (7102062005,710206,'RINONDOR','4','kelurahan','71','7102','710206','7102062005','WITA',NULL,NULL,0,'71.02.06.2005'),
                    (7102062006,710206,'SENDANGAN','4','kelurahan','71','7102','710206','7102062006','WITA',NULL,NULL,0,'71.02.06.2006'),
                    (7102062015,710206,'PAHALETEN','4','kelurahan','71','7102','710206','7102062015','WITA',NULL,NULL,0,'71.02.06.2015'),
                    (7102062016,710206,'TALIKURAN','4','kelurahan','71','7102','710206','7102062016','WITA',NULL,NULL,0,'71.02.06.2016'),
                    (7102062017,710206,'TOUNELET','4','kelurahan','71','7102','710206','7102062017','WITA',NULL,NULL,0,'71.02.06.2017'),
                    (7102062018,710206,'PASLATEN','4','kelurahan','71','7102','710206','7102062018','WITA',NULL,NULL,0,'71.02.06.2018'),
                    (7102062019,710206,'KAWENG','4','kelurahan','71','7102','710206','7102062019','WITA',NULL,NULL,0,'71.02.06.2019'),
                    (7102062020,710206,'TOULIMEMBET','4','kelurahan','71','7102','710206','7102062020','WITA',NULL,NULL,0,'71.02.06.2020'),
                    (7102062021,710206,'MAKALELON','4','kelurahan','71','7102','710206','7102062021','WITA',NULL,NULL,0,'71.02.06.2021'),
                    (7102062022,710206,'TUMPAAN','4','kelurahan','71','7102','710206','7102062022','WITA',NULL,NULL,0,'71.02.06.2022'),
                    (7102062023,710206,'MAHEMBANG','4','kelurahan','71','7102','710206','7102062023','WITA',NULL,NULL,0,'71.02.06.2023'),
                    (7102072004,710207,'TEMBER','4','kelurahan','71','7102','710207','7102072004','WITA',NULL,NULL,0,'71.02.07.2004'),
                    (7102072005,710207,'KAMANGA','4','kelurahan','71','7102','710207','7102072005','WITA',NULL,NULL,0,'71.02.07.2005'),
                    (7102072006,710207,'SENDANGAN','4','kelurahan','71','7102','710207','7102072006','WITA',NULL,NULL,0,'71.02.07.2006'),
                    (7102072007,710207,'TALIKURAN','4','kelurahan','71','7102','710207','7102072007','WITA',NULL,NULL,0,'71.02.07.2007'),
                    (7102072009,710207,'TEMPOK','4','kelurahan','71','7102','710207','7102072009','WITA',NULL,NULL,0,'71.02.07.2009'),
                    (7102072010,710207,'LIBA','4','kelurahan','71','7102','710207','7102072010','WITA',NULL,NULL,0,'71.02.07.2010'),
                    (7102072011,710207,'TOLOK','4','kelurahan','71','7102','710207','7102072011','WITA',NULL,NULL,0,'71.02.07.2011'),
                    (7102072012,710207,'KAMANGA DUA','4','kelurahan','71','7102','710207','7102072012','WITA',NULL,NULL,0,'71.02.07.2012'),
                    (7102072016,710207,'TEMPOK SELATAN','4','kelurahan','71','7102','710207','7102072016','WITA',NULL,NULL,0,'71.02.07.2016'),
                    (7102072017,710207,'TOLOK SATU','4','kelurahan','71','7102','710207','7102072017','WITA',NULL,NULL,0,'71.02.07.2017'),
                    (7102082001,710208,'KASURATAN','4','kelurahan','71','7102','710208','7102082001','WITA',NULL,NULL,0,'71.02.08.2001'),
                    (7102082002,710208,'PAREPEI','4','kelurahan','71','7102','710208','7102082002','WITA',NULL,NULL,0,'71.02.08.2002'),
                    (7102082003,710208,'PULUTAN','4','kelurahan','71','7102','710208','7102082003','WITA',NULL,NULL,0,'71.02.08.2003'),
                    (7102082004,710208,'SINUIAN','4','kelurahan','71','7102','710208','7102082004','WITA',NULL,NULL,0,'71.02.08.2004'),
                    (7102082005,710208,'KAIMA','4','kelurahan','71','7102','710208','7102082005','WITA',NULL,NULL,0,'71.02.08.2005'),
                    (7102082006,710208,'SENDANGAN','4','kelurahan','71','7102','710208','7102082006','WITA',NULL,NULL,0,'71.02.08.2006'),
                    (7102082007,710208,'TIMU','4','kelurahan','71','7102','710208','7102082007','WITA',NULL,NULL,0,'71.02.08.2007'),
                    (7102082008,710208,'TALIKURAN','4','kelurahan','71','7102','710208','7102082008','WITA',NULL,NULL,0,'71.02.08.2008'),
                    (7102082009,710208,'TAMPUSU','4','kelurahan','71','7102','710208','7102082009','WITA',NULL,NULL,0,'71.02.08.2009'),
                    (7102082010,710208,'PASLATEN','4','kelurahan','71','7102','710208','7102082010','WITA',NULL,NULL,0,'71.02.08.2010'),
                    (7102082011,710208,'LELEKO','4','kelurahan','71','7102','710208','7102082011','WITA',NULL,NULL,0,'71.02.08.2011'),
                    (7102092004,710209,'WOLAANG','4','kelurahan','71','7102','710209','7102092004','WITA',NULL,NULL,0,'71.02.09.2004'),
                    (7102092005,710209,'TEEP','4','kelurahan','71','7102','710209','7102092005','WITA',NULL,NULL,0,'71.02.09.2005'),
                    (7102092006,710209,'KARONDORAN','4','kelurahan','71','7102','710209','7102092006','WITA',NULL,NULL,0,'71.02.09.2006'),
                    (7102092007,710209,'WALEURE','4','kelurahan','71','7102','710209','7102092007','WITA',NULL,NULL,0,'71.02.09.2007'),
                    (7102092008,710209,'AMONGENA I','4','kelurahan','71','7102','710209','7102092008','WITA',NULL,NULL,0,'71.02.09.2008'),
                    (7102092009,710209,'AMONGENA II','4','kelurahan','71','7102','710209','7102092009','WITA',NULL,NULL,0,'71.02.09.2009'),
                    (7102092010,710209,'SUMARAYAR','4','kelurahan','71','7102','710209','7102092010','WITA',NULL,NULL,0,'71.02.09.2010'),
                    (7102092018,710209,'AMONGENA III','4','kelurahan','71','7102','710209','7102092018','WITA',NULL,NULL,0,'71.02.09.2018'),
                    (7102102001,710210,'KOYAWAS','4','kelurahan','71','7102','710210','7102102001','WITA',NULL,NULL,0,'71.02.10.2001'),
                    (7102102002,710210,'WALEWANGKO','4','kelurahan','71','7102','710210','7102102002','WITA',NULL,NULL,0,'71.02.10.2002'),
                    (7102102003,710210,'NOONGAN','4','kelurahan','71','7102','710210','7102102003','WITA',NULL,NULL,0,'71.02.10.2003'),
                    (7102102004,710210,'RARINGIS','4','kelurahan','71','7102','710210','7102102004','WITA',NULL,NULL,0,'71.02.10.2004'),
                    (7102102005,710210,'AMPRENG','4','kelurahan','71','7102','710210','7102102005','WITA',NULL,NULL,0,'71.02.10.2005'),
                    (7102102006,710210,'TUMARATAS','4','kelurahan','71','7102','710210','7102102006','WITA',NULL,NULL,0,'71.02.10.2006'),
                    (7102102009,710210,'PASLATEN','4','kelurahan','71','7102','710210','7102102009','WITA',NULL,NULL,0,'71.02.10.2009'),
                    (7102102010,710210,'LOWIAN','4','kelurahan','71','7102','710210','7102102010','WITA',NULL,NULL,0,'71.02.10.2010'),
                    (7102102011,710210,'TOUNELET','4','kelurahan','71','7102','710210','7102102011','WITA',NULL,NULL,0,'71.02.10.2011'),
                    (7102102014,710210,'KOPIWANGKER','4','kelurahan','71','7102','710210','7102102014','WITA',NULL,NULL,0,'71.02.10.2014'),
                    (7102102015,710210,'NOONGAN DUA','4','kelurahan','71','7102','710210','7102102015','WITA',NULL,NULL,0,'71.02.10.2015'),
                    (7102102016,710210,'NOONGAN TIGA','4','kelurahan','71','7102','710210','7102102016','WITA',NULL,NULL,0,'71.02.10.2016'),
                    (7102102017,710210,'TUMARATAS DUA','4','kelurahan','71','7102','710210','7102102017','WITA',NULL,NULL,0,'71.02.10.2017'),
                    (7102102018,710210,'RARANON','4','kelurahan','71','7102','710210','7102102018','WITA',NULL,NULL,0,'71.02.10.2018'),
                    (7102102019,710210,'RARINGIS UTARA','4','kelurahan','71','7102','710210','7102102019','WITA',NULL,NULL,0,'71.02.10.2019'),
                    (7102102020,710210,'RARINGIS SELATAN','4','kelurahan','71','7102','710210','7102102020','WITA',NULL,NULL,0,'71.02.10.2020'),
                    (7102112001,710211,'LEILEM','4','kelurahan','71','7102','710211','7102112001','WITA',NULL,NULL,0,'71.02.11.2001'),
                    (7102112002,710211,'KOLONGAN ATAS','4','kelurahan','71','7102','710211','7102112002','WITA',NULL,NULL,0,'71.02.11.2002'),
                    (7102112003,710211,'TOUNELET SATU','4','kelurahan','71','7102','710211','7102112003','WITA',NULL,NULL,0,'71.02.11.2003'),
                    (7102112004,710211,'TALIKURAN','4','kelurahan','71','7102','710211','7102112004','WITA',NULL,NULL,0,'71.02.11.2004'),
                    (7102112005,710211,'KAUNERAN','4','kelurahan','71','7102','710211','7102112005','WITA',NULL,NULL,0,'71.02.11.2005'),
                    (7102112006,710211,'SENDANGAN','4','kelurahan','71','7102','710211','7102112006','WITA',NULL,NULL,0,'71.02.11.2006'),
                    (7102112007,710211,'RAMBUNAN','4','kelurahan','71','7102','710211','7102112007','WITA',NULL,NULL,0,'71.02.11.2007'),
                    (7102112008,710211,'SAWANGAN','4','kelurahan','71','7102','710211','7102112008','WITA',NULL,NULL,0,'71.02.11.2008'),
                    (7102112009,710211,'TINCEP','4','kelurahan','71','7102','710211','7102112009','WITA',NULL,NULL,0,'71.02.11.2009'),
                    (7102112010,710211,'TIMBUKAR','4','kelurahan','71','7102','710211','7102112010','WITA',NULL,NULL,0,'71.02.11.2010'),
                    (7102112011,710211,'LEILEM DUA','4','kelurahan','71','7102','710211','7102112011','WITA',NULL,NULL,0,'71.02.11.2011'),
                    (7102112012,710211,'LEILEM TIGA','4','kelurahan','71','7102','710211','7102112012','WITA',NULL,NULL,0,'71.02.11.2012'),
                    (7102112013,710211,'KOLONGAN ATAS DUA','4','kelurahan','71','7102','710211','7102112013','WITA',NULL,NULL,0,'71.02.11.2013'),
                    (7102112014,710211,'KAUNERAN SATU','4','kelurahan','71','7102','710211','7102112014','WITA',NULL,NULL,0,'71.02.11.2014'),
                    (7102112015,710211,'RAMBUNAN AMIAN','4','kelurahan','71','7102','710211','7102112015','WITA',NULL,NULL,0,'71.02.11.2015'),
                    (7102112016,710211,'SENDANGAN I','4','kelurahan','71','7102','710211','7102112016','WITA',NULL,NULL,0,'71.02.11.2016'),
                    (7102112017,710211,'TALIKURAN SATU','4','kelurahan','71','7102','710211','7102112017','WITA',NULL,NULL,0,'71.02.11.2017'),
                    (7102112018,710211,'TOUNELET SATU','4','kelurahan','71','7102','710211','7102112018','WITA',NULL,NULL,0,'71.02.11.2018'),
                    (7102112019,710211,'KOLONGAN ATAS SATU','4','kelurahan','71','7102','710211','7102112019','WITA',NULL,NULL,0,'71.02.11.2019'),
                    (7102121005,710212,'SENDANGAN','4','kelurahan','71','7102','710212','7102121005','WITA',NULL,NULL,0,'71.02.12.1005'),
                    (7102121011,710212,'KINALI','4','kelurahan','71','7102','710212','7102121011','WITA',NULL,NULL,0,'71.02.12.1011'),
                    (7102121019,710212,'SENDANGAN SELATAN','4','kelurahan','71','7102','710212','7102121019','WITA',NULL,NULL,0,'71.02.12.1019'),
                    (7102121020,710212,'SENDANGAN TENGAH','4','kelurahan','71','7102','710212','7102121020','WITA',NULL,NULL,0,'71.02.12.1020'),
                    (7102121028,710212,'UNER SATU','4','kelurahan','71','7102','710212','7102121028','WITA',NULL,NULL,0,'71.02.12.1028'),
                    (7102121029,710212,'KINALI SATU','4','kelurahan','71','7102','710212','7102121029','WITA',NULL,NULL,0,'71.02.12.1029'),
                    (7102122012,710212,'TONDEGESAN','4','kelurahan','71','7102','710212','7102122012','WITA',NULL,NULL,0,'71.02.12.2012'),
                    (7102122016,710212,'KANONANG TIGA','4','kelurahan','71','7102','710212','7102122016','WITA',NULL,NULL,0,'71.02.12.2016'),
                    (7102122030,710212,'TONDEGESAN SATU','4','kelurahan','71','7102','710212','7102122030','WITA',NULL,NULL,0,'71.02.12.2030'),
                    (7102122031,710212,'TONDEGESAN DUA','4','kelurahan','71','7102','710212','7102122031','WITA',NULL,NULL,0,'71.02.12.2031'),
                    (7102132001,710213,'PINELENG I','4','kelurahan','71','7102','710213','7102132001','WITA',NULL,NULL,0,'71.02.13.2001'),
                    (7102132002,710213,'PINELENG II','4','kelurahan','71','7102','710213','7102132002','WITA',NULL,NULL,0,'71.02.13.2002'),
                    (7102132003,710213,'SEA I','4','kelurahan','71','7102','710213','7102132003','WITA',NULL,NULL,0,'71.02.13.2003'),
                    (7102132004,710213,'SEA II','4','kelurahan','71','7102','710213','7102132004','WITA',NULL,NULL,0,'71.02.13.2004'),
                    (7102132005,710213,'WINAGUN ATAS','4','kelurahan','71','7102','710213','7102132005','WITA',NULL,NULL,0,'71.02.13.2005'),
                    (7102132006,710213,'WAREMBUNGAN','4','kelurahan','71','7102','710213','7102132006','WITA',NULL,NULL,0,'71.02.13.2006'),
                    (7102132007,710213,'SEA','4','kelurahan','71','7102','710213','7102132007','WITA',NULL,NULL,0,'71.02.13.2007'),
                    (7102132014,710213,'KALI','4','kelurahan','71','7102','710213','7102132014','WITA',NULL,NULL,0,'71.02.13.2014'),
                    (7102132016,710213,'KALI SELATAN','4','kelurahan','71','7102','710213','7102132016','WITA',NULL,NULL,0,'71.02.13.2016'),
                    (7102132020,710213,'PINELENG DUA INDAH','4','kelurahan','71','7102','710213','7102132020','WITA',NULL,NULL,0,'71.02.13.2020'),
                    (7102132021,710213,'LOTTA','4','kelurahan','71','7102','710213','7102132021','WITA',NULL,NULL,0,'71.02.13.2021'),
                    (7102132022,710213,'SEA MITRA','4','kelurahan','71','7102','710213','7102132022','WITA',NULL,NULL,0,'71.02.13.2022'),
                    (7102132023,710213,'SEA TUMPENGAN','4','kelurahan','71','7102','710213','7102132023','WITA',NULL,NULL,0,'71.02.13.2023'),
                    (7102132024,710213,'PINELENG SATU TIMUR','4','kelurahan','71','7102','710213','7102132024','WITA',NULL,NULL,0,'71.02.13.2024'),
                    (7102142001,710214,'KEMBES II','4','kelurahan','71','7102','710214','7102142001','WITA',NULL,NULL,0,'71.02.14.2001'),
                    (7102142002,710214,'KEMBES I','4','kelurahan','71','7102','710214','7102142002','WITA',NULL,NULL,0,'71.02.14.2002'),
                    (7102142003,710214,'TOUMBULUAN','4','kelurahan','71','7102','710214','7102142003','WITA',NULL,NULL,0,'71.02.14.2003'),
                    (7102142004,710214,'KOKA','4','kelurahan','71','7102','710214','7102142004','WITA',NULL,NULL,0,'71.02.14.2004'),
                    (7102142005,710214,'SULUAN','4','kelurahan','71','7102','710214','7102142005','WITA',NULL,NULL,0,'71.02.14.2005'),
                    (7102142006,710214,'KAMANGTA','4','kelurahan','71','7102','710214','7102142006','WITA',NULL,NULL,0,'71.02.14.2006'),
                    (7102142007,710214,'SAWANGAN','4','kelurahan','71','7102','710214','7102142007','WITA',NULL,NULL,0,'71.02.14.2007'),
                    (7102142008,710214,'RUMENGKOR','4','kelurahan','71','7102','710214','7102142008','WITA',NULL,NULL,0,'71.02.14.2008'),
                    (7102142009,710214,'TIKELA','4','kelurahan','71','7102','710214','7102142009','WITA',NULL,NULL,0,'71.02.14.2009'),
                    (7102142010,710214,'RUMENGKOR SATU','4','kelurahan','71','7102','710214','7102142010','WITA',NULL,NULL,0,'71.02.14.2010'),
                    (7102142011,710214,'RUMENGKOR DUA','4','kelurahan','71','7102','710214','7102142011','WITA',NULL,NULL,0,'71.02.14.2011'),
                    (7102152001,710215,'KUMU','4','kelurahan','71','7102','710215','7102152001','WITA',NULL,NULL,0,'71.02.15.2001'),
                    (7102152002,710215,'TELING','4','kelurahan','71','7102','710215','7102152002','WITA',NULL,NULL,0,'71.02.15.2002'),
                    (7102152003,710215,'POOPOH','4','kelurahan','71','7102','710215','7102152003','WITA',NULL,NULL,0,'71.02.15.2003'),
                    (7102152004,710215,'RANOWANGKO','4','kelurahan','71','7102','710215','7102152004','WITA',NULL,NULL,0,'71.02.15.2004'),
                    (7102152005,710215,'SENDUK','4','kelurahan','71','7102','710215','7102152005','WITA',NULL,NULL,0,'71.02.15.2005'),
                    (7102152007,710215,'PINASUNGKULAN','4','kelurahan','71','7102','710215','7102152007','WITA',NULL,NULL,0,'71.02.15.2007'),
                    (7102152009,710215,'MOKUPA','4','kelurahan','71','7102','710215','7102152009','WITA',NULL,NULL,0,'71.02.15.2009'),
                    (7102152010,710215,'SARANI MATANI','4','kelurahan','71','7102','710215','7102152010','WITA',NULL,NULL,0,'71.02.15.2010'),
                    (7102152011,710215,'BORGO','4','kelurahan','71','7102','710215','7102152011','WITA',NULL,NULL,0,'71.02.15.2011'),
                    (7102152012,710215,'TAMBALA','4','kelurahan','71','7102','710215','7102152012','WITA',NULL,NULL,0,'71.02.15.2012'),
                    (7102161001,710216,'SUMALANGKA','4','kelurahan','71','7102','710216','7102161001','WITA',NULL,NULL,0,'71.02.16.1001'),
                    (7102161002,710216,'SASARAN','4','kelurahan','71','7102','710216','7102161002','WITA',NULL,NULL,0,'71.02.16.1002'),
                    (7102161003,710216,'KAMPUNG JAWA','4','kelurahan','71','7102','710216','7102161003','WITA',NULL,NULL,0,'71.02.16.1003'),
                    (7102161004,710216,'WULAUAN','4','kelurahan','71','7102','710216','7102161004','WITA',NULL,NULL,0,'71.02.16.1004'),
                    (7102161005,710216,'MARAWAS','4','kelurahan','71','7102','710216','7102161005','WITA',NULL,NULL,0,'71.02.16.1005'),
                    (7102162006,710216,'TONSEA LAMA','4','kelurahan','71','7102','710216','7102162006','WITA',NULL,NULL,0,'71.02.16.2006'),
                    (7102162007,710216,'KEMBUAN','4','kelurahan','71','7102','710216','7102162007','WITA',NULL,NULL,0,'71.02.16.2007'),
                    (7102162008,710216,'KEMBUAN SATU','4','kelurahan','71','7102','710216','7102162008','WITA',NULL,NULL,0,'71.02.16.2008'),
                    (7102172001,710217,'PALAMBA','4','kelurahan','71','7102','710217','7102172001','WITA',NULL,NULL,0,'71.02.17.2001'),
                    (7102172002,710217,'ATEP','4','kelurahan','71','7102','710217','7102172002','WITA',NULL,NULL,0,'71.02.17.2002'),
                    (7102172003,710217,'MANEMBO','4','kelurahan','71','7102','710217','7102172003','WITA',NULL,NULL,0,'71.02.17.2003'),
                    (7102172004,710217,'TEMBOAN','4','kelurahan','71','7102','710217','7102172004','WITA',NULL,NULL,0,'71.02.17.2004'),
                    (7102172005,710217,'RUMBIA','4','kelurahan','71','7102','710217','7102172005','WITA',NULL,NULL,0,'71.02.17.2005'),
                    (7102172006,710217,'WINEBETAN','4','kelurahan','71','7102','710217','7102172006','WITA',NULL,NULL,0,'71.02.17.2006'),
                    (7102172007,710217,'KAAYURAN ATAS','4','kelurahan','71','7102','710217','7102172007','WITA',NULL,NULL,0,'71.02.17.2007'),
                    (7102172008,710217,'KAAYURAN BAWAH','4','kelurahan','71','7102','710217','7102172008','WITA',NULL,NULL,0,'71.02.17.2008'),
                    (7102172009,710217,'KAWATAK','4','kelurahan','71','7102','710217','7102172009','WITA',NULL,NULL,0,'71.02.17.2009'),
                    (7102172010,710217,'ATEP SATU','4','kelurahan','71','7102','710217','7102172010','WITA',NULL,NULL,0,'71.02.17.2010'),
                    (7102181001,710218,'URONGO','4','kelurahan','71','7102','710218','7102181001','WITA',NULL,NULL,0,'71.02.18.1001'),
                    (7102181002,710218,'TOUNSARU','4','kelurahan','71','7102','710218','7102181002','WITA',NULL,NULL,0,'71.02.18.1002'),
                    (7102181003,710218,'TATAARAN II','4','kelurahan','71','7102','710218','7102181003','WITA',NULL,NULL,0,'71.02.18.1003'),
                    (7102181004,710218,'TATAARAN I','4','kelurahan','71','7102','710218','7102181004','WITA',NULL,NULL,0,'71.02.18.1004'),
                    (7102181005,710218,'KOYA','4','kelurahan','71','7102','710218','7102181005','WITA',NULL,NULL,0,'71.02.18.1005'),
                    (7102181006,710218,'PALELOAN','4','kelurahan','71','7102','710218','7102181006','WITA',NULL,NULL,0,'71.02.18.1006'),
                    (7102181007,710218,'TATAARAN PATAR','4','kelurahan','71','7102','710218','7102181007','WITA',NULL,NULL,0,'71.02.18.1007'),
                    (7102181008,710218,'MAESA UNIMA','4','kelurahan','71','7102','710218','7102181008','WITA',NULL,NULL,0,'71.02.18.1008'),
                    (7102192001,710219,'WALANTAKAN','4','kelurahan','71','7102','710219','7102192001','WITA',NULL,NULL,0,'71.02.19.2001'),
                    (7102192002,710219,'TARAITAK','4','kelurahan','71','7102','710219','7102192002','WITA',NULL,NULL,0,'71.02.19.2002'),
                    (7102192003,710219,'KARUMENGA','4','kelurahan','71','7102','710219','7102192003','WITA',NULL,NULL,0,'71.02.19.2003'),
                    (7102192004,710219,'TORAGET','4','kelurahan','71','7102','710219','7102192004','WITA',NULL,NULL,0,'71.02.19.2004'),
                    (7102192005,710219,'TEMPANG','4','kelurahan','71','7102','710219','7102192005','WITA',NULL,NULL,0,'71.02.19.2005'),
                    (7102192006,710219,'TEMPANG DUA','4','kelurahan','71','7102','710219','7102192006','WITA',NULL,NULL,0,'71.02.19.2006'),
                    (7102192007,710219,'TEMPANG TIGA','4','kelurahan','71','7102','710219','7102192007','WITA',NULL,NULL,0,'71.02.19.2007'),
                    (7102192008,710219,'TARAITAK SATU','4','kelurahan','71','7102','710219','7102192008','WITA',NULL,NULL,0,'71.02.19.2008'),
                    (7102202001,710220,'WASIAN','4','kelurahan','71','7102','710220','7102202001','WITA',NULL,NULL,0,'71.02.20.2001'),
                    (7102202002,710220,'PANASEN','4','kelurahan','71','7102','710220','7102202002','WITA',NULL,NULL,0,'71.02.20.2002'),
                    (7102202003,710220,'TOUNTIMOMOR','4','kelurahan','71','7102','710220','7102202003','WITA',NULL,NULL,0,'71.02.20.2003'),
                    (7102202004,710220,'TOTOLAN','4','kelurahan','71','7102','710220','7102202004','WITA',NULL,NULL,0,'71.02.20.2004'),
                    (7102202005,710220,'PASSO','4','kelurahan','71','7102','710220','7102202005','WITA',NULL,NULL,0,'71.02.20.2005'),
                    (7102202006,710220,'KALAWIRAN','4','kelurahan','71','7102','710220','7102202006','WITA',NULL,NULL,0,'71.02.20.2006'),
                    (7102202007,710220,'TOULIANG','4','kelurahan','71','7102','710220','7102202007','WITA',NULL,NULL,0,'71.02.20.2007'),
                    (7102202008,710220,'SIMBEL','4','kelurahan','71','7102','710220','7102202008','WITA',NULL,NULL,0,'71.02.20.2008'),
                    (7102202009,710220,'WAILANG','4','kelurahan','71','7102','710220','7102202009','WITA',NULL,NULL,0,'71.02.20.2009'),
                    (7102202010,710220,'BUKIT TINGGI','4','kelurahan','71','7102','710220','7102202010','WITA',NULL,NULL,0,'71.02.20.2010'),
                    (7102211001,710221,'TALIKURAN','4','kelurahan','71','7102','710221','7102211001','WITA',NULL,NULL,0,'71.02.21.1001'),
                    (7102211002,710221,'TALIKURAN UTARA','4','kelurahan','71','7102','710221','7102211002','WITA',NULL,NULL,0,'71.02.21.1002'),
                    (7102211003,710221,'TALIKURAN BARAT','4','kelurahan','71','7102','710221','7102211003','WITA',NULL,NULL,0,'71.02.21.1003'),
                    (7102211004,710221,'UNER','4','kelurahan','71','7102','710221','7102211004','WITA',NULL,NULL,0,'71.02.21.1004'),
                    (7102212005,710221,'KIAWA SATU','4','kelurahan','71','7102','710221','7102212005','WITA',NULL,NULL,0,'71.02.21.2005'),
                    (7102212006,710221,'KIAWA SATU UTARA','4','kelurahan','71','7102','710221','7102212006','WITA',NULL,NULL,0,'71.02.21.2006'),
                    (7102212007,710221,'KIAWA SATU BARAT','4','kelurahan','71','7102','710221','7102212007','WITA',NULL,NULL,0,'71.02.21.2007'),
                    (7102212008,710221,'KIAWA DUA','4','kelurahan','71','7102','710221','7102212008','WITA',NULL,NULL,0,'71.02.21.2008'),
                    (7102212009,710221,'KIAWA DUA TIMUR','4','kelurahan','71','7102','710221','7102212009','WITA',NULL,NULL,0,'71.02.21.2009'),
                    (7102212010,710221,'KIAWA DUA BARAT','4','kelurahan','71','7102','710221','7102212010','WITA',NULL,NULL,0,'71.02.21.2010'),
                    (7102222001,710222,'KAYUUWI','4','kelurahan','71','7102','710222','7102222001','WITA',NULL,NULL,0,'71.02.22.2001'),
                    (7102222002,710222,'KAYUUWI SATU','4','kelurahan','71','7102','710222','7102222002','WITA',NULL,NULL,0,'71.02.22.2002'),
                    (7102222003,710222,'KANONANG SATU','4','kelurahan','71','7102','710222','7102222003','WITA',NULL,NULL,0,'71.02.22.2003'),
                    (7102222004,710222,'KANONANG DUA','4','kelurahan','71','7102','710222','7102222004','WITA',NULL,NULL,0,'71.02.22.2004'),
                    (7102222005,710222,'KANONANG EMPAT','4','kelurahan','71','7102','710222','7102222005','WITA',NULL,NULL,0,'71.02.22.2005'),
                    (7102222006,710222,'KANONANG LIMA','4','kelurahan','71','7102','710222','7102222006','WITA',NULL,NULL,0,'71.02.22.2006'),
                    (7102222007,710222,'TOMBASIAN ATAS','4','kelurahan','71','7102','710222','7102222007','WITA',NULL,NULL,0,'71.02.22.2007'),
                    (7102222008,710222,'TOMBASIAN ATAS SATU','4','kelurahan','71','7102','710222','7102222008','WITA',NULL,NULL,0,'71.02.22.2008'),
                    (7102222009,710222,'TOMBASIAN BAWAH','4','kelurahan','71','7102','710222','7102222009','WITA',NULL,NULL,0,'71.02.22.2009'),
                    (7102222010,710222,'RANOLAMBOT','4','kelurahan','71','7102','710222','7102222010','WITA',NULL,NULL,0,'71.02.22.2010'),
                    (7102232001,710223,'KALASEY SATU','4','kelurahan','71','7102','710223','7102232001','WITA',NULL,NULL,0,'71.02.23.2001'),
                    (7102232002,710223,'KALASEY DUA','4','kelurahan','71','7102','710223','7102232002','WITA',NULL,NULL,0,'71.02.23.2002'),
                    (7102232003,710223,'TATELI','4','kelurahan','71','7102','710223','7102232003','WITA',NULL,NULL,0,'71.02.23.2003'),
                    (7102232004,710223,'TATELI WERU','4','kelurahan','71','7102','710223','7102232004','WITA',NULL,NULL,0,'71.02.23.2004'),
                    (7102232005,710223,'TATELI SATU','4','kelurahan','71','7102','710223','7102232005','WITA',NULL,NULL,0,'71.02.23.2005'),
                    (7102232006,710223,'TATELI DUA','4','kelurahan','71','7102','710223','7102232006','WITA',NULL,NULL,0,'71.02.23.2006'),
                    (7102232007,710223,'TATELI TIGA','4','kelurahan','71','7102','710223','7102232007','WITA',NULL,NULL,0,'71.02.23.2007'),
                    (7102232008,710223,'KOHA','4','kelurahan','71','7102','710223','7102232008','WITA',NULL,NULL,0,'71.02.23.2008'),
                    (7102232009,710223,'KOHA BARAT','4','kelurahan','71','7102','710223','7102232009','WITA',NULL,NULL,0,'71.02.23.2009'),
                    (7102232010,710223,'KOHA TIMUR','4','kelurahan','71','7102','710223','7102232010','WITA',NULL,NULL,0,'71.02.23.2010'),
                    (7102232011,710223,'KOHA SELATAN','4','kelurahan','71','7102','710223','7102232011','WITA',NULL,NULL,0,'71.02.23.2011'),
                    (7102232012,710223,'AGOTEY','4','kelurahan','71','7102','710223','7102232012','WITA',NULL,NULL,0,'71.02.23.2012'),
                    (7102242001,710224,'LEMOH','4','kelurahan','71','7102','710224','7102242001','WITA',NULL,NULL,0,'71.02.24.2001'),
                    (7102242002,710224,'LEMOH BARAT','4','kelurahan','71','7102','710224','7102242002','WITA',NULL,NULL,0,'71.02.24.2002'),
                    (7102242003,710224,'LEMOH TIMUR','4','kelurahan','71','7102','710224','7102242003','WITA',NULL,NULL,0,'71.02.24.2003'),
                    (7102242004,710224,'LEMOH UNER','4','kelurahan','71','7102','710224','7102242004','WITA',NULL,NULL,0,'71.02.24.2004'),
                    (7102242005,710224,'LOLAH','4','kelurahan','71','7102','710224','7102242005','WITA',NULL,NULL,0,'71.02.24.2005'),
                    (7102242006,710224,'LOLAH SATU','4','kelurahan','71','7102','710224','7102242006','WITA',NULL,NULL,0,'71.02.24.2006'),
                    (7102242007,710224,'LOLAH DUA','4','kelurahan','71','7102','710224','7102242007','WITA',NULL,NULL,0,'71.02.24.2007'),
                    (7102242008,710224,'LOLAH TIGA','4','kelurahan','71','7102','710224','7102242008','WITA',NULL,NULL,0,'71.02.24.2008'),
                    (7102242009,710224,'RANOTONGKOR','4','kelurahan','71','7102','710224','7102242009','WITA',NULL,NULL,0,'71.02.24.2009'),
                    (7102242010,710224,'RANOTONGKOR TIMUR','4','kelurahan','71','7102','710224','7102242010','WITA',NULL,NULL,0,'71.02.24.2010'),
                    (7102252001,710225,'PINAESAAN','4','kelurahan','71','7102','710225','7102252001','WITA',NULL,NULL,0,'71.02.25.2001'),
                    (7102252002,710225,'TOMPASO DUA','4','kelurahan','71','7102','710225','7102252002','WITA',NULL,NULL,0,'71.02.25.2002'),
                    (7102252003,710225,'TOMPASO II UTARA','4','kelurahan','71','7102','710225','7102252003','WITA',NULL,NULL,0,'71.02.25.2003'),
                    (7102252004,710225,'PINABETENGAN UTARA','4','kelurahan','71','7102','710225','7102252004','WITA',NULL,NULL,0,'71.02.25.2004'),
                    (7102252005,710225,'PINABETENGAN','4','kelurahan','71','7102','710225','7102252005','WITA',NULL,NULL,0,'71.02.25.2005'),
                    (7102252006,710225,'PINABETENGAN SELATAN','4','kelurahan','71','7102','710225','7102252006','WITA',NULL,NULL,0,'71.02.25.2006'),
                    (7102252007,710225,'TONSEWER','4','kelurahan','71','7102','710225','7102252007','WITA',NULL,NULL,0,'71.02.25.2007'),
                    (7102252008,710225,'TONSEWER SELATAN','4','kelurahan','71','7102','710225','7102252008','WITA',NULL,NULL,0,'71.02.25.2008'),
                    (7102252009,710225,'TOUURE','4','kelurahan','71','7102','710225','7102252009','WITA',NULL,NULL,0,'71.02.25.2009'),
                    (7102252010,710225,'TOUURE DUA','4','kelurahan','71','7102','710225','7102252010','WITA',NULL,NULL,0,'71.02.25.2010'),
                    (7103082001,710308,'KALASUGE','4','kelurahan','71','7103','710308','7103082001','WITA',NULL,NULL,0,'71.03.08.2001'),
                    (7103082002,710308,'BAHU','4','kelurahan','71','7103','710308','7103082002','WITA',NULL,NULL,0,'71.03.08.2002'),
                    (7103082003,710308,'MALA','4','kelurahan','71','7103','710308','7103082003','WITA',NULL,NULL,0,'71.03.08.2003'),
                    (7103082004,710308,'KALEKUBE','4','kelurahan','71','7103','710308','7103082004','WITA',NULL,NULL,0,'71.03.08.2004'),
                    (7103082005,710308,'NAHA','4','kelurahan','71','7103','710308','7103082005','WITA',NULL,NULL,0,'71.03.08.2005'),
                    (7103082006,710308,'BEHA','4','kelurahan','71','7103','710308','7103082006','WITA',NULL,NULL,0,'71.03.08.2006'),
                    (7103082007,710308,'UTAURANO','4','kelurahan','71','7103','710308','7103082007','WITA',NULL,NULL,0,'71.03.08.2007'),
                    (7103082008,710308,'LENGANENG','4','kelurahan','71','7103','710308','7103082008','WITA',NULL,NULL,0,'71.03.08.2008'),
                    (7103082009,710308,'TAROLANG','4','kelurahan','71','7103','710308','7103082009','WITA',NULL,NULL,0,'71.03.08.2009'),
                    (7103082010,710308,'TOLA','4','kelurahan','71','7103','710308','7103082010','WITA',NULL,NULL,0,'71.03.08.2010'),
                    (7103082011,710308,'KALURAE','4','kelurahan','71','7103','710308','7103082011','WITA',NULL,NULL,0,'71.03.08.2011'),
                    (7103082012,710308,'BENGKETANG','4','kelurahan','71','7103','710308','7103082012','WITA',NULL,NULL,0,'71.03.08.2012'),
                    (7103082013,710308,'PETTA','4','kelurahan','71','7103','710308','7103082013','WITA',NULL,NULL,0,'71.03.08.2013'),
                    (7103082014,710308,'BOWONGKULU','4','kelurahan','71','7103','710308','7103082014','WITA',NULL,NULL,0,'71.03.08.2014'),
                    (7103082016,710308,'PUSUNGE','4','kelurahan','71','7103','710308','7103082016','WITA',NULL,NULL,0,'71.03.08.2016'),
                    (7103082017,710308,'MOADE','4','kelurahan','71','7103','710308','7103082017','WITA',NULL,NULL,0,'71.03.08.2017'),
                    (7103082019,710308,'RAKU','4','kelurahan','71','7103','710308','7103082019','WITA',NULL,NULL,0,'71.03.08.2019'),
                    (7103082020,710308,'PETTA TIMUR','4','kelurahan','71','7103','710308','7103082020','WITA',NULL,NULL,0,'71.03.08.2020'),
                    (7103082021,710308,'PETTA BARAT','4','kelurahan','71','7103','710308','7103082021','WITA',NULL,NULL,0,'71.03.08.2021'),
                    (7103082022,710308,'PETTA SELATAN','4','kelurahan','71','7103','710308','7103082022','WITA',NULL,NULL,0,'71.03.08.2022'),
                    (7103082023,710308,'LIKUANG','4','kelurahan','71','7103','710308','7103082023','WITA',NULL,NULL,0,'71.03.08.2023'),
                    (7103082024,710308,'KALEKUBE I','4','kelurahan','71','7103','710308','7103082024','WITA',NULL,NULL,0,'71.03.08.2024'),
                    (7103082025,710308,'BOWONGKULU I','4','kelurahan','71','7103','710308','7103082025','WITA',NULL,NULL,0,'71.03.08.2025'),
                    (7103082026,710308,'NAHA I','4','kelurahan','71','7103','710308','7103082026','WITA',NULL,NULL,0,'71.03.08.2026'),
                    (7103092001,710309,'NANEDAKELE','4','kelurahan','71','7103','710309','7103092001','WITA',NULL,NULL,0,'71.03.09.2001'),
                    (7103092002,710309,'NUSA','4','kelurahan','71','7103','710309','7103092002','WITA',NULL,NULL,0,'71.03.09.2002'),
                    (7103092003,710309,'BUKIDE','4','kelurahan','71','7103','710309','7103092003','WITA',NULL,NULL,0,'71.03.09.2003'),
                    (7103092004,710309,'BUKIDE TIMUR','4','kelurahan','71','7103','710309','7103092004','WITA',NULL,NULL,0,'71.03.09.2004'),
                    (7103092005,710309,'NANUSA','4','kelurahan','71','7103','710309','7103092005','WITA',NULL,NULL,0,'71.03.09.2005'),
                    (7103102001,710310,'KALUWATU','4','kelurahan','71','7103','710310','7103102001','WITA',NULL,NULL,0,'71.03.10.2001'),
                    (7103102002,710310,'LAINE','4','kelurahan','71','7103','710310','7103102002','WITA',NULL,NULL,0,'71.03.10.2002'),
                    (7103102003,710310,'LAPANGO','4','kelurahan','71','7103','710310','7103102003','WITA',NULL,NULL,0,'71.03.10.2003'),
                    (7103102004,710310,'SOWAENG','4','kelurahan','71','7103','710310','7103102004','WITA',NULL,NULL,0,'71.03.10.2004'),
                    (7103102005,710310,'NGALIPAENG I','4','kelurahan','71','7103','710310','7103102005','WITA',NULL,NULL,0,'71.03.10.2005'),
                    (7103102006,710310,'NGALIPAENG II','4','kelurahan','71','7103','710310','7103102006','WITA',NULL,NULL,0,'71.03.10.2006'),
                    (7103102007,710310,'BATUNDERANG','4','kelurahan','71','7103','710310','7103102007','WITA',NULL,NULL,0,'71.03.10.2007'),
                    (7103102008,710310,'BEBALANG','4','kelurahan','71','7103','710310','7103102008','WITA',NULL,NULL,0,'71.03.10.2008'),
                    (7103102009,710310,'MAWIRA','4','kelurahan','71','7103','710310','7103102009','WITA',NULL,NULL,0,'71.03.10.2009'),
                    (7103102010,710310,'PINDANG','4','kelurahan','71','7103','710310','7103102010','WITA',NULL,NULL,0,'71.03.10.2010'),
                    (7103102011,710310,'LAPEPAHE','4','kelurahan','71','7103','710310','7103102011','WITA',NULL,NULL,0,'71.03.10.2011'),
                    (7103102012,710310,'LEHIMI TARIANG','4','kelurahan','71','7103','710310','7103102012','WITA',NULL,NULL,0,'71.03.10.2012'),
                    (7103102013,710310,'LAPANGO I','4','kelurahan','71','7103','710310','7103102013','WITA',NULL,NULL,0,'71.03.10.2013'),
                    (7103112001,710311,'KALAMA','4','kelurahan','71','7103','710311','7103112001','WITA',NULL,NULL,0,'71.03.11.2001'),
                    (7103112002,710311,'KAHAKITANG','4','kelurahan','71','7103','710311','7103112002','WITA',NULL,NULL,0,'71.03.11.2002'),
                    (7103112003,710311,'MAHENGETANG','4','kelurahan','71','7103','710311','7103112003','WITA',NULL,NULL,0,'71.03.11.2003'),
                    (7103112004,710311,'PARA','4','kelurahan','71','7103','710311','7103112004','WITA',NULL,NULL,0,'71.03.11.2004'),
                    (7103112005,710311,'DALAKO BEMBANEHE','4','kelurahan','71','7103','710311','7103112005','WITA',NULL,NULL,0,'71.03.11.2005'),
                    (7103112006,710311,'TALEKO BATUSAIKI','4','kelurahan','71','7103','710311','7103112006','WITA',NULL,NULL,0,'71.03.11.2006'),
                    (7103112007,710311,'PARA I','4','kelurahan','71','7103','710311','7103112007','WITA',NULL,NULL,0,'71.03.11.2007'),
                    (7103122001,710312,'NAGHA I','4','kelurahan','71','7103','710312','7103122001','WITA',NULL,NULL,0,'71.03.12.2001'),
                    (7103122002,710312,'NAGHA II','4','kelurahan','71','7103','710312','7103122002','WITA',NULL,NULL,0,'71.03.12.2002'),
                    (7103122003,710312,'POKOL','4','kelurahan','71','7103','710312','7103122003','WITA',NULL,NULL,0,'71.03.12.2003'),
                    (7103122004,710312,'BALANE','4','kelurahan','71','7103','710312','7103122004','WITA',NULL,NULL,0,'71.03.12.2004'),
                    (7103122005,710312,'BINALA','4','kelurahan','71','7103','710312','7103122005','WITA',NULL,NULL,0,'71.03.12.2005'),
                    (7103122006,710312,'ULUNG PELIANG','4','kelurahan','71','7103','710312','7103122006','WITA',NULL,NULL,0,'71.03.12.2006'),
                    (7103122007,710312,'MENGGAWA','4','kelurahan','71','7103','710312','7103122007','WITA',NULL,NULL,0,'71.03.12.2007'),
                    (7103122008,710312,'KALINDA','4','kelurahan','71','7103','710312','7103122008','WITA',NULL,NULL,0,'71.03.12.2008'),
                    (7103122009,710312,'B E B U','4','kelurahan','71','7103','710312','7103122009','WITA',NULL,NULL,0,'71.03.12.2009'),
                    (7103122010,710312,'MAKALEKUHE','4','kelurahan','71','7103','710312','7103122010','WITA',NULL,NULL,0,'71.03.12.2010'),
                    (7103122011,710312,'PANANARU','4','kelurahan','71','7103','710312','7103122011','WITA',NULL,NULL,0,'71.03.12.2011'),
                    (7103122012,710312,'D A G H O','4','kelurahan','71','7103','710312','7103122012','WITA',NULL,NULL,0,'71.03.12.2012'),
                    (7103122013,710312,'MAHUMU','4','kelurahan','71','7103','710312','7103122013','WITA',NULL,NULL,0,'71.03.12.2013'),
                    (7103122014,710312,'LELIPANG','4','kelurahan','71','7103','710312','7103122014','WITA',NULL,NULL,0,'71.03.12.2014'),
                    (7103122015,710312,'MENGGAWA II','4','kelurahan','71','7103','710312','7103122015','WITA',NULL,NULL,0,'71.03.12.2015'),
                    (7103122016,710312,'KALAMA DARAT','4','kelurahan','71','7103','710312','7103122016','WITA',NULL,NULL,0,'71.03.12.2016'),
                    (7103122017,710312,'KALINDA I','4','kelurahan','71','7103','710312','7103122017','WITA',NULL,NULL,0,'71.03.12.2017'),
                    (7103122018,710312,'MAHUMU I','4','kelurahan','71','7103','710312','7103122018','WITA',NULL,NULL,0,'71.03.12.2018'),
                    (7103122019,710312,'MAHUMU II','4','kelurahan','71','7103','710312','7103122019','WITA',NULL,NULL,0,'71.03.12.2019'),
                    (7103122020,710312,'HESANG','4','kelurahan','71','7103','710312','7103122020','WITA',NULL,NULL,0,'71.03.12.2020'),
                    (7103132001,710313,'TAWOALI','4','kelurahan','71','7103','710313','7103132001','WITA',NULL,NULL,0,'71.03.13.2001'),
                    (7103132002,710313,'BARANGKA','4','kelurahan','71','7103','710313','7103132002','WITA',NULL,NULL,0,'71.03.13.2002'),
                    (7103132003,710313,'NAHEPESE','4','kelurahan','71','7103','710313','7103132003','WITA',NULL,NULL,0,'71.03.13.2003'),
                    (7103132004,710313,'MANUMPITAENG','4','kelurahan','71','7103','710313','7103132004','WITA',NULL,NULL,0,'71.03.13.2004'),
                    (7103132005,710313,'TALOARANE','4','kelurahan','71','7103','710313','7103132005','WITA',NULL,NULL,0,'71.03.13.2005'),
                    (7103132006,710313,'MALA','4','kelurahan','71','7103','710313','7103132006','WITA',NULL,NULL,0,'71.03.13.2006'),
                    (7103132007,710313,'KARATUNG I','4','kelurahan','71','7103','710313','7103132007','WITA',NULL,NULL,0,'71.03.13.2007'),
                    (7103132008,710313,'KARATUNG II','4','kelurahan','71','7103','710313','7103132008','WITA',NULL,NULL,0,'71.03.13.2008'),
                    (7103132009,710313,'KAUHIS','4','kelurahan','71','7103','710313','7103132009','WITA',NULL,NULL,0,'71.03.13.2009'),
                    (7103132010,710313,'SESIWUNG','4','kelurahan','71','7103','710313','7103132010','WITA',NULL,NULL,0,'71.03.13.2010'),
                    (7103132011,710313,'LEBO','4','kelurahan','71','7103','710313','7103132011','WITA',NULL,NULL,0,'71.03.13.2011'),
                    (7103132012,710313,'BARANGKALANG','4','kelurahan','71','7103','710313','7103132012','WITA',NULL,NULL,0,'71.03.13.2012'),
                    (7103132013,710313,'BELENGANG','4','kelurahan','71','7103','710313','7103132013','WITA',NULL,NULL,0,'71.03.13.2013'),
                    (7103132014,710313,'BAKALAENG','4','kelurahan','71','7103','710313','7103132014','WITA',NULL,NULL,0,'71.03.13.2014'),
                    (7103132015,710313,'HIUNG','4','kelurahan','71','7103','710313','7103132015','WITA',NULL,NULL,0,'71.03.13.2015'),
                    (7103132016,710313,'PINEBENTENGANG','4','kelurahan','71','7103','710313','7103132016','WITA',NULL,NULL,0,'71.03.13.2016'),
                    (7103132017,710313,'TALOARANE I','4','kelurahan','71','7103','710313','7103132017','WITA',NULL,NULL,0,'71.03.13.2017'),
                    (7103132018,710313,'BENGKA','4','kelurahan','71','7103','710313','7103132018','WITA',NULL,NULL,0,'71.03.13.2018'),
                    (7103142001,710314,'BOWONGKALI','4','kelurahan','71','7103','710314','7103142001','WITA',NULL,NULL,0,'71.03.14.2001'),
                    (7103142002,710314,'KULUR I','4','kelurahan','71','7103','710314','7103142002','WITA',NULL,NULL,0,'71.03.14.2002'),
                    (7103142003,710314,'KULUR II','4','kelurahan','71','7103','710314','7103142003','WITA',NULL,NULL,0,'71.03.14.2003'),
                    (7103142004,710314,'BIRA','4','kelurahan','71','7103','710314','7103142004','WITA',NULL,NULL,0,'71.03.14.2004'),
                    (7103142005,710314,'KUMA','4','kelurahan','71','7103','710314','7103142005','WITA',NULL,NULL,0,'71.03.14.2005'),
                    (7103142006,710314,'BUNGALAWANG','4','kelurahan','71','7103','710314','7103142006','WITA',NULL,NULL,0,'71.03.14.2006'),
                    (7103142007,710314,'MIULU','4','kelurahan','71','7103','710314','7103142007','WITA',NULL,NULL,0,'71.03.14.2007'),
                    (7103142008,710314,'GUNUNG','4','kelurahan','71','7103','710314','7103142008','WITA',NULL,NULL,0,'71.03.14.2008'),
                    (7103142009,710314,'TALENGEN','4','kelurahan','71','7103','710314','7103142009','WITA',NULL,NULL,0,'71.03.14.2009'),
                    (7103142010,710314,'BIRU','4','kelurahan','71','7103','710314','7103142010','WITA',NULL,NULL,0,'71.03.14.2010'),
                    (7103142011,710314,'TARIANG BARU','4','kelurahan','71','7103','710314','7103142011','WITA',NULL,NULL,0,'71.03.14.2011'),
                    (7103142012,710314,'SENSONG','4','kelurahan','71','7103','710314','7103142012','WITA',NULL,NULL,0,'71.03.14.2012'),
                    (7103142013,710314,'RENDINGAN','4','kelurahan','71','7103','710314','7103142013','WITA',NULL,NULL,0,'71.03.14.2013'),
                    (7103142014,710314,'PALAHANAENG','4','kelurahan','71','7103','710314','7103142014','WITA',NULL,NULL,0,'71.03.14.2014'),
                    (7103142015,710314,'TIMBELANG','4','kelurahan','71','7103','710314','7103142015','WITA',NULL,NULL,0,'71.03.14.2015'),
                    (7103142016,710314,'PELELANGEN','4','kelurahan','71','7103','710314','7103142016','WITA',NULL,NULL,0,'71.03.14.2016'),
                    (7103142017,710314,'MALUENG','4','kelurahan','71','7103','710314','7103142017','WITA',NULL,NULL,0,'71.03.14.2017'),
                    (7103142018,710314,'KUMA I','4','kelurahan','71','7103','710314','7103142018','WITA',NULL,NULL,0,'71.03.14.2018'),
                    (7103152001,710315,'SIMUENG','4','kelurahan','71','7103','710315','7103152001','WITA',NULL,NULL,0,'71.03.15.2001'),
                    (7103152002,710315,'BENTUNG','4','kelurahan','71','7103','710315','7103152002','WITA',NULL,NULL,0,'71.03.15.2002'),
                    (7103152003,710315,'LESABE','4','kelurahan','71','7103','710315','7103152003','WITA',NULL,NULL,0,'71.03.15.2003'),
                    (7103152004,710315,'MALAMMENGGU','4','kelurahan','71','7103','710315','7103152004','WITA',NULL,NULL,0,'71.03.15.2004'),
                    (7103152005,710315,'PALARENG','4','kelurahan','71','7103','710315','7103152005','WITA',NULL,NULL,0,'71.03.15.2005'),
                    (7103152007,710315,'BINEBAS','4','kelurahan','71','7103','710315','7103152007','WITA',NULL,NULL,0,'71.03.15.2007'),
                    (7103152008,710315,'MANDOI','4','kelurahan','71','7103','710315','7103152008','WITA',NULL,NULL,0,'71.03.15.2008'),
                    (7103152015,710315,'BATUWINGKUNG','4','kelurahan','71','7103','710315','7103152015','WITA',NULL,NULL,0,'71.03.15.2015'),
                    (7103152016,710315,'BIRAHI','4','kelurahan','71','7103','710315','7103152016','WITA',NULL,NULL,0,'71.03.15.2016'),
                    (7103152017,710315,'LAOTONGAN','4','kelurahan','71','7103','710315','7103152017','WITA',NULL,NULL,0,'71.03.15.2017'),
                    (7103152018,710315,'BUKIDE','4','kelurahan','71','7103','710315','7103152018','WITA',NULL,NULL,0,'71.03.15.2018'),
                    (7103152019,710315,'KALAGHENG','4','kelurahan','71','7103','710315','7103152019','WITA',NULL,NULL,0,'71.03.15.2019'),
                    (7103152020,710315,'LESABE I','4','kelurahan','71','7103','710315','7103152020','WITA',NULL,NULL,0,'71.03.15.2020'),
                    (7103152021,710315,'BULO','4','kelurahan','71','7103','710315','7103152021','WITA',NULL,NULL,0,'71.03.15.2021'),
                    (7103162001,710316,'KENDAHE I','4','kelurahan','71','7103','710316','7103162001','WITA',NULL,NULL,0,'71.03.16.2001'),
                    (7103162002,710316,'KENDAHE II','4','kelurahan','71','7103','710316','7103162002','WITA',NULL,NULL,0,'71.03.16.2002'),
                    (7103162003,710316,'TALAWID','4','kelurahan','71','7103','710316','7103162003','WITA',NULL,NULL,0,'71.03.16.2003'),
                    (7103162004,710316,'TARIANG LAMA','4','kelurahan','71','7103','710316','7103162004','WITA',NULL,NULL,0,'71.03.16.2004'),
                    (7103162005,710316,'PEMPALARAENG','4','kelurahan','71','7103','710316','7103162005','WITA',NULL,NULL,0,'71.03.16.2005'),
                    (7103162006,710316,'MOHONG SAWANG','4','kelurahan','71','7103','710316','7103162006','WITA',NULL,NULL,0,'71.03.16.2006'),
                    (7103162007,710316,'LIPANG','4','kelurahan','71','7103','710316','7103162007','WITA',NULL,NULL,0,'71.03.16.2007'),
                    (7103162008,710316,'KAWALUSO','4','kelurahan','71','7103','710316','7103162008','WITA',NULL,NULL,0,'71.03.16.2008'),
                    (7103171006,710317,'SAWANG BENDAR','4','kelurahan','71','7103','710317','7103171006','WITA',NULL,NULL,0,'71.03.17.1006'),
                    (7103171007,710317,'SOATALOARA I','4','kelurahan','71','7103','710317','7103171007','WITA',NULL,NULL,0,'71.03.17.1007'),
                    (7103171008,710317,'APENGSEMBEKA','4','kelurahan','71','7103','710317','7103171008','WITA',NULL,NULL,0,'71.03.17.1008'),
                    (7103171009,710317,'MAHENA','4','kelurahan','71','7103','710317','7103171009','WITA',NULL,NULL,0,'71.03.17.1009'),
                    (7103171015,710317,'BUNGALAWANG','4','kelurahan','71','7103','710317','7103171015','WITA',NULL,NULL,0,'71.03.17.1015'),
                    (7103171016,710317,'SANTIAGO','4','kelurahan','71','7103','710317','7103171016','WITA',NULL,NULL,0,'71.03.17.1016'),
                    (7103171017,710317,'MANENTE','4','kelurahan','71','7103','710317','7103171017','WITA',NULL,NULL,0,'71.03.17.1017'),
                    (7103171018,710317,'SOATALOARA II','4','kelurahan','71','7103','710317','7103171018','WITA',NULL,NULL,0,'71.03.17.1018'),
                    (7103192001,710319,'HANGKE','4','kelurahan','71','7103','710319','7103192001','WITA',NULL,NULL,0,'71.03.19.2001'),
                    (7103192002,710319,'SALURANG','4','kelurahan','71','7103','710319','7103192002','WITA',NULL,NULL,0,'71.03.19.2002'),
                    (7103192003,710319,'TAMBUNG','4','kelurahan','71','7103','710319','7103192003','WITA',NULL,NULL,0,'71.03.19.2003'),
                    (7103192004,710319,'BEENG','4','kelurahan','71','7103','710319','7103192004','WITA',NULL,NULL,0,'71.03.19.2004'),
                    (7103192005,710319,'LEHUPU','4','kelurahan','71','7103','710319','7103192005','WITA',NULL,NULL,0,'71.03.19.2005'),
                    (7103192006,710319,'BOWONE','4','kelurahan','71','7103','710319','7103192006','WITA',NULL,NULL,0,'71.03.19.2006'),
                    (7103192007,710319,'BEENG LAUT','4','kelurahan','71','7103','710319','7103192007','WITA',NULL,NULL,0,'71.03.19.2007'),
                    (7103192008,710319,'TENDA','4','kelurahan','71','7103','710319','7103192008','WITA',NULL,NULL,0,'71.03.19.2008'),
                    (7103192009,710319,'AHA PATUNG','4','kelurahan','71','7103','710319','7103192009','WITA',NULL,NULL,0,'71.03.19.2009'),
                    (7103202001,710320,'PINTARENG','4','kelurahan','71','7103','710320','7103202001','WITA',NULL,NULL,0,'71.03.20.2001'),
                    (7103202002,710320,'BASAUH','4','kelurahan','71','7103','710320','7103202002','WITA',NULL,NULL,0,'71.03.20.2002'),
                    (7103202003,710320,'TUMALEDE','4','kelurahan','71','7103','710320','7103202003','WITA',NULL,NULL,0,'71.03.20.2003'),
                    (7103202004,710320,'SAMPAKANG','4','kelurahan','71','7103','710320','7103202004','WITA',NULL,NULL,0,'71.03.20.2004'),
                    (7103202005,710320,'DALOKAWENG','4','kelurahan','71','7103','710320','7103202005','WITA',NULL,NULL,0,'71.03.20.2005'),
                    (7103202006,710320,'MALISADE','4','kelurahan','71','7103','710320','7103202006','WITA',NULL,NULL,0,'71.03.20.2006'),
                    (7103231001,710323,'PANANEKENG','4','kelurahan','71','7103','710323','7103231001','WITA',NULL,NULL,0,'71.03.23.1001'),
                    (7103231002,710323,'ANGGES','4','kelurahan','71','7103','710323','7103231002','WITA',NULL,NULL,0,'71.03.23.1002'),
                    (7103231003,710323,'KOLONGAN MITUNG','4','kelurahan','71','7103','710323','7103231003','WITA',NULL,NULL,0,'71.03.23.1003'),
                    (7103231004,710323,'KOLONGAN BEHA','4','kelurahan','71','7103','710323','7103231004','WITA',NULL,NULL,0,'71.03.23.1004'),
                    (7103231005,710323,'KOLONGAN BEHA BARU','4','kelurahan','71','7103','710323','7103231005','WITA',NULL,NULL,0,'71.03.23.1005'),
                    (7103231006,710323,'KOLONGAN AKEMBAWI','4','kelurahan','71','7103','710323','7103231006','WITA',NULL,NULL,0,'71.03.23.1006'),
                    (7103241001,710324,'LESA','4','kelurahan','71','7103','710324','7103241001','WITA',NULL,NULL,0,'71.03.24.1001'),
                    (7103241002,710324,'ENENGPAHEMBANG','4','kelurahan','71','7103','710324','7103241002','WITA',NULL,NULL,0,'71.03.24.1002'),
                    (7103241003,710324,'TAPUANG','4','kelurahan','71','7103','710324','7103241003','WITA',NULL,NULL,0,'71.03.24.1003'),
                    (7103241004,710324,'TIDORE','4','kelurahan','71','7103','710324','7103241004','WITA',NULL,NULL,0,'71.03.24.1004'),
                    (7103241005,710324,'TONA I','4','kelurahan','71','7103','710324','7103241005','WITA',NULL,NULL,0,'71.03.24.1005'),
                    (7103241006,710324,'TONA II','4','kelurahan','71','7103','710324','7103241006','WITA',NULL,NULL,0,'71.03.24.1006'),
                    (7103241007,710324,'DUMUHUNG','4','kelurahan','71','7103','710324','7103241007','WITA',NULL,NULL,0,'71.03.24.1007'),
                    (7103241008,710324,'BATULEWEHE','4','kelurahan','71','7103','710324','7103241008','WITA',NULL,NULL,0,'71.03.24.1008'),
                    (7103252001,710325,'MARORE','4','kelurahan','71','7103','710325','7103252001','WITA',NULL,NULL,0,'71.03.25.2001'),
                    (7103252002,710325,'KAWIO','4','kelurahan','71','7103','710325','7103252002','WITA',NULL,NULL,0,'71.03.25.2002'),
                    (7103252003,710325,'MATUTUANG','4','kelurahan','71','7103','710325','7103252003','WITA',NULL,NULL,0,'71.03.25.2003'),
                    (7104011005,710401,'LIRUNG','4','kelurahan','71','7104','710401','7104011005','WITA',NULL,NULL,0,'71.04.01.1005'),
                    (7104011011,710401,'LIRUNG SATU','4','kelurahan','71','7104','710401','7104011011','WITA',NULL,NULL,0,'71.04.01.1011'),
                    (7104011024,710401,'LIRUNG MATANE','4','kelurahan','71','7104','710401','7104011024','WITA',NULL,NULL,0,'71.04.01.1024'),
                    (7104012006,710401,'SEREH','4','kelurahan','71','7104','710401','7104012006','WITA',NULL,NULL,0,'71.04.01.2006'),
                    (7104012007,710401,'MUSI','4','kelurahan','71','7104','710401','7104012007','WITA',NULL,NULL,0,'71.04.01.2007'),
                    (7104012015,710401,'TALOLANG','4','kelurahan','71','7104','710401','7104012015','WITA',NULL,NULL,0,'71.04.01.2015'),
                    (7104012017,710401,'SEREH I','4','kelurahan','71','7104','710401','7104012017','WITA',NULL,NULL,0,'71.04.01.2017'),
                    (7104021005,710402,'B E O','4','kelurahan','71','7104','710402','7104021005','WITA',NULL,NULL,0,'71.04.02.1005'),
                    (7104021017,710402,'BEO TIMUR','4','kelurahan','71','7104','710402','7104021017','WITA',NULL,NULL,0,'71.04.02.1017'),
                    (7104021018,710402,'BEO BARAT','4','kelurahan','71','7104','710402','7104021018','WITA',NULL,NULL,0,'71.04.02.1018'),
                    (7104022011,710402,'BANTIK','4','kelurahan','71','7104','710402','7104022011','WITA',NULL,NULL,0,'71.04.02.2011'),
                    (7104022019,710402,'BENGEL','4','kelurahan','71','7104','710402','7104022019','WITA',NULL,NULL,0,'71.04.02.2019'),
                    (7104022020,710402,'BANTIK LAMA','4','kelurahan','71','7104','710402','7104022020','WITA',NULL,NULL,0,'71.04.02.2020'),
                    (7104032003,710403,'A L O','4','kelurahan','71','7104','710403','7104032003','WITA',NULL,NULL,0,'71.04.03.2003'),
                    (7104032004,710403,'N U N U','4','kelurahan','71','7104','710403','7104032004','WITA',NULL,NULL,0,'71.04.03.2004'),
                    (7104032005,710403,'R A I N I S','4','kelurahan','71','7104','710403','7104032005','WITA',NULL,NULL,0,'71.04.03.2005'),
                    (7104032006,710403,'BANTANE','4','kelurahan','71','7104','710403','7104032006','WITA',NULL,NULL,0,'71.04.03.2006'),
                    (7104032007,710403,'TABANG','4','kelurahan','71','7104','710403','7104032007','WITA',NULL,NULL,0,'71.04.03.2007'),
                    (7104032014,710403,'PARANGEN','4','kelurahan','71','7104','710403','7104032014','WITA',NULL,NULL,0,'71.04.03.2014'),
                    (7104032015,710403,'BANTANE UTARA','4','kelurahan','71','7104','710403','7104032015','WITA',NULL,NULL,0,'71.04.03.2015'),
                    (7104032018,710403,'TABANG BARAT','4','kelurahan','71','7104','710403','7104032018','WITA',NULL,NULL,0,'71.04.03.2018'),
                    (7104032020,710403,'NUNU UTARA','4','kelurahan','71','7104','710403','7104032020','WITA',NULL,NULL,0,'71.04.03.2020'),
                    (7104032021,710403,'RAINIS BATUPENGA','4','kelurahan','71','7104','710403','7104032021','WITA',NULL,NULL,0,'71.04.03.2021'),
                    (7104032022,710403,'ALO UTARA','4','kelurahan','71','7104','710403','7104032022','WITA',NULL,NULL,0,'71.04.03.2022'),
                    (7104042006,710404,'E S S A N G','4','kelurahan','71','7104','710404','7104042006','WITA',NULL,NULL,0,'71.04.04.2006'),
                    (7104042007,710404,'LALUE','4','kelurahan','71','7104','710404','7104042007','WITA',NULL,NULL,0,'71.04.04.2007'),
                    (7104042008,710404,'BULUDE','4','kelurahan','71','7104','710404','7104042008','WITA',NULL,NULL,0,'71.04.04.2008'),
                    (7104042016,710404,'MARIRIK','4','kelurahan','71','7104','710404','7104042016','WITA',NULL,NULL,0,'71.04.04.2016'),
                    (7104042018,710404,'ESSANG SELATAN','4','kelurahan','71','7104','710404','7104042018','WITA',NULL,NULL,0,'71.04.04.2018'),
                    (7104042019,710404,'BULUDE SELATAN','4','kelurahan','71','7104','710404','7104042019','WITA',NULL,NULL,0,'71.04.04.2019'),
                    (7104042020,710404,'LALUE TENGAH','4','kelurahan','71','7104','710404','7104042020','WITA',NULL,NULL,0,'71.04.04.2020'),
                    (7104042021,710404,'LALUE UTARA','4','kelurahan','71','7104','710404','7104042021','WITA',NULL,NULL,0,'71.04.04.2021'),
                    (7104052001,710405,'KAKOROTAN','4','kelurahan','71','7104','710405','7104052001','WITA',NULL,NULL,0,'71.04.05.2001'),
                    (7104052002,710405,'MARAMPIT','4','kelurahan','71','7104','710405','7104052002','WITA',NULL,NULL,0,'71.04.05.2002'),
                    (7104052003,710405,'LALUHE','4','kelurahan','71','7104','710405','7104052003','WITA',NULL,NULL,0,'71.04.05.2003'),
                    (7104052004,710405,'DAMPULIS','4','kelurahan','71','7104','710405','7104052004','WITA',NULL,NULL,0,'71.04.05.2004'),
                    (7104052005,710405,'KARATUNG','4','kelurahan','71','7104','710405','7104052005','WITA',NULL,NULL,0,'71.04.05.2005'),
                    (7104052007,710405,'KARATUNG TENGAH','4','kelurahan','71','7104','710405','7104052007','WITA',NULL,NULL,0,'71.04.05.2007'),
                    (7104052008,710405,'KARATUNG SELATAN','4','kelurahan','71','7104','710405','7104052008','WITA',NULL,NULL,0,'71.04.05.2008'),
                    (7104052009,710405,'DAMPULIS SELATAN','4','kelurahan','71','7104','710405','7104052009','WITA',NULL,NULL,0,'71.04.05.2009'),
                    (7104052010,710405,'MARAMPIT TIMUR','4','kelurahan','71','7104','710405','7104052010','WITA',NULL,NULL,0,'71.04.05.2010'),
                    (7104062001,710406,'PANGERAN','4','kelurahan','71','7104','710406','7104062001','WITA',NULL,NULL,0,'71.04.06.2001'),
                    (7104062007,710406,'BULUDE','4','kelurahan','71','7104','710406','7104062007','WITA',NULL,NULL,0,'71.04.06.2007'),
                    (7104062008,710406,'PANTUGE','4','kelurahan','71','7104','710406','7104062008','WITA',NULL,NULL,0,'71.04.06.2008'),
                    (7104062009,710406,'KABARUAN','4','kelurahan','71','7104','710406','7104062009','WITA',NULL,NULL,0,'71.04.06.2009'),
                    (7104062010,710406,'MANGARAN','4','kelurahan','71','7104','710406','7104062010','WITA',NULL,NULL,0,'71.04.06.2010'),
                    (7104062011,710406,'KORDAKEL','4','kelurahan','71','7104','710406','7104062011','WITA',NULL,NULL,0,'71.04.06.2011'),
                    (7104062012,710406,'RARANGE','4','kelurahan','71','7104','710406','7104062012','WITA',NULL,NULL,0,'71.04.06.2012'),
                    (7104062013,710406,'TADUNA','4','kelurahan','71','7104','710406','7104062013','WITA',NULL,NULL,0,'71.04.06.2013'),
                    (7104062017,710406,'KABARUAN TIMUR','4','kelurahan','71','7104','710406','7104062017','WITA',NULL,NULL,0,'71.04.06.2017'),
                    (7104062018,710406,'PANTUGE TIMUR','4','kelurahan','71','7104','710406','7104062018','WITA',NULL,NULL,0,'71.04.06.2018'),
                    (7104062019,710406,'PANNULAN','4','kelurahan','71','7104','710406','7104062019','WITA',NULL,NULL,0,'71.04.06.2019'),
                    (7104062020,710406,'BULUDE SELATAN','4','kelurahan','71','7104','710406','7104062020','WITA',NULL,NULL,0,'71.04.06.2020'),
                    (7104071001,710407,'MELONGUANE','4','kelurahan','71','7104','710407','7104071001','WITA',NULL,NULL,0,'71.04.07.1001'),
                    (7104071009,710407,'MELONGUANE TIMUR','4','kelurahan','71','7104','710407','7104071009','WITA',NULL,NULL,0,'71.04.07.1009'),
                    (7104071010,710407,'MELONGUANE BARAT','4','kelurahan','71','7104','710407','7104071010','WITA',NULL,NULL,0,'71.04.07.1010'),
                    (7104072002,710407,'MALA','4','kelurahan','71','7104','710407','7104072002','WITA',NULL,NULL,0,'71.04.07.2002'),
                    (7104072003,710407,'KIAMA','4','kelurahan','71','7104','710407','7104072003','WITA',NULL,NULL,0,'71.04.07.2003'),
                    (7104072006,710407,'TARUN','4','kelurahan','71','7104','710407','7104072006','WITA',NULL,NULL,0,'71.04.07.2006'),
                    (7104072007,710407,'SAWANG','4','kelurahan','71','7104','710407','7104072007','WITA',NULL,NULL,0,'71.04.07.2007'),
                    (7104072008,710407,'AMBELA','4','kelurahan','71','7104','710407','7104072008','WITA',NULL,NULL,0,'71.04.07.2008'),
                    (7104072011,710407,'TARUN  SELATAN','4','kelurahan','71','7104','710407','7104072011','WITA',NULL,NULL,0,'71.04.07.2011'),
                    (7104072012,710407,'KIAMA BARAT','4','kelurahan','71','7104','710407','7104072012','WITA',NULL,NULL,0,'71.04.07.2012'),
                    (7104072015,710407,'MAREDAREN KIAMA','4','kelurahan','71','7104','710407','7104072015','WITA',NULL,NULL,0,'71.04.07.2015'),
                    (7104072016,710407,'SAWANG UTARA','4','kelurahan','71','7104','710407','7104072016','WITA',NULL,NULL,0,'71.04.07.2016'),
                    (7104072017,710407,'MALA TIMUR','4','kelurahan','71','7104','710407','7104072017','WITA',NULL,NULL,0,'71.04.07.2017'),
                    (7104082001,710408,'MAMAHAN','4','kelurahan','71','7104','710408','7104082001','WITA',NULL,NULL,0,'71.04.08.2001'),
                    (7104082002,710408,'BAMBUNG','4','kelurahan','71','7104','710408','7104082002','WITA',NULL,NULL,0,'71.04.08.2002'),
                    (7104082003,710408,'TATURAN','4','kelurahan','71','7104','710408','7104082003','WITA',NULL,NULL,0,'71.04.08.2003'),
                    (7104082004,710408,'G E M E H','4','kelurahan','71','7104','710408','7104082004','WITA',NULL,NULL,0,'71.04.08.2004'),
                    (7104082005,710408,'ARANGKAA','4','kelurahan','71','7104','710408','7104082005','WITA',NULL,NULL,0,'71.04.08.2005'),
                    (7104082006,710408,'MALAT','4','kelurahan','71','7104','710408','7104082006','WITA',NULL,NULL,0,'71.04.08.2006'),
                    (7104082007,710408,'APAN','4','kelurahan','71','7104','710408','7104082007','WITA',NULL,NULL,0,'71.04.08.2007'),
                    (7104082008,710408,'TARUAN','4','kelurahan','71','7104','710408','7104082008','WITA',NULL,NULL,0,'71.04.08.2008'),
                    (7104082009,710408,'BANNADA','4','kelurahan','71','7104','710408','7104082009','WITA',NULL,NULL,0,'71.04.08.2009'),
                    (7104082010,710408,'GEMEH RAAMATA','4','kelurahan','71','7104','710408','7104082010','WITA',NULL,NULL,0,'71.04.08.2010'),
                    (7104082011,710408,'GEMEH WANTANE','4','kelurahan','71','7104','710408','7104082011','WITA',NULL,NULL,0,'71.04.08.2011'),
                    (7104082012,710408,'BAMBUNG TIMUR','4','kelurahan','71','7104','710408','7104082012','WITA',NULL,NULL,0,'71.04.08.2012'),
                    (7104082013,710408,'MALAT UTARA','4','kelurahan','71','7104','710408','7104082013','WITA',NULL,NULL,0,'71.04.08.2013'),
                    (7104082014,710408,'MAMAHAN BARAT','4','kelurahan','71','7104','710408','7104082014','WITA',NULL,NULL,0,'71.04.08.2014'),
                    (7104082015,710408,'LAHU','4','kelurahan','71','7104','710408','7104082015','WITA',NULL,NULL,0,'71.04.08.2015'),
                    (7104092001,710409,'PERET','4','kelurahan','71','7104','710409','7104092001','WITA',NULL,NULL,0,'71.04.09.2001'),
                    (7104092002,710409,'IGHIK','4','kelurahan','71','7104','710409','7104092002','WITA',NULL,NULL,0,'71.04.09.2002'),
                    (7104092003,710409,'BIRANG','4','kelurahan','71','7104','710409','7104092003','WITA',NULL,NULL,0,'71.04.09.2003'),
                    (7104092004,710409,'AKAS','4','kelurahan','71','7104','710409','7104092004','WITA',NULL,NULL,0,'71.04.09.2004'),
                    (7104092005,710409,'DAMAU','4','kelurahan','71','7104','710409','7104092005','WITA',NULL,NULL,0,'71.04.09.2005'),
                    (7104092006,710409,'DAMAU BOWONE','4','kelurahan','71','7104','710409','7104092006','WITA',NULL,NULL,0,'71.04.09.2006'),
                    (7104092007,710409,'TADUWALE','4','kelurahan','71','7104','710409','7104092007','WITA',NULL,NULL,0,'71.04.09.2007'),
                    (7104092008,710409,'AKAS BALANE','4','kelurahan','71','7104','710409','7104092008','WITA',NULL,NULL,0,'71.04.09.2008'),
                    (7104102001,710410,'TUABATU','4','kelurahan','71','7104','710410','7104102001','WITA',NULL,NULL,0,'71.04.10.2001'),
                    (7104102002,710410,'DAPALAN','4','kelurahan','71','7104','710410','7104102002','WITA',NULL,NULL,0,'71.04.10.2002'),
                    (7104102003,710410,'R I U N G','4','kelurahan','71','7104','710410','7104102003','WITA',NULL,NULL,0,'71.04.10.2003'),
                    (7104102004,710410,'A M M A T','4','kelurahan','71','7104','710410','7104102004','WITA',NULL,NULL,0,'71.04.10.2004'),
                    (7104102005,710410,'BINALANG','4','kelurahan','71','7104','710410','7104102005','WITA',NULL,NULL,0,'71.04.10.2005'),
                    (7104102006,710410,'GANALO','4','kelurahan','71','7104','710410','7104102006','WITA',NULL,NULL,0,'71.04.10.2006'),
                    (7104102007,710410,'DAPIHE','4','kelurahan','71','7104','710410','7104102007','WITA',NULL,NULL,0,'71.04.10.2007'),
                    (7104102008,710410,'TUABATU BARAT','4','kelurahan','71','7104','710410','7104102008','WITA',NULL,NULL,0,'71.04.10.2008'),
                    (7104102009,710410,'AMMAT SELATAN','4','kelurahan','71','7104','710410','7104102009','WITA',NULL,NULL,0,'71.04.10.2009'),
                    (7104102010,710410,'BINALANG TIMUR','4','kelurahan','71','7104','710410','7104102010','WITA',NULL,NULL,0,'71.04.10.2010'),
                    (7104102011,710410,'RIUNG UTARA','4','kelurahan','71','7104','710410','7104102011','WITA',NULL,NULL,0,'71.04.10.2011'),
                    (7104112001,710411,'BITUNURIS','4','kelurahan','71','7104','710411','7104112001','WITA',NULL,NULL,0,'71.04.11.2001'),
                    (7104112002,710411,'BITUNURIS SELATAN','4','kelurahan','71','7104','710411','7104112002','WITA',NULL,NULL,0,'71.04.11.2002'),
                    (7104112003,710411,'SALIBABU','4','kelurahan','71','7104','710411','7104112003','WITA',NULL,NULL,0,'71.04.11.2003'),
                    (7104112004,710411,'SALIBABU UTARA','4','kelurahan','71','7104','710411','7104112004','WITA',NULL,NULL,0,'71.04.11.2004'),
                    (7104112005,710411,'DALUM','4','kelurahan','71','7104','710411','7104112005','WITA',NULL,NULL,0,'71.04.11.2005'),
                    (7104112006,710411,'BALANG','4','kelurahan','71','7104','710411','7104112006','WITA',NULL,NULL,0,'71.04.11.2006'),
                    (7104122001,710412,'KALONGAN','4','kelurahan','71','7104','710412','7104122001','WITA',NULL,NULL,0,'71.04.12.2001'),
                    (7104122002,710412,'KALONGAN UTARA','4','kelurahan','71','7104','710412','7104122002','WITA',NULL,NULL,0,'71.04.12.2002'),
                    (7104122003,710412,'KALONGAN SELATAN','4','kelurahan','71','7104','710412','7104122003','WITA',NULL,NULL,0,'71.04.12.2003'),
                    (7104122004,710412,'ALUDE','4','kelurahan','71','7104','710412','7104122004','WITA',NULL,NULL,0,'71.04.12.2004'),
                    (7104122005,710412,'MUSI I','4','kelurahan','71','7104','710412','7104122005','WITA',NULL,NULL,0,'71.04.12.2005'),
                    (7104132001,710413,'PULAU MIANGAS','4','kelurahan','71','7104','710413','7104132001','WITA',NULL,NULL,0,'71.04.13.2001'),
                    (7104141001,710414,'MAKATARA','4','kelurahan','71','7104','710414','7104141001','WITA',NULL,NULL,0,'71.04.14.1001'),
                    (7104141002,710414,'MAKATARA TIMUR','4','kelurahan','71','7104','710414','7104141002','WITA',NULL,NULL,0,'71.04.14.1002'),
                    (7104142003,710414,'AWIT','4','kelurahan','71','7104','710414','7104142003','WITA',NULL,NULL,0,'71.04.14.2003'),
                    (7104142004,710414,'AWIT SELATAN','4','kelurahan','71','7104','710414','7104142004','WITA',NULL,NULL,0,'71.04.14.2004'),
                    (7104142005,710414,'RAE','4','kelurahan','71','7104','710414','7104142005','WITA',NULL,NULL,0,'71.04.14.2005'),
                    (7104142006,710414,'RAE SELATAN','4','kelurahan','71','7104','710414','7104142006','WITA',NULL,NULL,0,'71.04.14.2006'),
                    (7104142007,710414,'LOBBO','4','kelurahan','71','7104','710414','7104142007','WITA',NULL,NULL,0,'71.04.14.2007'),
                    (7104142008,710414,'LOBBO I','4','kelurahan','71','7104','710414','7104142008','WITA',NULL,NULL,0,'71.04.14.2008'),
                    (7104152001,710415,'PULUTAN','4','kelurahan','71','7104','710415','7104152001','WITA',NULL,NULL,0,'71.04.15.2001'),
                    (7104152002,710415,'PULUTAN UTARA','4','kelurahan','71','7104','710415','7104152002','WITA',NULL,NULL,0,'71.04.15.2002'),
                    (7104152003,710415,'PULUTAN SELATAN','4','kelurahan','71','7104','710415','7104152003','WITA',NULL,NULL,0,'71.04.15.2003'),
                    (7104152004,710415,'DARAN','4','kelurahan','71','7104','710415','7104152004','WITA',NULL,NULL,0,'71.04.15.2004'),
                    (7104152005,710415,'DARAN UTARA','4','kelurahan','71','7104','710415','7104152005','WITA',NULL,NULL,0,'71.04.15.2005'),
                    (7104162001,710416,'TULE','4','kelurahan','71','7104','710416','7104162001','WITA',NULL,NULL,0,'71.04.16.2001'),
                    (7104162002,710416,'TULE TENGAH','4','kelurahan','71','7104','710416','7104162002','WITA',NULL,NULL,0,'71.04.16.2002'),
                    (7104162003,710416,'TULE UTARA','4','kelurahan','71','7104','710416','7104162003','WITA',NULL,NULL,0,'71.04.16.2003'),
                    (7104162004,710416,'BOWOMBARU','4','kelurahan','71','7104','710416','7104162004','WITA',NULL,NULL,0,'71.04.16.2004'),
                    (7104162005,710416,'BOWOMBARU TENGAH','4','kelurahan','71','7104','710416','7104162005','WITA',NULL,NULL,0,'71.04.16.2005'),
                    (7104162006,710416,'BOWOMBARU UTARA','4','kelurahan','71','7104','710416','7104162006','WITA',NULL,NULL,0,'71.04.16.2006'),
                    (7104172001,710417,'MORONGE','4','kelurahan','71','7104','710417','7104172001','WITA',NULL,NULL,0,'71.04.17.2001'),
                    (7104172002,710417,'MORONGE I','4','kelurahan','71','7104','710417','7104172002','WITA',NULL,NULL,0,'71.04.17.2002'),
                    (7104172003,710417,'MORONGE II','4','kelurahan','71','7104','710417','7104172003','WITA',NULL,NULL,0,'71.04.17.2003'),
                    (7104172004,710417,'MORONGE SELATAN','4','kelurahan','71','7104','710417','7104172004','WITA',NULL,NULL,0,'71.04.17.2004'),
                    (7104172005,710417,'MORONGE SELATAN II','4','kelurahan','71','7104','710417','7104172005','WITA',NULL,NULL,0,'71.04.17.2005'),
                    (7104172006,710417,'MORONGE SELATAN I','4','kelurahan','71','7104','710417','7104172006','WITA',NULL,NULL,0,'71.04.17.2006'),
                    (7104182001,710418,'PAMPALU','4','kelurahan','71','7104','710418','7104182001','WITA',NULL,NULL,0,'71.04.18.2001'),
                    (7104182002,710418,'RUSO','4','kelurahan','71','7104','710418','7104182002','WITA',NULL,NULL,0,'71.04.18.2002'),
                    (7104182003,710418,'NIAMPAK','4','kelurahan','71','7104','710418','7104182003','WITA',NULL,NULL,0,'71.04.18.2003'),
                    (7104182004,710418,'NIAMPAK UTARA','4','kelurahan','71','7104','710418','7104182004','WITA',NULL,NULL,0,'71.04.18.2004'),
                    (7104182005,710418,'TAROHAN','4','kelurahan','71','7104','710418','7104182005','WITA',NULL,NULL,0,'71.04.18.2005'),
                    (7104182006,710418,'TAROHAN SELATAN','4','kelurahan','71','7104','710418','7104182006','WITA',NULL,NULL,0,'71.04.18.2006'),
                    (7104182007,710418,'MATAHIT','4','kelurahan','71','7104','710418','7104182007','WITA',NULL,NULL,0,'71.04.18.2007'),
                    (7104192001,710419,'SAMBUARA SATU','4','kelurahan','71','7104','710419','7104192001','WITA',NULL,NULL,0,'71.04.19.2001'),
                    (7104192002,710419,'SAMBUARA','4','kelurahan','71','7104','710419','7104192002','WITA',NULL,NULL,0,'71.04.19.2002'),
                    (7104192003,710419,'ENSEM','4','kelurahan','71','7104','710419','7104192003','WITA',NULL,NULL,0,'71.04.19.2003'),
                    (7104192004,710419,'ENSEM TIMUR','4','kelurahan','71','7104','710419','7104192004','WITA',NULL,NULL,0,'71.04.19.2004'),
                    (7104192005,710419,'BATUMBALANGO','4','kelurahan','71','7104','710419','7104192005','WITA',NULL,NULL,0,'71.04.19.2005'),
                    (7104192006,710419,'AMBIA','4','kelurahan','71','7104','710419','7104192006','WITA',NULL,NULL,0,'71.04.19.2006'),
                    (7104192007,710419,'AMBIA UTARA','4','kelurahan','71','7104','710419','7104192007','WITA',NULL,NULL,0,'71.04.19.2007'),
                    (7104192008,710419,'K U M A','4','kelurahan','71','7104','710419','7104192008','WITA',NULL,NULL,0,'71.04.19.2008'),
                    (7104192009,710419,'KUMA SELATAN','4','kelurahan','71','7104','710419','7104192009','WITA',NULL,NULL,0,'71.04.19.2009'),
                    (7105012001,710501,'SINISIR','4','kelurahan','71','7105','710501','7105012001','WITA',NULL,NULL,0,'71.05.01.2001'),
                    (7105012002,710501,'KAKENTURAN','4','kelurahan','71','7105','710501','7105012002','WITA',NULL,NULL,0,'71.05.01.2002'),
                    (7105012003,710501,'PALELON','4','kelurahan','71','7105','710501','7105012003','WITA',NULL,NULL,0,'71.05.01.2003'),
                    (7105012004,710501,'PINASUNGKULAN','4','kelurahan','71','7105','710501','7105012004','WITA',NULL,NULL,0,'71.05.01.2004'),
                    (7105012005,710501,'WULURMAATUS','4','kelurahan','71','7105','710501','7105012005','WITA',NULL,NULL,0,'71.05.01.2005'),
                    (7105012006,710501,'MAKAARUYEN','4','kelurahan','71','7105','710501','7105012006','WITA',NULL,NULL,0,'71.05.01.2006'),
                    (7105012007,710501,'LINELEAN','4','kelurahan','71','7105','710501','7105012007','WITA',NULL,NULL,0,'71.05.01.2007'),
                    (7105012008,710501,'MOKOBANG','4','kelurahan','71','7105','710501','7105012008','WITA',NULL,NULL,0,'71.05.01.2008'),
                    (7105012009,710501,'KAKENTURAN BARAT','4','kelurahan','71','7105','710501','7105012009','WITA',NULL,NULL,0,'71.05.01.2009'),
                    (7105012010,710501,'PINASUNGKULAN UTARA','4','kelurahan','71','7105','710501','7105012010','WITA',NULL,NULL,0,'71.05.01.2010'),
                    (7105022009,710502,'RARAATEAN','4','kelurahan','71','7105','710502','7105022009','WITA',NULL,NULL,0,'71.05.02.2009'),
                    (7105022010,710502,'SION','4','kelurahan','71','7105','710502','7105022010','WITA',NULL,NULL,0,'71.05.02.2010'),
                    (7105022011,710502,'TOMPASO BARU I','4','kelurahan','71','7105','710502','7105022011','WITA',NULL,NULL,0,'71.05.02.2011'),
                    (7105022012,710502,'KINALAWIRAN','4','kelurahan','71','7105','710502','7105022012','WITA',NULL,NULL,0,'71.05.02.2012'),
                    (7105022013,710502,'TOMPASO BARU II','4','kelurahan','71','7105','710502','7105022013','WITA',NULL,NULL,0,'71.05.02.2013'),
                    (7105022014,710502,'PINAESAAN','4','kelurahan','71','7105','710502','7105022014','WITA',NULL,NULL,0,'71.05.02.2014'),
                    (7105022015,710502,'TOROUT','4','kelurahan','71','7105','710502','7105022015','WITA',NULL,NULL,0,'71.05.02.2015'),
                    (7105022016,710502,'LINDANGAN','4','kelurahan','71','7105','710502','7105022016','WITA',NULL,NULL,0,'71.05.02.2016'),
                    (7105022017,710502,'KAROWA','4','kelurahan','71','7105','710502','7105022017','WITA',NULL,NULL,0,'71.05.02.2017'),
                    (7105022018,710502,'LIANDOK','4','kelurahan','71','7105','710502','7105022018','WITA',NULL,NULL,0,'71.05.02.2018'),
                    (7105032002,710503,'POOPO','4','kelurahan','71','7105','710503','7105032002','WITA',NULL,NULL,0,'71.05.03.2002'),
                    (7105032003,710503,'RANOYAPO','4','kelurahan','71','7105','710503','7105032003','WITA',NULL,NULL,0,'71.05.03.2003'),
                    (7105032004,710503,'MOPOLO','4','kelurahan','71','7105','710503','7105032004','WITA',NULL,NULL,0,'71.05.03.2004'),
                    (7105032005,710503,'BERINGIN','4','kelurahan','71','7105','710503','7105032005','WITA',NULL,NULL,0,'71.05.03.2005'),
                    (7105032006,710503,'POWALUTAN','4','kelurahan','71','7105','710503','7105032006','WITA',NULL,NULL,0,'71.05.03.2006'),
                    (7105032008,710503,'LOMPAD','4','kelurahan','71','7105','710503','7105032008','WITA',NULL,NULL,0,'71.05.03.2008'),
                    (7105032009,710503,'LOMPAD BARU','4','kelurahan','71','7105','710503','7105032009','WITA',NULL,NULL,0,'71.05.03.2009'),
                    (7105032010,710503,'PONTAK','4','kelurahan','71','7105','710503','7105032010','WITA',NULL,NULL,0,'71.05.03.2010'),
                    (7105032012,710503,'POOPO UTARA','4','kelurahan','71','7105','710503','7105032012','WITA',NULL,NULL,0,'71.05.03.2012'),
                    (7105032013,710503,'POOPO BARAT','4','kelurahan','71','7105','710503','7105032013','WITA',NULL,NULL,0,'71.05.03.2013'),
                    (7105032014,710503,'PONTAK SATU','4','kelurahan','71','7105','710503','7105032014','WITA',NULL,NULL,0,'71.05.03.2014'),
                    (7105032015,710503,'MOPOLO ESA','4','kelurahan','71','7105','710503','7105032015','WITA',NULL,NULL,0,'71.05.03.2015'),
                    (7105072001,710507,'MOTOLING','4','kelurahan','71','7105','710507','7105072001','WITA',NULL,NULL,0,'71.05.07.2001'),
                    (7105072002,710507,'MOTOLING MAWALE','4','kelurahan','71','7105','710507','7105072002','WITA',NULL,NULL,0,'71.05.07.2002'),
                    (7105072003,710507,'MOTOLING I','4','kelurahan','71','7105','710507','7105072003','WITA',NULL,NULL,0,'71.05.07.2003'),
                    (7105072004,710507,'MOTOLING II','4','kelurahan','71','7105','710507','7105072004','WITA',NULL,NULL,0,'71.05.07.2004'),
                    (7105072005,710507,'PICUAN BARU','4','kelurahan','71','7105','710507','7105072005','WITA',NULL,NULL,0,'71.05.07.2005'),
                    (7105072015,710507,'LALUMPE','4','kelurahan','71','7105','710507','7105072015','WITA',NULL,NULL,0,'71.05.07.2015'),
                    (7105072021,710507,'RAANAN LAMA','4','kelurahan','71','7105','710507','7105072021','WITA',NULL,NULL,0,'71.05.07.2021'),
                    (7105082001,710508,'BLONGKO','4','kelurahan','71','7105','710508','7105082001','WITA',NULL,NULL,0,'71.05.08.2001'),
                    (7105082002,710508,'BOYONGPANTE','4','kelurahan','71','7105','710508','7105082002','WITA',NULL,NULL,0,'71.05.08.2002'),
                    (7105082003,710508,'TINIAWANGKO','4','kelurahan','71','7105','710508','7105082003','WITA',NULL,NULL,0,'71.05.08.2003'),
                    (7105082004,710508,'ONGKAW I','4','kelurahan','71','7105','710508','7105082004','WITA',NULL,NULL,0,'71.05.08.2004'),
                    (7105082005,710508,'ONGKAW II','4','kelurahan','71','7105','710508','7105082005','WITA',NULL,NULL,0,'71.05.08.2005'),
                    (7105082006,710508,'AERGALE','4','kelurahan','71','7105','710508','7105082006','WITA',NULL,NULL,0,'71.05.08.2006'),
                    (7105082007,710508,'POIGAR I','4','kelurahan','71','7105','710508','7105082007','WITA',NULL,NULL,0,'71.05.08.2007'),
                    (7105082008,710508,'POIGAR II','4','kelurahan','71','7105','710508','7105082008','WITA',NULL,NULL,0,'71.05.08.2008'),
                    (7105082009,710508,'DURIAN','4','kelurahan','71','7105','710508','7105082009','WITA',NULL,NULL,0,'71.05.08.2009'),
                    (7105082010,710508,'TANAMON','4','kelurahan','71','7105','710508','7105082010','WITA',NULL,NULL,0,'71.05.08.2010'),
                    (7105082011,710508,'ONGKAW TIGA','4','kelurahan','71','7105','710508','7105082011','WITA',NULL,NULL,0,'71.05.08.2011'),
                    (7105082012,710508,'BOYONGPANTE DUA','4','kelurahan','71','7105','710508','7105082012','WITA',NULL,NULL,0,'71.05.08.2012'),
                    (7105082013,710508,'TANAMON UTARA','4','kelurahan','71','7105','710508','7105082013','WITA',NULL,NULL,0,'71.05.08.2013'),
                    (7105092001,710509,'BOYONG ATAS','4','kelurahan','71','7105','710509','7105092001','WITA',NULL,NULL,0,'71.05.09.2001'),
                    (7105092002,710509,'PAKU URE II','4','kelurahan','71','7105','710509','7105092002','WITA',NULL,NULL,0,'71.05.09.2002'),
                    (7105092003,710509,'TENGA','4','kelurahan','71','7105','710509','7105092003','WITA',NULL,NULL,0,'71.05.09.2003'),
                    (7105092004,710509,'RADEY','4','kelurahan','71','7105','710509','7105092004','WITA',NULL,NULL,0,'71.05.09.2004'),
                    (7105092005,710509,'TAWAANG','4','kelurahan','71','7105','710509','7105092005','WITA',NULL,NULL,0,'71.05.09.2005'),
                    (7105092009,710509,'PAKUWERU','4','kelurahan','71','7105','710509','7105092009','WITA',NULL,NULL,0,'71.05.09.2009'),
                    (7105092010,710509,'SAPA','4','kelurahan','71','7105','710509','7105092010','WITA',NULL,NULL,0,'71.05.09.2010'),
                    (7105092011,710509,'PAKUURE SATU','4','kelurahan','71','7105','710509','7105092011','WITA',NULL,NULL,0,'71.05.09.2011'),
                    (7105092012,710509,'PAKUURE TIGA','4','kelurahan','71','7105','710509','7105092012','WITA',NULL,NULL,0,'71.05.09.2012'),
                    (7105092014,710509,'MOLINOW','4','kelurahan','71','7105','710509','7105092014','WITA',NULL,NULL,0,'71.05.09.2014'),
                    (7105092015,710509,'PAKU URE','4','kelurahan','71','7105','710509','7105092015','WITA',NULL,NULL,0,'71.05.09.2015'),
                    (7105092016,710509,'PAKU URE TINANIAN','4','kelurahan','71','7105','710509','7105092016','WITA',NULL,NULL,0,'71.05.09.2016'),
                    (7105092017,710509,'PAKU URE KINAMANG','4','kelurahan','71','7105','710509','7105092017','WITA',NULL,NULL,0,'71.05.09.2017'),
                    (7105092018,710509,'PAKUWERU UTARA','4','kelurahan','71','7105','710509','7105092018','WITA',NULL,NULL,0,'71.05.09.2018'),
                    (7105092019,710509,'SAPA BARAT','4','kelurahan','71','7105','710509','7105092019','WITA',NULL,NULL,0,'71.05.09.2019'),
                    (7105092020,710509,'SAPA TIMUR','4','kelurahan','71','7105','710509','7105092020','WITA',NULL,NULL,0,'71.05.09.2020'),
                    (7105092021,710509,'TAWAANG TIMUR','4','kelurahan','71','7105','710509','7105092021','WITA',NULL,NULL,0,'71.05.09.2021'),
                    (7105092022,710509,'TAWAANG BARAT','4','kelurahan','71','7105','710509','7105092022','WITA',NULL,NULL,0,'71.05.09.2022'),
                    (7105101004,710510,'BUYUNGON','4','kelurahan','71','7105','710510','7105101004','WITA',NULL,NULL,0,'71.05.10.1004'),
                    (7105101005,710510,'RANOYAPO','4','kelurahan','71','7105','710510','7105101005','WITA',NULL,NULL,0,'71.05.10.1005'),
                    (7105101006,710510,'UWURAN I','4','kelurahan','71','7105','710510','7105101006','WITA',NULL,NULL,0,'71.05.10.1006'),
                    (7105101007,710510,'UWURAN II','4','kelurahan','71','7105','710510','7105101007','WITA',NULL,NULL,0,'71.05.10.1007'),
                    (7105101008,710510,'LEWET','4','kelurahan','71','7105','710510','7105101008','WITA',NULL,NULL,0,'71.05.10.1008'),
                    (7105101010,710510,'BITUNG','4','kelurahan','71','7105','710510','7105101010','WITA',NULL,NULL,0,'71.05.10.1010'),
                    (7105102009,710510,'RANOKETANG TUA','4','kelurahan','71','7105','710510','7105102009','WITA',NULL,NULL,0,'71.05.10.2009'),
                    (7105102018,710510,'KILOMETER 3','4','kelurahan','71','7105','710510','7105102018','WITA',NULL,NULL,0,'71.05.10.2018'),
                    (7105122001,710512,'TUMPAAN SATU','4','kelurahan','71','7105','710512','7105122001','WITA',NULL,NULL,0,'71.05.12.2001'),
                    (7105122002,710512,'TUMPAAN','4','kelurahan','71','7105','710512','7105122002','WITA',NULL,NULL,0,'71.05.12.2002'),
                    (7105122003,710512,'MATANI','4','kelurahan','71','7105','710512','7105122003','WITA',NULL,NULL,0,'71.05.12.2003'),
                    (7105122004,710512,'POPONTOLEN','4','kelurahan','71','7105','710512','7105122004','WITA',NULL,NULL,0,'71.05.12.2004'),
                    (7105122005,710512,'LELEMA','4','kelurahan','71','7105','710512','7105122005','WITA',NULL,NULL,0,'71.05.12.2005'),
                    (7105122006,710512,'TANGKUNEI','4','kelurahan','71','7105','710512','7105122006','WITA',NULL,NULL,0,'71.05.12.2006'),
                    (7105122007,710512,'MUNTE','4','kelurahan','71','7105','710512','7105122007','WITA',NULL,NULL,0,'71.05.12.2007'),
                    (7105122016,710512,'TUMPAAN BARU','4','kelurahan','71','7105','710512','7105122016','WITA',NULL,NULL,0,'71.05.12.2016'),
                    (7105122017,710512,'MATANI SATU','4','kelurahan','71','7105','710512','7105122017','WITA',NULL,NULL,0,'71.05.12.2017'),
                    (7105122018,710512,'TUMPAN DUA','4','kelurahan','71','7105','710512','7105122018','WITA',NULL,NULL,0,'71.05.12.2018'),
                    (7105132001,710513,'PINAMORONGAN','4','kelurahan','71','7105','710513','7105132001','WITA',NULL,NULL,0,'71.05.13.2001'),
                    (7105132002,710513,'KANEYAN','4','kelurahan','71','7105','710513','7105132002','WITA',NULL,NULL,0,'71.05.13.2002'),
                    (7105132003,710513,'KORENG','4','kelurahan','71','7105','710513','7105132003','WITA',NULL,NULL,0,'71.05.13.2003'),
                    (7105132004,710513,'TUMALUNTUNG','4','kelurahan','71','7105','710513','7105132004','WITA',NULL,NULL,0,'71.05.13.2004'),
                    (7105132005,710513,'RUMOONG ATAS','4','kelurahan','71','7105','710513','7105132005','WITA',NULL,NULL,0,'71.05.13.2005'),
                    (7105132006,710513,'LANSOT','4','kelurahan','71','7105','710513','7105132006','WITA',NULL,NULL,0,'71.05.13.2006'),
                    (7105132007,710513,'WIAU LAPI','4','kelurahan','71','7105','710513','7105132007','WITA',NULL,NULL,0,'71.05.13.2007'),
                    (7105132008,710513,'WUWUK','4','kelurahan','71','7105','710513','7105132008','WITA',NULL,NULL,0,'71.05.13.2008'),
                    (7105132014,710513,'RUMOONG ATAS DUA','4','kelurahan','71','7105','710513','7105132014','WITA',NULL,NULL,0,'71.05.13.2014'),
                    (7105132017,710513,'LANSOT TIMUR','4','kelurahan','71','7105','710513','7105132017','WITA',NULL,NULL,0,'71.05.13.2017'),
                    (7105132018,710513,'WUWUK BARAT','4','kelurahan','71','7105','710513','7105132018','WITA',NULL,NULL,0,'71.05.13.2018'),
                    (7105132019,710513,'TUMALUNTUNG SATU','4','kelurahan','71','7105','710513','7105132019','WITA',NULL,NULL,0,'71.05.13.2019'),
                    (7105132020,710513,'WIAU LAPI BARAT','4','kelurahan','71','7105','710513','7105132020','WITA',NULL,NULL,0,'71.05.13.2020'),
                    (7105152002,710515,'KUMELEMBUAI','4','kelurahan','71','7105','710515','7105152002','WITA',NULL,NULL,0,'71.05.15.2002'),
                    (7105152003,710515,'KUMELEMBUAI ATAS','4','kelurahan','71','7105','710515','7105152003','WITA',NULL,NULL,0,'71.05.15.2003'),
                    (7105152004,710515,'KUMELEMBUAI  SATU','4','kelurahan','71','7105','710515','7105152004','WITA',NULL,NULL,0,'71.05.15.2004'),
                    (7105152005,710515,'MALOLA','4','kelurahan','71','7105','710515','7105152005','WITA',NULL,NULL,0,'71.05.15.2005'),
                    (7105152006,710515,'MALOLA I','4','kelurahan','71','7105','710515','7105152006','WITA',NULL,NULL,0,'71.05.15.2006'),
                    (7105152007,710515,'MAKASILI','4','kelurahan','71','7105','710515','7105152007','WITA',NULL,NULL,0,'71.05.15.2007'),
                    (7105152011,710515,'KUMELEMBUAI DUA','4','kelurahan','71','7105','710515','7105152011','WITA',NULL,NULL,0,'71.05.15.2011'),
                    (7105152015,710515,'LOLOMBULAN MAKASILI','4','kelurahan','71','7105','710515','7105152015','WITA',NULL,NULL,0,'71.05.15.2015'),
                    (7105162001,710516,'TUMANI','4','kelurahan','71','7105','710516','7105162001','WITA',NULL,NULL,0,'71.05.16.2001'),
                    (7105162002,710516,'LOWIAN','4','kelurahan','71','7105','710516','7105162002','WITA',NULL,NULL,0,'71.05.16.2002'),
                    (7105162003,710516,'KINAWERUAN','4','kelurahan','71','7105','710516','7105162003','WITA',NULL,NULL,0,'71.05.16.2003'),
                    (7105162004,710516,'LININGAAN','4','kelurahan','71','7105','710516','7105162004','WITA',NULL,NULL,0,'71.05.16.2004'),
                    (7105162005,710516,'BOJONEGORO','4','kelurahan','71','7105','710516','7105162005','WITA',NULL,NULL,0,'71.05.16.2005'),
                    (7105162006,710516,'TAMBELANG','4','kelurahan','71','7105','710516','7105162006','WITA',NULL,NULL,0,'71.05.16.2006'),
                    (7105162007,710516,'KINAMANG','4','kelurahan','71','7105','710516','7105162007','WITA',NULL,NULL,0,'71.05.16.2007'),
                    (7105162008,710516,'TEMBOAN','4','kelurahan','71','7105','710516','7105162008','WITA',NULL,NULL,0,'71.05.16.2008'),
                    (7105162009,710516,'KINAMANG SATU','4','kelurahan','71','7105','710516','7105162009','WITA',NULL,NULL,0,'71.05.16.2009'),
                    (7105162010,710516,'LOWIAN SATU','4','kelurahan','71','7105','710516','7105162010','WITA',NULL,NULL,0,'71.05.16.2010'),
                    (7105162011,710516,'TUMANI UTARA','4','kelurahan','71','7105','710516','7105162011','WITA',NULL,NULL,0,'71.05.16.2011'),
                    (7105162012,710516,'TUMANI SELATAN','4','kelurahan','71','7105','710516','7105162012','WITA',NULL,NULL,0,'71.05.16.2012'),
                    (7105171002,710517,'KAWANGKOAN BAWAH','4','kelurahan','71','7105','710517','7105171002','WITA',NULL,NULL,0,'71.05.17.1002'),
                    (7105171003,710517,'RUMOONG BAWAH','4','kelurahan','71','7105','710517','7105171003','WITA',NULL,NULL,0,'71.05.17.1003'),
                    (7105172001,710517,'KAPITU','4','kelurahan','71','7105','710517','7105172001','WITA',NULL,NULL,0,'71.05.17.2001'),
                    (7105172004,710517,'RUMOONG BAWAH','4','kelurahan','71','7105','710517','7105172004','WITA',NULL,NULL,0,'71.05.17.2004'),
                    (7105172005,710517,'TEWASEN','4','kelurahan','71','7105','710517','7105172005','WITA',NULL,NULL,0,'71.05.17.2005'),
                    (7105172006,710517,'PONDOS','4','kelurahan','71','7105','710517','7105172006','WITA',NULL,NULL,0,'71.05.17.2006'),
                    (7105172007,710517,'ELUSAN','4','kelurahan','71','7105','710517','7105172007','WITA',NULL,NULL,0,'71.05.17.2007'),
                    (7105172008,710517,'TEEP','4','kelurahan','71','7105','710517','7105172008','WITA',NULL,NULL,0,'71.05.17.2008'),
                    (7105172009,710517,'WAKAN','4','kelurahan','71','7105','710517','7105172009','WITA',NULL,NULL,0,'71.05.17.2009'),
                    (7105172010,710517,'TEEP TRANS','4','kelurahan','71','7105','710517','7105172010','WITA',NULL,NULL,0,'71.05.17.2010'),
                    (7105181002,710518,'PONDANG','4','kelurahan','71','7105','710518','7105181002','WITA',NULL,NULL,0,'71.05.18.1002'),
                    (7105181003,710518,'RANOMEA','4','kelurahan','71','7105','710518','7105181003','WITA',NULL,NULL,0,'71.05.18.1003'),
                    (7105182001,710518,'LOPANA','4','kelurahan','71','7105','710518','7105182001','WITA',NULL,NULL,0,'71.05.18.2001'),
                    (7105182004,710518,'PINALING','4','kelurahan','71','7105','710518','7105182004','WITA',NULL,NULL,0,'71.05.18.2004'),
                    (7105182005,710518,'KOTA MENARA','4','kelurahan','71','7105','710518','7105182005','WITA',NULL,NULL,0,'71.05.18.2005'),
                    (7105182006,710518,'MALIKU','4','kelurahan','71','7105','710518','7105182006','WITA',NULL,NULL,0,'71.05.18.2006'),
                    (7105182007,710518,'RITEY','4','kelurahan','71','7105','710518','7105182007','WITA',NULL,NULL,0,'71.05.18.2007'),
                    (7105182008,710518,'MALENOS BARU','4','kelurahan','71','7105','710518','7105182008','WITA',NULL,NULL,0,'71.05.18.2008'),
                    (7105182009,710518,'MALIKU SATU','4','kelurahan','71','7105','710518','7105182009','WITA',NULL,NULL,0,'71.05.18.2009'),
                    (7105182010,710518,'LOPANA SATU','4','kelurahan','71','7105','710518','7105182010','WITA',NULL,NULL,0,'71.05.18.2010'),
                    (7105192001,710519,'PASLATEN','4','kelurahan','71','7105','710519','7105192001','WITA',NULL,NULL,0,'71.05.19.2001'),
                    (7105192002,710519,'SULU','4','kelurahan','71','7105','710519','7105192002','WITA',NULL,NULL,0,'71.05.19.2002'),
                    (7105192003,710519,'BAJO','4','kelurahan','71','7105','710519','7105192003','WITA',NULL,NULL,0,'71.05.19.2003'),
                    (7105192004,710519,'WAWONA','4','kelurahan','71','7105','710519','7105192004','WITA',NULL,NULL,0,'71.05.19.2004'),
                    (7105192005,710519,'POPARENG','4','kelurahan','71','7105','710519','7105192005','WITA',NULL,NULL,0,'71.05.19.2005'),
                    (7105192006,710519,'WAWONTULAP','4','kelurahan','71','7105','710519','7105192006','WITA',NULL,NULL,0,'71.05.19.2006'),
                    (7105192007,710519,'SONDAKEN','4','kelurahan','71','7105','710519','7105192007','WITA',NULL,NULL,0,'71.05.19.2007'),
                    (7105192008,710519,'PUNGKOL','4','kelurahan','71','7105','710519','7105192008','WITA',NULL,NULL,0,'71.05.19.2008'),
                    (7105192009,710519,'RAPRAP','4','kelurahan','71','7105','710519','7105192009','WITA',NULL,NULL,0,'71.05.19.2009'),
                    (7105192010,710519,'PASLATEN SATU','4','kelurahan','71','7105','710519','7105192010','WITA',NULL,NULL,0,'71.05.19.2010'),
                    (7105192011,710519,'ARAKAN','4','kelurahan','71','7105','710519','7105192011','WITA',NULL,NULL,0,'71.05.19.2011'),
                    (7105212001,710521,'TONDEI','4','kelurahan','71','7105','710521','7105212001','WITA',NULL,NULL,0,'71.05.21.2001'),
                    (7105212002,710521,'TONDEI SATU','4','kelurahan','71','7105','710521','7105212002','WITA',NULL,NULL,0,'71.05.21.2002'),
                    (7105212003,710521,'TONDEI DUA','4','kelurahan','71','7105','710521','7105212003','WITA',NULL,NULL,0,'71.05.21.2003'),
                    (7105212004,710521,'RAANAN BARU','4','kelurahan','71','7105','710521','7105212004','WITA',NULL,NULL,0,'71.05.21.2004'),
                    (7105212005,710521,'RANAAN BARU SATU','4','kelurahan','71','7105','710521','7105212005','WITA',NULL,NULL,0,'71.05.21.2005'),
                    (7105212006,710521,'RANAAN BARU DUA','4','kelurahan','71','7105','710521','7105212006','WITA',NULL,NULL,0,'71.05.21.2006'),
                    (7105212007,710521,'TOYOPON','4','kelurahan','71','7105','710521','7105212007','WITA',NULL,NULL,0,'71.05.21.2007'),
                    (7105212008,710521,'KEROIT','4','kelurahan','71','7105','710521','7105212008','WITA',NULL,NULL,0,'71.05.21.2008'),
                    (7105222001,710522,'KARIMBOW','4','kelurahan','71','7105','710522','7105222001','WITA',NULL,NULL,0,'71.05.22.2001'),
                    (7105222002,710522,'KARIMBOW TALIKURAN','4','kelurahan','71','7105','710522','7105222002','WITA',NULL,NULL,0,'71.05.22.2002'),
                    (7105222003,710522,'TOKIN','4','kelurahan','71','7105','710522','7105222003','WITA',NULL,NULL,0,'71.05.22.2003'),
                    (7105222004,710522,'TOKIN BARU','4','kelurahan','71','7105','710522','7105222004','WITA',NULL,NULL,0,'71.05.22.2004'),
                    (7105222005,710522,'WANGA AMONGENA','4','kelurahan','71','7105','710522','7105222005','WITA',NULL,NULL,0,'71.05.22.2005'),
                    (7105222006,710522,'WANGA','4','kelurahan','71','7105','710522','7105222006','WITA',NULL,NULL,0,'71.05.22.2006'),
                    (7105222007,710522,'PICUAN','4','kelurahan','71','7105','710522','7105222007','WITA',NULL,NULL,0,'71.05.22.2007'),
                    (7105222008,710522,'PICUAN SATU','4','kelurahan','71','7105','710522','7105222008','WITA',NULL,NULL,0,'71.05.22.2008'),
                    (7105232001,710523,'TALAITAD','4','kelurahan','71','7105','710523','7105232001','WITA',NULL,NULL,0,'71.05.23.2001'),
                    (7105232002,710523,'SULUUN SATU','4','kelurahan','71','7105','710523','7105232002','WITA',NULL,NULL,0,'71.05.23.2002'),
                    (7105232003,710523,'SULUUN DUA','4','kelurahan','71','7105','710523','7105232003','WITA',NULL,NULL,0,'71.05.23.2003'),
                    (7105232004,710523,'SULUUN TIGA','4','kelurahan','71','7105','710523','7105232004','WITA',NULL,NULL,0,'71.05.23.2004'),
                    (7105232005,710523,'SULUUN EMPAT','4','kelurahan','71','7105','710523','7105232005','WITA',NULL,NULL,0,'71.05.23.2005'),
                    (7105232006,710523,'PINAPALANGKOW','4','kelurahan','71','7105','710523','7105232006','WITA',NULL,NULL,0,'71.05.23.2006'),
                    (7105232007,710523,'KAPOYA','4','kelurahan','71','7105','710523','7105232007','WITA',NULL,NULL,0,'71.05.23.2007'),
                    (7105232008,710523,'TALAITAD UTARA','4','kelurahan','71','7105','710523','7105232008','WITA',NULL,NULL,0,'71.05.23.2008'),
                    (7105232009,710523,'KAPOYA SATU','4','kelurahan','71','7105','710523','7105232009','WITA',NULL,NULL,0,'71.05.23.2009'),
                    (7106012001,710601,'MAKALISUNG','4','kelurahan','71','7106','710601','7106012001','WITA',NULL,NULL,0,'71.06.01.2001'),
                    (7106012002,710601,'WALEO','4','kelurahan','71','7106','710601','7106012002','WITA',NULL,NULL,0,'71.06.01.2002'),
                    (7106012003,710601,'LILANG','4','kelurahan','71','7106','710601','7106012003','WITA',NULL,NULL,0,'71.06.01.2003'),
                    (7106012004,710601,'LANSOT','4','kelurahan','71','7106','710601','7106012004','WITA',NULL,NULL,0,'71.06.01.2004'),
                    (7106012005,710601,'KEMA III','4','kelurahan','71','7106','710601','7106012005','WITA',NULL,NULL,0,'71.06.01.2005'),
                    (7106012006,710601,'KEMA II','4','kelurahan','71','7106','710601','7106012006','WITA',NULL,NULL,0,'71.06.01.2006'),
                    (7106012007,710601,'KEMA I','4','kelurahan','71','7106','710601','7106012007','WITA',NULL,NULL,0,'71.06.01.2007'),
                    (7106012008,710601,'TONTALETE','4','kelurahan','71','7106','710601','7106012008','WITA',NULL,NULL,0,'71.06.01.2008'),
                    (7106012009,710601,'TONTAALETE ROK-ROK','4','kelurahan','71','7106','710601','7106012009','WITA',NULL,NULL,0,'71.06.01.2009'),
                    (7106012010,710601,'WALEO DUA','4','kelurahan','71','7106','710601','7106012010','WITA',NULL,NULL,0,'71.06.01.2010'),
                    (7106022001,710602,'KAUDITAN II','4','kelurahan','71','7106','710602','7106022001','WITA',NULL,NULL,0,'71.06.02.2001'),
                    (7106022002,710602,'KAUDITAN I','4','kelurahan','71','7106','710602','7106022002','WITA',NULL,NULL,0,'71.06.02.2002'),
                    (7106022003,710602,'KAWILEY','4','kelurahan','71','7106','710602','7106022003','WITA',NULL,NULL,0,'71.06.02.2003'),
                    (7106022004,710602,'TREMAN','4','kelurahan','71','7106','710602','7106022004','WITA',NULL,NULL,0,'71.06.02.2004'),
                    (7106022005,710602,'KAIMA','4','kelurahan','71','7106','710602','7106022005','WITA',NULL,NULL,0,'71.06.02.2005'),
                    (7106022006,710602,'KAREGESAN','4','kelurahan','71','7106','710602','7106022006','WITA',NULL,NULL,0,'71.06.02.2006'),
                    (7106022007,710602,'KAASAR','4','kelurahan','71','7106','710602','7106022007','WITA',NULL,NULL,0,'71.06.02.2007'),
                    (7106022008,710602,'LEMBEAN','4','kelurahan','71','7106','710602','7106022008','WITA',NULL,NULL,0,'71.06.02.2008'),
                    (7106022009,710602,'PASLATEN','4','kelurahan','71','7106','710602','7106022009','WITA',NULL,NULL,0,'71.06.02.2009'),
                    (7106022010,710602,'TUMALUNTUNG','4','kelurahan','71','7106','710602','7106022010','WITA',NULL,NULL,0,'71.06.02.2010'),
                    (7106022011,710602,'WATUDAMBO','4','kelurahan','71','7106','710602','7106022011','WITA',NULL,NULL,0,'71.06.02.2011'),
                    (7106022012,710602,'WATUDAMBO DUA','4','kelurahan','71','7106','710602','7106022012','WITA',NULL,NULL,0,'71.06.02.2012'),
                    (7106031005,710603,'AIRMADIDI BAWAH','4','kelurahan','71','7106','710603','7106031005','WITA',NULL,NULL,0,'71.06.03.1005'),
                    (7106031006,710603,'RAP-RAP','4','kelurahan','71','7106','710603','7106031006','WITA',NULL,NULL,0,'71.06.03.1006'),
                    (7106031007,710603,'SARONSONG I','4','kelurahan','71','7106','710603','7106031007','WITA',NULL,NULL,0,'71.06.03.1007'),
                    (7106031008,710603,'AIRMADIDI ATAS','4','kelurahan','71','7106','710603','7106031008','WITA',NULL,NULL,0,'71.06.03.1008'),
                    (7106031009,710603,'SUKUR','4','kelurahan','71','7106','710603','7106031009','WITA',NULL,NULL,0,'71.06.03.1009'),
                    (7106031011,710603,'SARONGSONG II','4','kelurahan','71','7106','710603','7106031011','WITA',NULL,NULL,0,'71.06.03.1011'),
                    (7106032002,710603,'TANGGARI','4','kelurahan','71','7106','710603','7106032002','WITA',NULL,NULL,0,'71.06.03.2002'),
                    (7106032003,710603,'SAMPIRI','4','kelurahan','71','7106','710603','7106032003','WITA',NULL,NULL,0,'71.06.03.2003'),
                    (7106032004,710603,'SAWANGAN','4','kelurahan','71','7106','710603','7106032004','WITA',NULL,NULL,0,'71.06.03.2004'),
                    (7106042001,710604,'TIWOHO','4','kelurahan','71','7106','710604','7106042001','WITA',NULL,NULL,0,'71.06.04.2001'),
                    (7106042002,710604,'WORI','4','kelurahan','71','7106','710604','7106042002','WITA',NULL,NULL,0,'71.06.04.2002'),
                    (7106042003,710604,'KIMA BAJO','4','kelurahan','71','7106','710604','7106042003','WITA',NULL,NULL,0,'71.06.04.2003'),
                    (7106042004,710604,'TALAWAAN BANTIK','4','kelurahan','71','7106','710604','7106042004','WITA',NULL,NULL,0,'71.06.04.2004'),
                    (7106042005,710604,'TALAWAAN ATAS','4','kelurahan','71','7106','710604','7106042005','WITA',NULL,NULL,0,'71.06.04.2005'),
                    (7106042006,710604,'BUDO','4','kelurahan','71','7106','710604','7106042006','WITA',NULL,NULL,0,'71.06.04.2006'),
                    (7106042007,710604,'DARUNU','4','kelurahan','71','7106','710604','7106042007','WITA',NULL,NULL,0,'71.06.04.2007'),
                    (7106042008,710604,'MANTEHAGE III TINONGKO','4','kelurahan','71','7106','710604','7106042008','WITA',NULL,NULL,0,'71.06.04.2008'),
                    (7106042009,710604,'NAIN','4','kelurahan','71','7106','710604','7106042009','WITA',NULL,NULL,0,'71.06.04.2009'),
                    (7106042010,710604,'MANTEHAGE/BUHIAS','4','kelurahan','71','7106','710604','7106042010','WITA',NULL,NULL,0,'71.06.04.2010'),
                    (7106042011,710604,'MANTEHAGE/BANGO','4','kelurahan','71','7106','710604','7106042011','WITA',NULL,NULL,0,'71.06.04.2011'),
                    (7106042012,710604,'MANTEHAGE II TANGKASI','4','kelurahan','71','7106','710604','7106042012','WITA',NULL,NULL,0,'71.06.04.2012'),
                    (7106042013,710604,'KULU','4','kelurahan','71','7106','710604','7106042013','WITA',NULL,NULL,0,'71.06.04.2013'),
                    (7106042014,710604,'BULO','4','kelurahan','71','7106','710604','7106042014','WITA',NULL,NULL,0,'71.06.04.2014'),
                    (7106042015,710604,'LANSA','4','kelurahan','71','7106','710604','7106042015','WITA',NULL,NULL,0,'71.06.04.2015'),
                    (7106042016,710604,'LANTUNG','4','kelurahan','71','7106','710604','7106042016','WITA',NULL,NULL,0,'71.06.04.2016'),
                    (7106042017,710604,'PONTOH','4','kelurahan','71','7106','710604','7106042017','WITA',NULL,NULL,0,'71.06.04.2017'),
                    (7106042018,710604,'MINAESA','4','kelurahan','71','7106','710604','7106042018','WITA',NULL,NULL,0,'71.06.04.2018'),
                    (7106042019,710604,'NAIN TATAMPI','4','kelurahan','71','7106','710604','7106042019','WITA',NULL,NULL,0,'71.06.04.2019'),
                    (7106042020,710604,'NAIN  SATU','4','kelurahan','71','7106','710604','7106042020','WITA',NULL,NULL,0,'71.06.04.2020'),
                    (7106052003,710605,'MATUNGKAS','4','kelurahan','71','7106','710605','7106052003','WITA',NULL,NULL,0,'71.06.05.2003'),
                    (7106052004,710605,'LAIKIT','4','kelurahan','71','7106','710605','7106052004','WITA',NULL,NULL,0,'71.06.05.2004'),
                    (7106052005,710605,'KLABAT','4','kelurahan','71','7106','710605','7106052005','WITA',NULL,NULL,0,'71.06.05.2005'),
                    (7106052006,710605,'PINILIH','4','kelurahan','71','7106','710605','7106052006','WITA',NULL,NULL,0,'71.06.05.2006'),
                    (7106052007,710605,'TATELU','4','kelurahan','71','7106','710605','7106052007','WITA',NULL,NULL,0,'71.06.05.2007'),
                    (7106052008,710605,'WARUKAPAS','4','kelurahan','71','7106','710605','7106052008','WITA',NULL,NULL,0,'71.06.05.2008'),
                    (7106052009,710605,'TETEY','4','kelurahan','71','7106','710605','7106052009','WITA',NULL,NULL,0,'71.06.05.2009'),
                    (7106052013,710605,'WASIAN','4','kelurahan','71','7106','710605','7106052013','WITA',NULL,NULL,0,'71.06.05.2013'),
                    (7106052014,710605,'LUMPIAS','4','kelurahan','71','7106','710605','7106052014','WITA',NULL,NULL,0,'71.06.05.2014'),
                    (7106052016,710605,'DIMEMBE','4','kelurahan','71','7106','710605','7106052016','WITA',NULL,NULL,0,'71.06.05.2016'),
                    (7106052020,710605,'TATELU RONDOR','4','kelurahan','71','7106','710605','7106052020','WITA',NULL,NULL,0,'71.06.05.2020'),
                    (7106062001,710606,'GANGGA I','4','kelurahan','71','7106','710606','7106062001','WITA',NULL,NULL,0,'71.06.06.2001'),
                    (7106062002,710606,'GANGGA II','4','kelurahan','71','7106','710606','7106062002','WITA',NULL,NULL,0,'71.06.06.2002'),
                    (7106062003,710606,'TALISE','4','kelurahan','71','7106','710606','7106062003','WITA',NULL,NULL,0,'71.06.06.2003'),
                    (7106062004,710606,'AIRBANUA','4','kelurahan','71','7106','710606','7106062004','WITA',NULL,NULL,0,'71.06.06.2004'),
                    (7106062005,710606,'PALAES','4','kelurahan','71','7106','710606','7106062005','WITA',NULL,NULL,0,'71.06.06.2005'),
                    (7106062006,710606,'MALIAMBAO','4','kelurahan','71','7106','710606','7106062006','WITA',NULL,NULL,0,'71.06.06.2006'),
                    (7106062007,710606,'TERMAAL','4','kelurahan','71','7106','710606','7106062007','WITA',NULL,NULL,0,'71.06.06.2007'),
                    (7106062008,710606,'PAPUTUNGAN','4','kelurahan','71','7106','710606','7106062008','WITA',NULL,NULL,0,'71.06.06.2008'),
                    (7106062009,710606,'JAYAKARSA','4','kelurahan','71','7106','710606','7106062009','WITA',NULL,NULL,0,'71.06.06.2009'),
                    (7106062010,710606,'TANAH PUTIH','4','kelurahan','71','7106','710606','7106062010','WITA',NULL,NULL,0,'71.06.06.2010'),
                    (7106062011,710606,'BAHOI','4','kelurahan','71','7106','710606','7106062011','WITA',NULL,NULL,0,'71.06.06.2011'),
                    (7106062012,710606,'TARABITAN','4','kelurahan','71','7106','710606','7106062012','WITA',NULL,NULL,0,'71.06.06.2012'),
                    (7106062013,710606,'SEREI','4','kelurahan','71','7106','710606','7106062013','WITA',NULL,NULL,0,'71.06.06.2013'),
                    (7106062014,710606,'SONSILO','4','kelurahan','71','7106','710606','7106062014','WITA',NULL,NULL,0,'71.06.06.2014'),
                    (7106062015,710606,'MUBUNE','4','kelurahan','71','7106','710606','7106062015','WITA',NULL,NULL,0,'71.06.06.2015'),
                    (7106062016,710606,'MUNTE','4','kelurahan','71','7106','710606','7106062016','WITA',NULL,NULL,0,'71.06.06.2016'),
                    (7106062017,710606,'BULUTUI','4','kelurahan','71','7106','710606','7106062017','WITA',NULL,NULL,0,'71.06.06.2017'),
                    (7106062018,710606,'WAWUNIAN','4','kelurahan','71','7106','710606','7106062018','WITA',NULL,NULL,0,'71.06.06.2018'),
                    (7106062019,710606,'KINABUHUTAN','4','kelurahan','71','7106','710606','7106062019','WITA',NULL,NULL,0,'71.06.06.2019'),
                    (7106062020,710606,'TAMBUN','4','kelurahan','71','7106','710606','7106062020','WITA',NULL,NULL,0,'71.06.06.2020'),
                    (7106072008,710607,'LIKUPANG I','4','kelurahan','71','7106','710607','7106072008','WITA',NULL,NULL,0,'71.06.07.2008'),
                    (7106072009,710607,'LIKUPANG II','4','kelurahan','71','7106','710607','7106072009','WITA',NULL,NULL,0,'71.06.07.2009'),
                    (7106072010,710607,'SERAWET','4','kelurahan','71','7106','710607','7106072010','WITA',NULL,NULL,0,'71.06.07.2010'),
                    (7106072011,710607,'WINERU','4','kelurahan','71','7106','710607','7106072011','WITA',NULL,NULL,0,'71.06.07.2011'),
                    (7106072012,710607,'MAEN','4','kelurahan','71','7106','710607','7106072012','WITA',NULL,NULL,0,'71.06.07.2012'),
                    (7106072013,710607,'WINURI','4','kelurahan','71','7106','710607','7106072013','WITA',NULL,NULL,0,'71.06.07.2013'),
                    (7106072014,710607,'MARINSOW','4','kelurahan','71','7106','710607','7106072014','WITA',NULL,NULL,0,'71.06.07.2014'),
                    (7106072015,710607,'PULISAN','4','kelurahan','71','7106','710607','7106072015','WITA',NULL,NULL,0,'71.06.07.2015'),
                    (7106072016,710607,'KALINAUN','4','kelurahan','71','7106','710607','7106072016','WITA',NULL,NULL,0,'71.06.07.2016'),
                    (7106072017,710607,'RINONDORAN','4','kelurahan','71','7106','710607','7106072017','WITA',NULL,NULL,0,'71.06.07.2017'),
                    (7106072018,710607,'PINENEK','4','kelurahan','71','7106','710607','7106072018','WITA',NULL,NULL,0,'71.06.07.2018'),
                    (7106072019,710607,'LIHUNU','4','kelurahan','71','7106','710607','7106072019','WITA',NULL,NULL,0,'71.06.07.2019'),
                    (7106072020,710607,'KAHUHU','4','kelurahan','71','7106','710607','7106072020','WITA',NULL,NULL,0,'71.06.07.2020'),
                    (7106072021,710607,'LIBAS','4','kelurahan','71','7106','710607','7106072021','WITA',NULL,NULL,0,'71.06.07.2021'),
                    (7106072022,710607,'LIKUPANG KAMPUNG AMBONG','4','kelurahan','71','7106','710607','7106072022','WITA',NULL,NULL,0,'71.06.07.2022'),
                    (7106072023,710607,'KINUNANG','4','kelurahan','71','7106','710607','7106072023','WITA',NULL,NULL,0,'71.06.07.2023'),
                    (7106072024,710607,'RESETLEMEN','4','kelurahan','71','7106','710607','7106072024','WITA',NULL,NULL,0,'71.06.07.2024'),
                    (7106072025,710607,'EHE','4','kelurahan','71','7106','710607','7106072025','WITA',NULL,NULL,0,'71.06.07.2025'),
                    (7106082001,710608,'SUWAAN','4','kelurahan','71','7106','710608','7106082001','WITA',NULL,NULL,0,'71.06.08.2001'),
                    (7106082002,710608,'KUWIL','4','kelurahan','71','7106','710608','7106082002','WITA',NULL,NULL,0,'71.06.08.2002'),
                    (7106082003,710608,'KAWANGKOAN','4','kelurahan','71','7106','710608','7106082003','WITA',NULL,NULL,0,'71.06.08.2003'),
                    (7106082004,710608,'KOLONGAN','4','kelurahan','71','7106','710608','7106082004','WITA',NULL,NULL,0,'71.06.08.2004'),
                    (7106082005,710608,'MAUMBI','4','kelurahan','71','7106','710608','7106082005','WITA',NULL,NULL,0,'71.06.08.2005'),
                    (7106082006,710608,'KALEOSAN','4','kelurahan','71','7106','710608','7106082006','WITA',NULL,NULL,0,'71.06.08.2006'),
                    (7106082007,710608,'WATUTUMOU','4','kelurahan','71','7106','710608','7106082007','WITA',NULL,NULL,0,'71.06.08.2007'),
                    (7106082008,710608,'KOLONGAN TETEMPANGAN','4','kelurahan','71','7106','710608','7106082008','WITA',NULL,NULL,0,'71.06.08.2008'),
                    (7106082009,710608,'KAWANGKOAN BARU','4','kelurahan','71','7106','710608','7106082009','WITA',NULL,NULL,0,'71.06.08.2009'),
                    (7106082010,710608,'KALAWAT','4','kelurahan','71','7106','710608','7106082010','WITA',NULL,NULL,0,'71.06.08.2010'),
                    (7106082011,710608,'WATUTUMOU DUA','4','kelurahan','71','7106','710608','7106082011','WITA',NULL,NULL,0,'71.06.08.2011'),
                    (7106082012,710608,'WATUTUMOU TIGA','4','kelurahan','71','7106','710608','7106082012','WITA',NULL,NULL,0,'71.06.08.2012'),
                    (7106092001,710609,'PANIKI ATAS','4','kelurahan','71','7106','710609','7106092001','WITA',NULL,NULL,0,'71.06.09.2001'),
                    (7106092002,710609,'KOLONGAN','4','kelurahan','71','7106','710609','7106092002','WITA',NULL,NULL,0,'71.06.09.2002'),
                    (7106092003,710609,'TALAWAAN','4','kelurahan','71','7106','710609','7106092003','WITA',NULL,NULL,0,'71.06.09.2003'),
                    (7106092004,710609,'MAPANGET','4','kelurahan','71','7106','710609','7106092004','WITA',NULL,NULL,0,'71.06.09.2004'),
                    (7106092005,710609,'WUSA','4','kelurahan','71','7106','710609','7106092005','WITA',NULL,NULL,0,'71.06.09.2005'),
                    (7106092006,710609,'WARISA','4','kelurahan','71','7106','710609','7106092006','WITA',NULL,NULL,0,'71.06.09.2006'),
                    (7106092007,710609,'TUMBOHON','4','kelurahan','71','7106','710609','7106092007','WITA',NULL,NULL,0,'71.06.09.2007'),
                    (7106092008,710609,'WINETIN','4','kelurahan','71','7106','710609','7106092008','WITA',NULL,NULL,0,'71.06.09.2008'),
                    (7106092009,710609,'PATOKAAN','4','kelurahan','71','7106','710609','7106092009','WITA',NULL,NULL,0,'71.06.09.2009'),
                    (7106092010,710609,'TEEPWARISA','4','kelurahan','71','7106','710609','7106092010','WITA',NULL,NULL,0,'71.06.09.2010'),
                    (7106092011,710609,'WARISA KAMPUNG BARU','4','kelurahan','71','7106','710609','7106092011','WITA',NULL,NULL,0,'71.06.09.2011'),
                    (7106092012,710609,'PANIKI BARU','4','kelurahan','71','7106','710609','7106092012','WITA',NULL,NULL,0,'71.06.09.2012'),
                    (7106102001,710610,'KOKOLEH SATU','4','kelurahan','71','7106','710610','7106102001','WITA',NULL,NULL,0,'71.06.10.2001'),
                    (7106102002,710610,'KOKOLEH DUA','4','kelurahan','71','7106','710610','7106102002','WITA',NULL,NULL,0,'71.06.10.2002'),
                    (7106102003,710610,'PASLATEN','4','kelurahan','71','7106','710610','7106102003','WITA',NULL,NULL,0,'71.06.10.2003'),
                    (7106102004,710610,'KAWERUAN','4','kelurahan','71','7106','710610','7106102004','WITA',NULL,NULL,0,'71.06.10.2004'),
                    (7106102005,710610,'WANGURER','4','kelurahan','71','7106','710610','7106102005','WITA',NULL,NULL,0,'71.06.10.2005'),
                    (7106102006,710610,'BATU','4','kelurahan','71','7106','710610','7106102006','WITA',NULL,NULL,0,'71.06.10.2006'),
                    (7106102007,710610,'WEROT','4','kelurahan','71','7106','710610','7106102007','WITA',NULL,NULL,0,'71.06.10.2007'),
                    (7107011004,710701,'TOSURAYA','4','kelurahan','71','7107','710701','7107011004','WITA',NULL,NULL,0,'71.07.01.1004'),
                    (7107011005,710701,'WAWALI','4','kelurahan','71','7107','710701','7107011005','WITA',NULL,NULL,0,'71.07.01.1005'),
                    (7107011008,710701,'LOWU DUA','4','kelurahan','71','7107','710701','7107011008','WITA',NULL,NULL,0,'71.07.01.1008'),
                    (7107011009,710701,'LOWU SATU','4','kelurahan','71','7107','710701','7107011009','WITA',NULL,NULL,0,'71.07.01.1009'),
                    (7107011016,710701,'LOWU UTARA','4','kelurahan','71','7107','710701','7107011016','WITA',NULL,NULL,0,'71.07.01.1016'),
                    (7107011017,710701,'NATAAN','4','kelurahan','71','7107','710701','7107011017','WITA',NULL,NULL,0,'71.07.01.1017'),
                    (7107011018,710701,'TOSURAYA BARAT','4','kelurahan','71','7107','710701','7107011018','WITA',NULL,NULL,0,'71.07.01.1018'),
                    (7107011019,710701,'TOSURAYA SELATAN','4','kelurahan','71','7107','710701','7107011019','WITA',NULL,NULL,0,'71.07.01.1019'),
                    (7107011020,710701,'WAWALI PASAN','4','kelurahan','71','7107','710701','7107011020','WITA',NULL,NULL,0,'71.07.01.1020'),
                    (7107012003,710701,'RASI','4','kelurahan','71','7107','710701','7107012003','WITA',NULL,NULL,0,'71.07.01.2003'),
                    (7107012021,710701,'RASI SATU','4','kelurahan','71','7107','710701','7107012021','WITA',NULL,NULL,0,'71.07.01.2021'),
                    (7107022001,710702,'TATENGESAN','4','kelurahan','71','7107','710702','7107022001','WITA',NULL,NULL,0,'71.07.02.2001'),
                    (7107022002,710702,'WIAU','4','kelurahan','71','7107','710702','7107022002','WITA',NULL,NULL,0,'71.07.02.2002'),
                    (7107022003,710702,'BENTENAN','4','kelurahan','71','7107','710702','7107022003','WITA',NULL,NULL,0,'71.07.02.2003'),
                    (7107022004,710702,'TUMBAK','4','kelurahan','71','7107','710702','7107022004','WITA',NULL,NULL,0,'71.07.02.2004'),
                    (7107022005,710702,'MAKALU','4','kelurahan','71','7107','710702','7107022005','WITA',NULL,NULL,0,'71.07.02.2005'),
                    (7107022006,710702,'MINANGA','4','kelurahan','71','7107','710702','7107022006','WITA',NULL,NULL,0,'71.07.02.2006'),
                    (7107022007,710702,'MINANGA SATU','4','kelurahan','71','7107','710702','7107022007','WITA',NULL,NULL,0,'71.07.02.2007'),
                    (7107022008,710702,'BENTENAN INDAH','4','kelurahan','71','7107','710702','7107022008','WITA',NULL,NULL,0,'71.07.02.2008'),
                    (7107022009,710702,'MINANGA TIMUR','4','kelurahan','71','7107','710702','7107022009','WITA',NULL,NULL,0,'71.07.02.2009'),
                    (7107022010,710702,'MINANGA DUA','4','kelurahan','71','7107','710702','7107022010','WITA',NULL,NULL,0,'71.07.02.2010'),
                    (7107022011,710702,'MINANGA TIGA','4','kelurahan','71','7107','710702','7107022011','WITA',NULL,NULL,0,'71.07.02.2011'),
                    (7107022012,710702,'MAKALU SELATAN','4','kelurahan','71','7107','710702','7107022012','WITA',NULL,NULL,0,'71.07.02.2012'),
                    (7107022013,710702,'TATENGESAN SATU','4','kelurahan','71','7107','710702','7107022013','WITA',NULL,NULL,0,'71.07.02.2013'),
                    (7107022014,710702,'BENTENAN SATU','4','kelurahan','71','7107','710702','7107022014','WITA',NULL,NULL,0,'71.07.02.2014'),
                    (7107022015,710702,'TUMBAK MADANI','4','kelurahan','71','7107','710702','7107022015','WITA',NULL,NULL,0,'71.07.02.2015'),
                    (7107032001,710703,'MANGKIT','4','kelurahan','71','7107','710703','7107032001','WITA',NULL,NULL,0,'71.07.03.2001'),
                    (7107032002,710703,'BORGO','4','kelurahan','71','7107','710703','7107032002','WITA',NULL,NULL,0,'71.07.03.2002'),
                    (7107032003,710703,'BELANG','4','kelurahan','71','7107','710703','7107032003','WITA',NULL,NULL,0,'71.07.03.2003'),
                    (7107032004,710703,'BUKU','4','kelurahan','71','7107','710703','7107032004','WITA',NULL,NULL,0,'71.07.03.2004'),
                    (7107032005,710703,'BERINGIN','4','kelurahan','71','7107','710703','7107032005','WITA',NULL,NULL,0,'71.07.03.2005'),
                    (7107032006,710703,'TABABO','4','kelurahan','71','7107','710703','7107032006','WITA',NULL,NULL,0,'71.07.03.2006'),
                    (7107032007,710703,'WATULINEY','4','kelurahan','71','7107','710703','7107032007','WITA',NULL,NULL,0,'71.07.03.2007'),
                    (7107032008,710703,'MOLOMPAR','4','kelurahan','71','7107','710703','7107032008','WITA',NULL,NULL,0,'71.07.03.2008'),
                    (7107032009,710703,'BUKU UTARA','4','kelurahan','71','7107','710703','7107032009','WITA',NULL,NULL,0,'71.07.03.2009'),
                    (7107032010,710703,'BUKU SELATAN','4','kelurahan','71','7107','710703','7107032010','WITA',NULL,NULL,0,'71.07.03.2010'),
                    (7107032011,710703,'WATULINEY TENGAH','4','kelurahan','71','7107','710703','7107032011','WITA',NULL,NULL,0,'71.07.03.2011'),
                    (7107032012,710703,'WATULINEY INDAH','4','kelurahan','71','7107','710703','7107032012','WITA',NULL,NULL,0,'71.07.03.2012'),
                    (7107032013,710703,'MOLOMPAR UTARA','4','kelurahan','71','7107','710703','7107032013','WITA',NULL,NULL,0,'71.07.03.2013'),
                    (7107032014,710703,'MOLOMPAR TIMUR','4','kelurahan','71','7107','710703','7107032014','WITA',NULL,NULL,0,'71.07.03.2014'),
                    (7107032015,710703,'TABABO SELATAN','4','kelurahan','71','7107','710703','7107032015','WITA',NULL,NULL,0,'71.07.03.2015'),
                    (7107032016,710703,'BUKU TENGAH','4','kelurahan','71','7107','710703','7107032016','WITA',NULL,NULL,0,'71.07.03.2016'),
                    (7107032017,710703,'PONOSAKAN INDAH','4','kelurahan','71','7107','710703','7107032017','WITA',NULL,NULL,0,'71.07.03.2017'),
                    (7107032018,710703,'BUKU TENGGARA','4','kelurahan','71','7107','710703','7107032018','WITA',NULL,NULL,0,'71.07.03.2018'),
                    (7107032019,710703,'PONOSAKAN BELANG','4','kelurahan','71','7107','710703','7107032019','WITA',NULL,NULL,0,'71.07.03.2019'),
                    (7107032020,710703,'BORGO SATU','4','kelurahan','71','7107','710703','7107032020','WITA',NULL,NULL,0,'71.07.03.2020'),
                    (7107042001,710704,'RATATOTOK SATU','4','kelurahan','71','7107','710704','7107042001','WITA',NULL,NULL,0,'71.07.04.2001'),
                    (7107042002,710704,'RATATOTOK DUA','4','kelurahan','71','7107','710704','7107042002','WITA',NULL,NULL,0,'71.07.04.2002'),
                    (7107042003,710704,'RATATOTOK SELATAN','4','kelurahan','71','7107','710704','7107042003','WITA',NULL,NULL,0,'71.07.04.2003'),
                    (7107042004,710704,'RATATOTOK TIMUR','4','kelurahan','71','7107','710704','7107042004','WITA',NULL,NULL,0,'71.07.04.2004'),
                    (7107042005,710704,'BASAAN','4','kelurahan','71','7107','710704','7107042005','WITA',NULL,NULL,0,'71.07.04.2005'),
                    (7107042006,710704,'BASAAN SATU','4','kelurahan','71','7107','710704','7107042006','WITA',NULL,NULL,0,'71.07.04.2006'),
                    (7107042007,710704,'MOREA','4','kelurahan','71','7107','710704','7107042007','WITA',NULL,NULL,0,'71.07.04.2007'),
                    (7107042008,710704,'MOREA SATU','4','kelurahan','71','7107','710704','7107042008','WITA',NULL,NULL,0,'71.07.04.2008'),
                    (7107042009,710704,'SOYOAN','4','kelurahan','71','7107','710704','7107042009','WITA',NULL,NULL,0,'71.07.04.2009'),
                    (7107042010,710704,'BASAAN DUA','4','kelurahan','71','7107','710704','7107042010','WITA',NULL,NULL,0,'71.07.04.2010'),
                    (7107042011,710704,'RATATOTOK UTARA','4','kelurahan','71','7107','710704','7107042011','WITA',NULL,NULL,0,'71.07.04.2011'),
                    (7107042012,710704,'RATATOTOK TENGGARA','4','kelurahan','71','7107','710704','7107042012','WITA',NULL,NULL,0,'71.07.04.2012'),
                    (7107042013,710704,'RATATOTOK TENGAH','4','kelurahan','71','7107','710704','7107042013','WITA',NULL,NULL,0,'71.07.04.2013'),
                    (7107042014,710704,'RATATOTOK','4','kelurahan','71','7107','710704','7107042014','WITA',NULL,NULL,0,'71.07.04.2014'),
                    (7107042015,710704,'RATATOTOK MUARA','4','kelurahan','71','7107','710704','7107042015','WITA',NULL,NULL,0,'71.07.04.2015'),
                    (7107052006,710705,'TONSAWANG','4','kelurahan','71','7107','710705','7107052006','WITA',NULL,NULL,0,'71.07.05.2006'),
                    (7107052008,710705,'BETELAN','4','kelurahan','71','7107','710705','7107052008','WITA',NULL,NULL,0,'71.07.05.2008'),
                    (7107052009,710705,'TOMBATU SATU','4','kelurahan','71','7107','710705','7107052009','WITA',NULL,NULL,0,'71.07.05.2009'),
                    (7107052012,710705,'KALI','4','kelurahan','71','7107','710705','7107052012','WITA',NULL,NULL,0,'71.07.05.2012'),
                    (7107052014,710705,'PISA','4','kelurahan','71','7107','710705','7107052014','WITA',NULL,NULL,0,'71.07.05.2014'),
                    (7107052015,710705,'TOMBATU','4','kelurahan','71','7107','710705','7107052015','WITA',NULL,NULL,0,'71.07.05.2015'),
                    (7107052016,710705,'BETELAN SATU','4','kelurahan','71','7107','710705','7107052016','WITA',NULL,NULL,0,'71.07.05.2016'),
                    (7107052017,710705,'KALI OKI','4','kelurahan','71','7107','710705','7107052017','WITA',NULL,NULL,0,'71.07.05.2017'),
                    (7107052018,710705,'TOMBATU TIGA SELATAN','4','kelurahan','71','7107','710705','7107052018','WITA',NULL,NULL,0,'71.07.05.2018'),
                    (7107052019,710705,'TOMBATU TIGA TIMUR','4','kelurahan','71','7107','710705','7107052019','WITA',NULL,NULL,0,'71.07.05.2019'),
                    (7107052020,710705,'TONSAWANG SATU','4','kelurahan','71','7107','710705','7107052020','WITA',NULL,NULL,0,'71.07.05.2020'),
                    (7107062003,710706,'RANOKETANG ATAS','4','kelurahan','71','7107','710706','7107062003','WITA',NULL,NULL,0,'71.07.06.2003'),
                    (7107062004,710706,'TONDANAUW','4','kelurahan','71','7107','710706','7107062004','WITA',NULL,NULL,0,'71.07.06.2004'),
                    (7107062005,710706,'LOBU SATU','4','kelurahan','71','7107','710706','7107062005','WITA',NULL,NULL,0,'71.07.06.2005'),
                    (7107062006,710706,'LOBU DUA','4','kelurahan','71','7107','710706','7107062006','WITA',NULL,NULL,0,'71.07.06.2006'),
                    (7107062017,710706,'TONDANOUW SATU','4','kelurahan','71','7107','710706','7107062017','WITA',NULL,NULL,0,'71.07.06.2017'),
                    (7107062018,710706,'TOUNDANOUW ATAS','4','kelurahan','71','7107','710706','7107062018','WITA',NULL,NULL,0,'71.07.06.2018'),
                    (7107062019,710706,'RANOKETANG ATAS SATU','4','kelurahan','71','7107','710706','7107062019','WITA',NULL,NULL,0,'71.07.06.2019'),
                    (7107062020,710706,'LOBU KOTA','4','kelurahan','71','7107','710706','7107062020','WITA',NULL,NULL,0,'71.07.06.2020'),
                    (7107062021,710706,'LOBU ATAS','4','kelurahan','71','7107','710706','7107062021','WITA',NULL,NULL,0,'71.07.06.2021'),
                    (7107062022,710706,'LOBU','4','kelurahan','71','7107','710706','7107062022','WITA',NULL,NULL,0,'71.07.06.2022'),
                    (7107072001,710707,'KALAIT','4','kelurahan','71','7107','710707','7107072001','WITA',NULL,NULL,0,'71.07.07.2001'),
                    (7107072002,710707,'KALAIT SATU','4','kelurahan','71','7107','710707','7107072002','WITA',NULL,NULL,0,'71.07.07.2002'),
                    (7107072003,710707,'KALAIT DUA','4','kelurahan','71','7107','710707','7107072003','WITA',NULL,NULL,0,'71.07.07.2003'),
                    (7107072004,710707,'KALAIT TIGA','4','kelurahan','71','7107','710707','7107072004','WITA',NULL,NULL,0,'71.07.07.2004'),
                    (7107072005,710707,'LOWATAG','4','kelurahan','71','7107','710707','7107072005','WITA',NULL,NULL,0,'71.07.07.2005'),
                    (7107072006,710707,'BUNAG','4','kelurahan','71','7107','710707','7107072006','WITA',NULL,NULL,0,'71.07.07.2006'),
                    (7107072007,710707,'BANGA','4','kelurahan','71','7107','710707','7107072007','WITA',NULL,NULL,0,'71.07.07.2007'),
                    (7107072008,710707,'TAMBELANG','4','kelurahan','71','7107','710707','7107072008','WITA',NULL,NULL,0,'71.07.07.2008'),
                    (7107072009,710707,'RANOAKO','4','kelurahan','71','7107','710707','7107072009','WITA',NULL,NULL,0,'71.07.07.2009'),
                    (7107072010,710707,'SUHUYON','4','kelurahan','71','7107','710707','7107072010','WITA',NULL,NULL,0,'71.07.07.2010'),
                    (7107082001,710708,'SILIAN','4','kelurahan','71','7107','710708','7107082001','WITA',NULL,NULL,0,'71.07.08.2001'),
                    (7107082002,710708,'SILIAN UTARA','4','kelurahan','71','7107','710708','7107082002','WITA',NULL,NULL,0,'71.07.08.2002'),
                    (7107082003,710708,'SILIAN SATU','4','kelurahan','71','7107','710708','7107082003','WITA',NULL,NULL,0,'71.07.08.2003'),
                    (7107082004,710708,'SILIAN SELATAN','4','kelurahan','71','7107','710708','7107082004','WITA',NULL,NULL,0,'71.07.08.2004'),
                    (7107082005,710708,'SILIAN DUA','4','kelurahan','71','7107','710708','7107082005','WITA',NULL,NULL,0,'71.07.08.2005'),
                    (7107082006,710708,'SILIAN TENGAH','4','kelurahan','71','7107','710708','7107082006','WITA',NULL,NULL,0,'71.07.08.2006'),
                    (7107082007,710708,'SILIAN TIGA','4','kelurahan','71','7107','710708','7107082007','WITA',NULL,NULL,0,'71.07.08.2007'),
                    (7107082008,710708,'SILIAN BARAT','4','kelurahan','71','7107','710708','7107082008','WITA',NULL,NULL,0,'71.07.08.2008'),
                    (7107082009,710708,'SILIAN KOTA','4','kelurahan','71','7107','710708','7107082009','WITA',NULL,NULL,0,'71.07.08.2009'),
                    (7107082010,710708,'SILIAN TIMUR','4','kelurahan','71','7107','710708','7107082010','WITA',NULL,NULL,0,'71.07.08.2010'),
                    (7107092001,710709,'MOLOMPAR','4','kelurahan','71','7107','710709','7107092001','WITA',NULL,NULL,0,'71.07.09.2001'),
                    (7107092002,710709,'MOLOMPAR SATU','4','kelurahan','71','7107','710709','7107092002','WITA',NULL,NULL,0,'71.07.09.2002'),
                    (7107092003,710709,'MOLOMPAR ATAS','4','kelurahan','71','7107','710709','7107092003','WITA',NULL,NULL,0,'71.07.09.2003'),
                    (7107092004,710709,'MOLOMPAR DUA','4','kelurahan','71','7107','710709','7107092004','WITA',NULL,NULL,0,'71.07.09.2004'),
                    (7107092005,710709,'MOLOMPAR DUA UTARA','4','kelurahan','71','7107','710709','7107092005','WITA',NULL,NULL,0,'71.07.09.2005'),
                    (7107092006,710709,'MOLOMPAR DUA SELATAN','4','kelurahan','71','7107','710709','7107092006','WITA',NULL,NULL,0,'71.07.09.2006'),
                    (7107092007,710709,'MUNDUNG','4','kelurahan','71','7107','710709','7107092007','WITA',NULL,NULL,0,'71.07.09.2007'),
                    (7107092008,710709,'MUNDUNG SATU','4','kelurahan','71','7107','710709','7107092008','WITA',NULL,NULL,0,'71.07.09.2008'),
                    (7107092009,710709,'ESANDOM','4','kelurahan','71','7107','710709','7107092009','WITA',NULL,NULL,0,'71.07.09.2009'),
                    (7107092010,710709,'ESANDOM SATU','4','kelurahan','71','7107','710709','7107092010','WITA',NULL,NULL,0,'71.07.09.2010'),
                    (7107092011,710709,'ESANDOM DUA','4','kelurahan','71','7107','710709','7107092011','WITA',NULL,NULL,0,'71.07.09.2011'),
                    (7107102001,710710,'TOMBATU DUA','4','kelurahan','71','7107','710710','7107102001','WITA',NULL,NULL,0,'71.07.10.2001'),
                    (7107102002,710710,'TOMBATU DUA UTARA','4','kelurahan','71','7107','710710','7107102002','WITA',NULL,NULL,0,'71.07.10.2002'),
                    (7107102003,710710,'TOMBATU DUA BARAT','4','kelurahan','71','7107','710710','7107102003','WITA',NULL,NULL,0,'71.07.10.2003'),
                    (7107102004,710710,'TOMBATU DUA TENGAH','4','kelurahan','71','7107','710710','7107102004','WITA',NULL,NULL,0,'71.07.10.2004'),
                    (7107102005,710710,'TOMBATU TIGA','4','kelurahan','71','7107','710710','7107102005','WITA',NULL,NULL,0,'71.07.10.2005'),
                    (7107102006,710710,'TOMBATU TIGA TENGAH','4','kelurahan','71','7107','710710','7107102006','WITA',NULL,NULL,0,'71.07.10.2006'),
                    (7107102007,710710,'KUYANGA','4','kelurahan','71','7107','710710','7107102007','WITA',NULL,NULL,0,'71.07.10.2007'),
                    (7107102008,710710,'KUYANGA SATU','4','kelurahan','71','7107','710710','7107102008','WITA',NULL,NULL,0,'71.07.10.2008'),
                    (7107102009,710710,'WINORANGIAN','4','kelurahan','71','7107','710710','7107102009','WITA',NULL,NULL,0,'71.07.10.2009'),
                    (7107102010,710710,'WINORANGIAN SATU','4','kelurahan','71','7107','710710','7107102010','WITA',NULL,NULL,0,'71.07.10.2010'),
                    (7107112001,710711,'TOWUNTU','4','kelurahan','71','7107','710711','7107112001','WITA',NULL,NULL,0,'71.07.11.2001'),
                    (7107112002,710711,'TOWUNTU TIMUR','4','kelurahan','71','7107','710711','7107112002','WITA',NULL,NULL,0,'71.07.11.2002'),
                    (7107112003,710711,'TOWUNTU BARAT','4','kelurahan','71','7107','710711','7107112003','WITA',NULL,NULL,0,'71.07.11.2003'),
                    (7107112004,710711,'TOLOMBUKAN','4','kelurahan','71','7107','710711','7107112004','WITA',NULL,NULL,0,'71.07.11.2004'),
                    (7107112005,710711,'TOLOMBUKAN SATU','4','kelurahan','71','7107','710711','7107112005','WITA',NULL,NULL,0,'71.07.11.2005'),
                    (7107112006,710711,'TOLOMBUKAN BARAT','4','kelurahan','71','7107','710711','7107112006','WITA',NULL,NULL,0,'71.07.11.2006'),
                    (7107112007,710711,'LIWUTUNG','4','kelurahan','71','7107','710711','7107112007','WITA',NULL,NULL,0,'71.07.11.2007'),
                    (7107112008,710711,'LIWUTUNG SATU','4','kelurahan','71','7107','710711','7107112008','WITA',NULL,NULL,0,'71.07.11.2008'),
                    (7107112009,710711,'LIWUTUNG DUA','4','kelurahan','71','7107','710711','7107112009','WITA',NULL,NULL,0,'71.07.11.2009'),
                    (7107112010,710711,'PONIKI','4','kelurahan','71','7107','710711','7107112010','WITA',NULL,NULL,0,'71.07.11.2010'),
                    (7107112011,710711,'MAULIT','4','kelurahan','71','7107','710711','7107112011','WITA',NULL,NULL,0,'71.07.11.2011'),
                    (7107122001,710712,'WIOI','4','kelurahan','71','7107','710712','7107122001','WITA',NULL,NULL,0,'71.07.12.2001'),
                    (7107122002,710712,'WIOI SATU','4','kelurahan','71','7107','710712','7107122002','WITA',NULL,NULL,0,'71.07.12.2002'),
                    (7107122003,710712,'WIOI DUA','4','kelurahan','71','7107','710712','7107122003','WITA',NULL,NULL,0,'71.07.12.2003'),
                    (7107122004,710712,'WIOI TIGA','4','kelurahan','71','7107','710712','7107122004','WITA',NULL,NULL,0,'71.07.12.2004'),
                    (7107122005,710712,'WIOI TIMUR','4','kelurahan','71','7107','710712','7107122005','WITA',NULL,NULL,0,'71.07.12.2005'),
                    (7107122006,710712,'PANGU','4','kelurahan','71','7107','710712','7107122006','WITA',NULL,NULL,0,'71.07.12.2006'),
                    (7107122007,710712,'PANGU SATU','4','kelurahan','71','7107','710712','7107122007','WITA',NULL,NULL,0,'71.07.12.2007'),
                    (7107122008,710712,'PANGU DUA','4','kelurahan','71','7107','710712','7107122008','WITA',NULL,NULL,0,'71.07.12.2008'),
                    (7107122009,710712,'WONGKAI','4','kelurahan','71','7107','710712','7107122009','WITA',NULL,NULL,0,'71.07.12.2009'),
                    (7107122010,710712,'WONGKAI SATU','4','kelurahan','71','7107','710712','7107122010','WITA',NULL,NULL,0,'71.07.12.2010'),
                    (7108012001,710801,'SANGKUB I','4','kelurahan','71','7108','710801','7108012001','WITA',NULL,NULL,0,'71.08.01.2001'),
                    (7108012002,710801,'BUSISINGO','4','kelurahan','71','7108','710801','7108012002','WITA',NULL,NULL,0,'71.08.01.2002'),
                    (7108012003,710801,'SANG TOMBOLANG','4','kelurahan','71','7108','710801','7108012003','WITA',NULL,NULL,0,'71.08.01.2003'),
                    (7108012004,710801,'TOMBOLANGO','4','kelurahan','71','7108','710801','7108012004','WITA',NULL,NULL,0,'71.08.01.2004'),
                    (7108012005,710801,'PANGKUSA','4','kelurahan','71','7108','710801','7108012005','WITA',NULL,NULL,0,'71.08.01.2005'),
                    (7108012006,710801,'SANGKUB II','4','kelurahan','71','7108','710801','7108012006','WITA',NULL,NULL,0,'71.08.01.2006'),
                    (7108012007,710801,'SIDODADI','4','kelurahan','71','7108','710801','7108012007','WITA',NULL,NULL,0,'71.08.01.2007'),
                    (7108012008,710801,'SAMPIRO','4','kelurahan','71','7108','710801','7108012008','WITA',NULL,NULL,0,'71.08.01.2008'),
                    (7108012009,710801,'SANGKUB III','4','kelurahan','71','7108','710801','7108012009','WITA',NULL,NULL,0,'71.08.01.2009'),
                    (7108012010,710801,'BUSISINGO UTARA','4','kelurahan','71','7108','710801','7108012010','WITA',NULL,NULL,0,'71.08.01.2010'),
                    (7108012011,710801,'AMPENG SEMBEKA','4','kelurahan','71','7108','710801','7108012011','WITA',NULL,NULL,0,'71.08.01.2011'),
                    (7108012012,710801,'SUKA MAKMUR','4','kelurahan','71','7108','710801','7108012012','WITA',NULL,NULL,0,'71.08.01.2012'),
                    (7108012013,710801,'SANGKUB TIMUR','4','kelurahan','71','7108','710801','7108012013','WITA',NULL,NULL,0,'71.08.01.2013'),
                    (7108012014,710801,'MONOMPIA','4','kelurahan','71','7108','710801','7108012014','WITA',NULL,NULL,0,'71.08.01.2014'),
                    (7108012015,710801,'MOKUSATO','4','kelurahan','71','7108','710801','7108012015','WITA',NULL,NULL,0,'71.08.01.2015'),
                    (7108012016,710801,'SANGKUB EMPAT','4','kelurahan','71','7108','710801','7108012016','WITA',NULL,NULL,0,'71.08.01.2016'),
                    (7108021001,710802,'BINTAUNA','4','kelurahan','71','7108','710802','7108021001','WITA',NULL,NULL,0,'71.08.02.1001'),
                    (7108022002,710802,'HUNTUK','4','kelurahan','71','7108','710802','7108022002','WITA',NULL,NULL,0,'71.08.02.2002'),
                    (7108022003,710802,'MOME','4','kelurahan','71','7108','710802','7108022003','WITA',NULL,NULL,0,'71.08.02.2003'),
                    (7108022004,710802,'KUHANGA','4','kelurahan','71','7108','710802','7108022004','WITA',NULL,NULL,0,'71.08.02.2004'),
                    (7108022005,710802,'PADANG','4','kelurahan','71','7108','710802','7108022005','WITA',NULL,NULL,0,'71.08.02.2005'),
                    (7108022006,710802,'PIMPI','4','kelurahan','71','7108','710802','7108022006','WITA',NULL,NULL,0,'71.08.02.2006'),
                    (7108022007,710802,'BUNIA','4','kelurahan','71','7108','710802','7108022007','WITA',NULL,NULL,0,'71.08.02.2007'),
                    (7108022008,710802,'TALAGA','4','kelurahan','71','7108','710802','7108022008','WITA',NULL,NULL,0,'71.08.02.2008'),
                    (7108022009,710802,'BATULINTIK','4','kelurahan','71','7108','710802','7108022009','WITA',NULL,NULL,0,'71.08.02.2009'),
                    (7108022010,710802,'BINTAUNA PANTAI','4','kelurahan','71','7108','710802','7108022010','WITA',NULL,NULL,0,'71.08.02.2010'),
                    (7108022011,710802,'MINANGA','4','kelurahan','71','7108','710802','7108022011','WITA',NULL,NULL,0,'71.08.02.2011'),
                    (7108022012,710802,'KOPI','4','kelurahan','71','7108','710802','7108022012','WITA',NULL,NULL,0,'71.08.02.2012'),
                    (7108022013,710802,'VOA''A','4','kelurahan','71','7108','710802','7108022013','WITA',NULL,NULL,0,'71.08.02.2013'),
                    (7108022014,710802,'BUNONG','4','kelurahan','71','7108','710802','7108022014','WITA',NULL,NULL,0,'71.08.02.2014'),
                    (7108022015,710802,'PADANG BARAT','4','kelurahan','71','7108','710802','7108022015','WITA',NULL,NULL,0,'71.08.02.2015'),
                    (7108022016,710802,'VAHUTA','4','kelurahan','71','7108','710802','7108022016','WITA',NULL,NULL,0,'71.08.02.2016'),
                    (7108032001,710803,'MOKODITEK','4','kelurahan','71','7108','710803','7108032001','WITA',NULL,NULL,0,'71.08.03.2001'),
                    (7108032002,710803,'NUNUKA','4','kelurahan','71','7108','710803','7108032002','WITA',NULL,NULL,0,'71.08.03.2002'),
                    (7108032003,710803,'SALEO','4','kelurahan','71','7108','710803','7108032003','WITA',NULL,NULL,0,'71.08.03.2003'),
                    (7108032004,710803,'BOHABAK I','4','kelurahan','71','7108','710803','7108032004','WITA',NULL,NULL,0,'71.08.03.2004'),
                    (7108032005,710803,'BOHABAK II','4','kelurahan','71','7108','710803','7108032005','WITA',NULL,NULL,0,'71.08.03.2005'),
                    (7108032006,710803,'BINJEITA','4','kelurahan','71','7108','710803','7108032006','WITA',NULL,NULL,0,'71.08.03.2006'),
                    (7108032007,710803,'BIONTONG','4','kelurahan','71','7108','710803','7108032007','WITA',NULL,NULL,0,'71.08.03.2007'),
                    (7108032008,710803,'BIONTONG I','4','kelurahan','71','7108','710803','7108032008','WITA',NULL,NULL,0,'71.08.03.2008'),
                    (7108032009,710803,'BIONTONG II','4','kelurahan','71','7108','710803','7108032009','WITA',NULL,NULL,0,'71.08.03.2009'),
                    (7108032010,710803,'BINUANGA','4','kelurahan','71','7108','710803','7108032010','WITA',NULL,NULL,0,'71.08.03.2010'),
                    (7108032011,710803,'BOHABAK III','4','kelurahan','71','7108','710803','7108032011','WITA',NULL,NULL,0,'71.08.03.2011'),
                    (7108032012,710803,'BOHABAK IV','4','kelurahan','71','7108','710803','7108032012','WITA',NULL,NULL,0,'71.08.03.2012'),
                    (7108032013,710803,'BINJEITA I','4','kelurahan','71','7108','710803','7108032013','WITA',NULL,NULL,0,'71.08.03.2013'),
                    (7108032014,710803,'BINJEITA II','4','kelurahan','71','7108','710803','7108032014','WITA',NULL,NULL,0,'71.08.03.2014'),
                    (7108032015,710803,'MOKODITEK I','4','kelurahan','71','7108','710803','7108032015','WITA',NULL,NULL,0,'71.08.03.2015'),
                    (7108032016,710803,'LIPU BOGU','4','kelurahan','71','7108','710803','7108032016','WITA',NULL,NULL,0,'71.08.03.2016'),
                    (7108032017,710803,'BINUNI','4','kelurahan','71','7108','710803','7108032017','WITA',NULL,NULL,0,'71.08.03.2017'),
                    (7108032018,710803,'TANJUNG LABOU','4','kelurahan','71','7108','710803','7108032018','WITA',NULL,NULL,0,'71.08.03.2018'),
                    (7108032019,710803,'NAGARA','4','kelurahan','71','7108','710803','7108032019','WITA',NULL,NULL,0,'71.08.03.2019'),
                    (7108032020,710803,'SALEO SATU','4','kelurahan','71','7108','710803','7108032020','WITA',NULL,NULL,0,'71.08.03.2020'),
                    (7108042001,710804,'PAKU','4','kelurahan','71','7108','710804','7108042001','WITA',NULL,NULL,0,'71.08.04.2001'),
                    (7108042002,710804,'OLLOT','4','kelurahan','71','7108','710804','7108042002','WITA',NULL,NULL,0,'71.08.04.2002'),
                    (7108042003,710804,'SONUO','4','kelurahan','71','7108','710804','7108042003','WITA',NULL,NULL,0,'71.08.04.2003'),
                    (7108042004,710804,'JAMBUSARANG','4','kelurahan','71','7108','710804','7108042004','WITA',NULL,NULL,0,'71.08.04.2004'),
                    (7108042005,710804,'TALAGA TOMOAGU','4','kelurahan','71','7108','710804','7108042005','WITA',NULL,NULL,0,'71.08.04.2005'),
                    (7108042006,710804,'BOLANGITANG','4','kelurahan','71','7108','710804','7108042006','WITA',NULL,NULL,0,'71.08.04.2006'),
                    (7108042007,710804,'LANGI','4','kelurahan','71','7108','710804','7108042007','WITA',NULL,NULL,0,'71.08.04.2007'),
                    (7108042008,710804,'IYOK','4','kelurahan','71','7108','710804','7108042008','WITA',NULL,NULL,0,'71.08.04.2008'),
                    (7108042009,710804,'TOTE','4','kelurahan','71','7108','710804','7108042009','WITA',NULL,NULL,0,'71.08.04.2009'),
                    (7108042010,710804,'WAKAT','4','kelurahan','71','7108','710804','7108042010','WITA',NULL,NULL,0,'71.08.04.2010'),
                    (7108042011,710804,'OLLOT I','4','kelurahan','71','7108','710804','7108042011','WITA',NULL,NULL,0,'71.08.04.2011'),
                    (7108042012,710804,'OLLOT II','4','kelurahan','71','7108','710804','7108042012','WITA',NULL,NULL,0,'71.08.04.2012'),
                    (7108042013,710804,'BOLANGITANG I','4','kelurahan','71','7108','710804','7108042013','WITA',NULL,NULL,0,'71.08.04.2013'),
                    (7108042014,710804,'BOLANGITANG II','4','kelurahan','71','7108','710804','7108042014','WITA',NULL,NULL,0,'71.08.04.2014'),
                    (7108042015,710804,'TALAGA','4','kelurahan','71','7108','710804','7108042015','WITA',NULL,NULL,0,'71.08.04.2015'),
                    (7108042016,710804,'TANJUNG BUAYA','4','kelurahan','71','7108','710804','7108042016','WITA',NULL,NULL,0,'71.08.04.2016'),
                    (7108042017,710804,'KEIMANGA','4','kelurahan','71','7108','710804','7108042017','WITA',NULL,NULL,0,'71.08.04.2017'),
                    (7108042018,710804,'PAKU SELATAN','4','kelurahan','71','7108','710804','7108042018','WITA',NULL,NULL,0,'71.08.04.2018'),
                    (7108052001,710805,'SOLO','4','kelurahan','71','7108','710805','7108052001','WITA',NULL,NULL,0,'71.08.05.2001'),
                    (7108052002,710805,'BOROKO','4','kelurahan','71','7108','710805','7108052002','WITA',NULL,NULL,0,'71.08.05.2002'),
                    (7108052003,710805,'BIGO','4','kelurahan','71','7108','710805','7108052003','WITA',NULL,NULL,0,'71.08.05.2003'),
                    (7108052004,710805,'KUALA','4','kelurahan','71','7108','710805','7108052004','WITA',NULL,NULL,0,'71.08.05.2004'),
                    (7108052005,710805,'PONTAK','4','kelurahan','71','7108','710805','7108052005','WITA',NULL,NULL,0,'71.08.05.2005'),
                    (7108052006,710805,'INOMUNGA','4','kelurahan','71','7108','710805','7108052006','WITA',NULL,NULL,0,'71.08.05.2006'),
                    (7108052007,710805,'KOMUS II','4','kelurahan','71','7108','710805','7108052007','WITA',NULL,NULL,0,'71.08.05.2007'),
                    (7108052008,710805,'BOROKO TIMUR','4','kelurahan','71','7108','710805','7108052008','WITA',NULL,NULL,0,'71.08.05.2008'),
                    (7108052009,710805,'KUALA UTARA','4','kelurahan','71','7108','710805','7108052009','WITA',NULL,NULL,0,'71.08.05.2009'),
                    (7108052010,710805,'GIHANG','4','kelurahan','71','7108','710805','7108052010','WITA',NULL,NULL,0,'71.08.05.2010'),
                    (7108052011,710805,'BOROKO UTARA','4','kelurahan','71','7108','710805','7108052011','WITA',NULL,NULL,0,'71.08.05.2011'),
                    (7108052012,710805,'BIGO SELATAN','4','kelurahan','71','7108','710805','7108052012','WITA',NULL,NULL,0,'71.08.05.2012'),
                    (7108052013,710805,'SOLIGIR','4','kelurahan','71','7108','710805','7108052013','WITA',NULL,NULL,0,'71.08.05.2013'),
                    (7108052014,710805,'INOMUNGA UTARA','4','kelurahan','71','7108','710805','7108052014','WITA',NULL,NULL,0,'71.08.05.2014'),
                    (7108052015,710805,'KOMUS DUA TIMUR','4','kelurahan','71','7108','710805','7108052015','WITA',NULL,NULL,0,'71.08.05.2015'),
                    (7108062001,710806,'KOMUS I','4','kelurahan','71','7108','710806','7108062001','WITA',NULL,NULL,0,'71.08.06.2001'),
                    (7108062002,710806,'TUNTUNG','4','kelurahan','71','7108','710806','7108062002','WITA',NULL,NULL,0,'71.08.06.2002'),
                    (7108062003,710806,'BATU TAJAM','4','kelurahan','71','7108','710806','7108062003','WITA',NULL,NULL,0,'71.08.06.2003'),
                    (7108062004,710806,'DALAPULI','4','kelurahan','71','7108','710806','7108062004','WITA',NULL,NULL,0,'71.08.06.2004'),
                    (7108062005,710806,'BUKO','4','kelurahan','71','7108','710806','7108062005','WITA',NULL,NULL,0,'71.08.06.2005'),
                    (7108062006,710806,'DENGI','4','kelurahan','71','7108','710806','7108062006','WITA',NULL,NULL,0,'71.08.06.2006'),
                    (7108062007,710806,'TOMBULANG','4','kelurahan','71','7108','710806','7108062007','WITA',NULL,NULL,0,'71.08.06.2007'),
                    (7108062008,710806,'TUNTULOW','4','kelurahan','71','7108','710806','7108062008','WITA',NULL,NULL,0,'71.08.06.2008'),
                    (7108062009,710806,'KAYU OGU','4','kelurahan','71','7108','710806','7108062009','WITA',NULL,NULL,0,'71.08.06.2009'),
                    (7108062010,710806,'TANJUNG SIDUPA','4','kelurahan','71','7108','710806','7108062010','WITA',NULL,NULL,0,'71.08.06.2010'),
                    (7108062011,710806,'BUKO SELATAN','4','kelurahan','71','7108','710806','7108062011','WITA',NULL,NULL,0,'71.08.06.2011'),
                    (7108062012,710806,'BUSATO','4','kelurahan','71','7108','710806','7108062012','WITA',NULL,NULL,0,'71.08.06.2012'),
                    (7108062013,710806,'BATU BANTAYO','4','kelurahan','71','7108','710806','7108062013','WITA',NULL,NULL,0,'71.08.06.2013'),
                    (7108062014,710806,'PADANGO','4','kelurahan','71','7108','710806','7108062014','WITA',NULL,NULL,0,'71.08.06.2014'),
                    (7108062015,710806,'TUNTULOW UTARA','4','kelurahan','71','7108','710806','7108062015','WITA',NULL,NULL,0,'71.08.06.2015'),
                    (7108062016,710806,'DALAPULI TIMUR','4','kelurahan','71','7108','710806','7108062016','WITA',NULL,NULL,0,'71.08.06.2016'),
                    (7108062017,710806,'DALAPULI BARAT','4','kelurahan','71','7108','710806','7108062017','WITA',NULL,NULL,0,'71.08.06.2017'),
                    (7108062018,710806,'BUKO UTARA','4','kelurahan','71','7108','710806','7108062018','WITA',NULL,NULL,0,'71.08.06.2018'),
                    (7108062019,710806,'TAMBULANG TIMUR','4','kelurahan','71','7108','710806','7108062019','WITA',NULL,NULL,0,'71.08.06.2019'),
                    (7108062020,710806,'TAMBULANG PANTAI','4','kelurahan','71','7108','710806','7108062020','WITA',NULL,NULL,0,'71.08.06.2020'),
                    (7108062021,710806,'TUNTUNG TIMUR','4','kelurahan','71','7108','710806','7108062021','WITA',NULL,NULL,0,'71.08.06.2021'),
                    (7108062022,710806,'DUINI','4','kelurahan','71','7108','710806','7108062022','WITA',NULL,NULL,0,'71.08.06.2022'),
                    (7109011009,710901,'BEBALI','4','kelurahan','71','7109','710901','7109011009','WITA',NULL,NULL,0,'71.09.01.1009'),
                    (7109011010,710901,'TATAHADENG','4','kelurahan','71','7109','710901','7109011010','WITA',NULL,NULL,0,'71.09.01.1010'),
                    (7109011011,710901,'TARORANE','4','kelurahan','71','7109','710901','7109011011','WITA',NULL,NULL,0,'71.09.01.1011'),
                    (7109011012,710901,'AKESIMBEKA','4','kelurahan','71','7109','710901','7109011012','WITA',NULL,NULL,0,'71.09.01.1012'),
                    (7109011013,710901,'BAHU','4','kelurahan','71','7109','710901','7109011013','WITA',NULL,NULL,0,'71.09.01.1013'),
                    (7109012001,710901,'BUKIDE','4','kelurahan','71','7109','710901','7109012001','WITA',NULL,NULL,0,'71.09.01.2001'),
                    (7109012002,710901,'APELAWO','4','kelurahan','71','7109','710901','7109012002','WITA',NULL,NULL,0,'71.09.01.2002'),
                    (7109012003,710901,'DEAHE','4','kelurahan','71','7109','710901','7109012003','WITA',NULL,NULL,0,'71.09.01.2003'),
                    (7109012004,710901,'LIA','4','kelurahan','71','7109','710901','7109012004','WITA',NULL,NULL,0,'71.09.01.2004'),
                    (7109012005,710901,'KANANG','4','kelurahan','71','7109','710901','7109012005','WITA',NULL,NULL,0,'71.09.01.2005'),
                    (7109012006,710901,'BUISE','4','kelurahan','71','7109','710901','7109012006','WITA',NULL,NULL,0,'71.09.01.2006'),
                    (7109012007,710901,'KARALUNG','4','kelurahan','71','7109','710901','7109012007','WITA',NULL,NULL,0,'71.09.01.2007'),
                    (7109012008,710901,'DAME','4','kelurahan','71','7109','710901','7109012008','WITA',NULL,NULL,0,'71.09.01.2008'),
                    (7109012014,710901,'DAME I','4','kelurahan','71','7109','710901','7109012014','WITA',NULL,NULL,0,'71.09.01.2014'),
                    (7109012015,710901,'LIA SATU','4','kelurahan','71','7109','710901','7109012015','WITA',NULL,NULL,0,'71.09.01.2015'),
                    (7109012016,710901,'KARALUNG  SATU','4','kelurahan','71','7109','710901','7109012016','WITA',NULL,NULL,0,'71.09.01.2016'),
                    (7109021002,710902,'PASENG','4','kelurahan','71','7109','710902','7109021002','WITA',NULL,NULL,0,'71.09.02.1002'),
                    (7109021003,710902,'PANIKI','4','kelurahan','71','7109','710902','7109021003','WITA',NULL,NULL,0,'71.09.02.1003'),
                    (7109021004,710902,'ONDONG','4','kelurahan','71','7109','710902','7109021004','WITA',NULL,NULL,0,'71.09.02.1004'),
                    (7109022001,710902,'PELING SAWANG','4','kelurahan','71','7109','710902','7109022001','WITA',NULL,NULL,0,'71.09.02.2001'),
                    (7109022005,710902,'KANAWONG','4','kelurahan','71','7109','710902','7109022005','WITA',NULL,NULL,0,'71.09.02.2005'),
                    (7109022006,710902,'BUMBIHA','4','kelurahan','71','7109','710902','7109022006','WITA',NULL,NULL,0,'71.09.02.2006'),
                    (7109022007,710902,'PEHE','4','kelurahan','71','7109','710902','7109022007','WITA',NULL,NULL,0,'71.09.02.2007'),
                    (7109022008,710902,'LEHI','4','kelurahan','71','7109','710902','7109022008','WITA',NULL,NULL,0,'71.09.02.2008'),
                    (7109022009,710902,'PELING','4','kelurahan','71','7109','710902','7109022009','WITA',NULL,NULL,0,'71.09.02.2009'),
                    (7109022010,710902,'MAKALEHI','4','kelurahan','71','7109','710902','7109022010','WITA',NULL,NULL,0,'71.09.02.2010'),
                    (7109022011,710902,'MAKALEHI UTARA','4','kelurahan','71','7109','710902','7109022011','WITA',NULL,NULL,0,'71.09.02.2011'),
                    (7109022012,710902,'MAKALEHI TIMUR','4','kelurahan','71','7109','710902','7109022012','WITA',NULL,NULL,0,'71.09.02.2012'),
                    (7109031001,710903,'BAHOI','4','kelurahan','71','7109','710903','7109031001','WITA',NULL,NULL,0,'71.09.03.1001'),
                    (7109031002,710903,'BALEHUMARA','4','kelurahan','71','7109','710903','7109031002','WITA',NULL,NULL,0,'71.09.03.1002'),
                    (7109032003,710903,'LESAH','4','kelurahan','71','7109','710903','7109032003','WITA',NULL,NULL,0,'71.09.03.2003'),
                    (7109032004,710903,'BOTO','4','kelurahan','71','7109','710903','7109032004','WITA',NULL,NULL,0,'71.09.03.2004'),
                    (7109032005,710903,'MOHONGSAWANG','4','kelurahan','71','7109','710903','7109032005','WITA',NULL,NULL,0,'71.09.03.2005'),
                    (7109032006,710903,'APENGSALA','4','kelurahan','71','7109','710903','7109032006','WITA',NULL,NULL,0,'71.09.03.2006'),
                    (7109032007,710903,'MULENGAN','4','kelurahan','71','7109','710903','7109032007','WITA',NULL,NULL,0,'71.09.03.2007'),
                    (7109032008,710903,'MAHANGIANG','4','kelurahan','71','7109','710903','7109032008','WITA',NULL,NULL,0,'71.09.03.2008'),
                    (7109032009,710903,'TULUSAN','4','kelurahan','71','7109','710903','7109032009','WITA',NULL,NULL,0,'71.09.03.2009'),
                    (7109032010,710903,'HAASI','4','kelurahan','71','7109','710903','7109032010','WITA',NULL,NULL,0,'71.09.03.2010'),
                    (7109032011,710903,'PUMPENTE','4','kelurahan','71','7109','710903','7109032011','WITA',NULL,NULL,0,'71.09.03.2011'),
                    (7109032012,710903,'LAINGPATEHI','4','kelurahan','71','7109','710903','7109032012','WITA',NULL,NULL,0,'71.09.03.2012'),
                    (7109032013,710903,'LESAH RENDE','4','kelurahan','71','7109','710903','7109032013','WITA',NULL,NULL,0,'71.09.03.2013'),
                    (7109032014,710903,'BARANGKA PEHE','4','kelurahan','71','7109','710903','7109032014','WITA',NULL,NULL,0,'71.09.03.2014'),
                    (7109032015,710903,'PAHIAMA','4','kelurahan','71','7109','710903','7109032015','WITA',NULL,NULL,0,'71.09.03.2015'),
                    (7109042001,710904,'MALA','4','kelurahan','71','7109','710904','7109042001','WITA',NULL,NULL,0,'71.09.04.2001'),
                    (7109042002,710904,'PANGIROLONG','4','kelurahan','71','7109','710904','7109042002','WITA',NULL,NULL,0,'71.09.04.2002'),
                    (7109042003,710904,'SAWANG','4','kelurahan','71','7109','710904','7109042003','WITA',NULL,NULL,0,'71.09.04.2003'),
                    (7109042004,710904,'BANDIL','4','kelurahan','71','7109','710904','7109042004','WITA',NULL,NULL,0,'71.09.04.2004'),
                    (7109042005,710904,'BIAU','4','kelurahan','71','7109','710904','7109042005','WITA',NULL,NULL,0,'71.09.04.2005'),
                    (7109042006,710904,'BALIRANGENG','4','kelurahan','71','7109','710904','7109042006','WITA',NULL,NULL,0,'71.09.04.2006'),
                    (7109042007,710904,'BUHIAS','4','kelurahan','71','7109','710904','7109042007','WITA',NULL,NULL,0,'71.09.04.2007'),
                    (7109042008,710904,'TAPILE','4','kelurahan','71','7109','710904','7109042008','WITA',NULL,NULL,0,'71.09.04.2008'),
                    (7109042009,710904,'LAHOPANG','4','kelurahan','71','7109','710904','7109042009','WITA',NULL,NULL,0,'71.09.04.2009'),
                    (7109042010,710904,'BINALU','4','kelurahan','71','7109','710904','7109042010','WITA',NULL,NULL,0,'71.09.04.2010'),
                    (7109042011,710904,'KALIHIANG','4','kelurahan','71','7109','710904','7109042011','WITA',NULL,NULL,0,'71.09.04.2011'),
                    (7109042012,710904,'PAHEPA','4','kelurahan','71','7109','710904','7109042012','WITA',NULL,NULL,0,'71.09.04.2012'),
                    (7109042013,710904,'BIAU SEHA','4','kelurahan','71','7109','710904','7109042013','WITA',NULL,NULL,0,'71.09.04.2013'),
                    (7109042014,710904,'MATOLE','4','kelurahan','71','7109','710904','7109042014','WITA',NULL,NULL,0,'71.09.04.2014'),
                    (7109052001,710905,'TANAKI','4','kelurahan','71','7109','710905','7109052001','WITA',NULL,NULL,0,'71.09.05.2001'),
                    (7109052002,710905,'KAPETA','4','kelurahan','71','7109','710905','7109052002','WITA',NULL,NULL,0,'71.09.05.2002'),
                    (7109052003,710905,'TALAWID','4','kelurahan','71','7109','710905','7109052003','WITA',NULL,NULL,0,'71.09.05.2003'),
                    (7109052004,710905,'LAGHAENG','4','kelurahan','71','7109','710905','7109052004','WITA',NULL,NULL,0,'71.09.05.2004'),
                    (7109052005,710905,'MAKOA','4','kelurahan','71','7109','710905','7109052005','WITA',NULL,NULL,0,'71.09.05.2005'),
                    (7109052006,710905,'BATUSENGGO','4','kelurahan','71','7109','710905','7109052006','WITA',NULL,NULL,0,'71.09.05.2006'),
                    (7109052007,710905,'MAHUNENI','4','kelurahan','71','7109','710905','7109052007','WITA',NULL,NULL,0,'71.09.05.2007'),
                    (7109062001,710906,'BULANGAN','4','kelurahan','71','7109','710906','7109062001','WITA',NULL,NULL,0,'71.09.06.2001'),
                    (7109062002,710906,'MINANGA','4','kelurahan','71','7109','710906','7109062002','WITA',NULL,NULL,0,'71.09.06.2002'),
                    (7109062003,710906,'WO','4','kelurahan','71','7109','710906','7109062003','WITA',NULL,NULL,0,'71.09.06.2003'),
                    (7109062004,710906,'BAWOLEU','4','kelurahan','71','7109','710906','7109062004','WITA',NULL,NULL,0,'71.09.06.2004'),
                    (7109062005,710906,'LUMBO','4','kelurahan','71','7109','710906','7109062005','WITA',NULL,NULL,0,'71.09.06.2005'),
                    (7109062006,710906,'BAWO','4','kelurahan','71','7109','710906','7109062006','WITA',NULL,NULL,0,'71.09.06.2006'),
                    (7109072001,710907,'BUANG','4','kelurahan','71','7109','710907','7109072001','WITA',NULL,NULL,0,'71.09.07.2001'),
                    (7109072002,710907,'KARUNGO','4','kelurahan','71','7109','710907','7109072002','WITA',NULL,NULL,0,'71.09.07.2002'),
                    (7109072003,710907,'LAMANGGO','4','kelurahan','71','7109','710907','7109072003','WITA',NULL,NULL,0,'71.09.07.2003'),
                    (7109072004,710907,'DALINSAHENG','4','kelurahan','71','7109','710907','7109072004','WITA',NULL,NULL,0,'71.09.07.2004'),
                    (7109072005,710907,'TOPE','4','kelurahan','71','7109','710907','7109072005','WITA',NULL,NULL,0,'71.09.07.2005'),
                    (7109082001,710908,'KINALI','4','kelurahan','71','7109','710908','7109082001','WITA',NULL,NULL,0,'71.09.08.2001'),
                    (7109082002,710908,'HIUNG','4','kelurahan','71','7109','710908','7109082002','WITA',NULL,NULL,0,'71.09.08.2002'),
                    (7109082003,710908,'KIAWANG','4','kelurahan','71','7109','710908','7109082003','WITA',NULL,NULL,0,'71.09.08.2003'),
                    (7109082004,710908,'KAWAHANG','4','kelurahan','71','7109','710908','7109082004','WITA',NULL,NULL,0,'71.09.08.2004'),
                    (7109082005,710908,'BATUBULAN','4','kelurahan','71','7109','710908','7109082005','WITA',NULL,NULL,0,'71.09.08.2005'),
                    (7109082006,710908,'NAMENG','4','kelurahan','71','7109','710908','7109082006','WITA',NULL,NULL,0,'71.09.08.2006'),
                    (7109082007,710908,'MINI','4','kelurahan','71','7109','710908','7109082007','WITA',NULL,NULL,0,'71.09.08.2007'),
                    (7109082008,710908,'WINANGUN','4','kelurahan','71','7109','710908','7109082008','WITA',NULL,NULL,0,'71.09.08.2008'),
                    (7109092001,710909,'SALILI','4','kelurahan','71','7109','710909','7109092001','WITA',NULL,NULL,0,'71.09.09.2001'),
                    (7109092002,710909,'BEONG','4','kelurahan','71','7109','710909','7109092002','WITA',NULL,NULL,0,'71.09.09.2002'),
                    (7109092003,710909,'LAI','4','kelurahan','71','7109','710909','7109092003','WITA',NULL,NULL,0,'71.09.09.2003'),
                    (7109092004,710909,'DOMPASE','4','kelurahan','71','7109','710909','7109092004','WITA',NULL,NULL,0,'71.09.09.2004'),
                    (7109102001,710910,'HUMBIA','4','kelurahan','71','7109','710910','7109102001','WITA',NULL,NULL,0,'71.09.10.2001'),
                    (7109102002,710910,'KISIHANG','4','kelurahan','71','7109','710910','7109102002','WITA',NULL,NULL,0,'71.09.10.2002'),
                    (7109102003,710910,'BIRA KIAMA','4','kelurahan','71','7109','710910','7109102003','WITA',NULL,NULL,0,'71.09.10.2003'),
                    (7109102004,710910,'BUHA','4','kelurahan','71','7109','710910','7109102004','WITA',NULL,NULL,0,'71.09.10.2004'),
                    (7109102005,710910,'BATUMAWIRA','4','kelurahan','71','7109','710910','7109102005','WITA',NULL,NULL,0,'71.09.10.2005'),
                    (7109102006,710910,'BIRARIKEI','4','kelurahan','71','7109','710910','7109102006','WITA',NULL,NULL,0,'71.09.10.2006'),
                    (7110012001,711001,'KAYUMOYONDI','4','kelurahan','71','7110','711001','7110012001','WITA',NULL,NULL,0,'71.10.01.2001'),
                    (7110012002,711001,'TOMBOLIKAT','4','kelurahan','71','7110','711001','7110012002','WITA',NULL,NULL,0,'71.10.01.2002'),
                    (7110012003,711001,'TUTUYAN','4','kelurahan','71','7110','711001','7110012003','WITA',NULL,NULL,0,'71.10.01.2003'),
                    (7110012004,711001,'TOGID','4','kelurahan','71','7110','711001','7110012004','WITA',NULL,NULL,0,'71.10.01.2004'),
                    (7110012005,711001,'DODAP','4','kelurahan','71','7110','711001','7110012005','WITA',NULL,NULL,0,'71.10.01.2005'),
                    (7110012006,711001,'DODAP PANTAI','4','kelurahan','71','7110','711001','7110012006','WITA',NULL,NULL,0,'71.10.01.2006'),
                    (7110012007,711001,'TUTUYAN II','4','kelurahan','71','7110','711001','7110012007','WITA',NULL,NULL,0,'71.10.01.2007'),
                    (7110012008,711001,'TUTUYAN III','4','kelurahan','71','7110','711001','7110012008','WITA',NULL,NULL,0,'71.10.01.2008'),
                    (7110012009,711001,'TOMBOLIKAT SELATAN','4','kelurahan','71','7110','711001','7110012009','WITA',NULL,NULL,0,'71.10.01.2009'),
                    (7110012010,711001,'DODOP MIKASA','4','kelurahan','71','7110','711001','7110012010','WITA',NULL,NULL,0,'71.10.01.2010'),
                    (7110022001,711002,'KOTABUNAN','4','kelurahan','71','7110','711002','7110022001','WITA',NULL,NULL,0,'71.10.02.2001'),
                    (7110022002,711002,'BUYAT','4','kelurahan','71','7110','711002','7110022002','WITA',NULL,NULL,0,'71.10.02.2002'),
                    (7110022003,711002,'BULAWAN','4','kelurahan','71','7110','711002','7110022003','WITA',NULL,NULL,0,'71.10.02.2003'),
                    (7110022004,711002,'PARET','4','kelurahan','71','7110','711002','7110022004','WITA',NULL,NULL,0,'71.10.02.2004'),
                    (7110022005,711002,'BUKAKA','4','kelurahan','71','7110','711002','7110022005','WITA',NULL,NULL,0,'71.10.02.2005'),
                    (7110022006,711002,'BUYAT I','4','kelurahan','71','7110','711002','7110022006','WITA',NULL,NULL,0,'71.10.02.2006'),
                    (7110022007,711002,'BUYAT II','4','kelurahan','71','7110','711002','7110022007','WITA',NULL,NULL,0,'71.10.02.2007'),
                    (7110022008,711002,'BUYAT SELATAN','4','kelurahan','71','7110','711002','7110022008','WITA',NULL,NULL,0,'71.10.02.2008'),
                    (7110022009,711002,'BUYAT TENGAH','4','kelurahan','71','7110','711002','7110022009','WITA',NULL,NULL,0,'71.10.02.2009'),
                    (7110022010,711002,'BUYAT  BARAT','4','kelurahan','71','7110','711002','7110022010','WITA',NULL,NULL,0,'71.10.02.2010'),
                    (7110022011,711002,'BULAWAN SATU','4','kelurahan','71','7110','711002','7110022011','WITA',NULL,NULL,0,'71.10.02.2011'),
                    (7110022012,711002,'BULAWAN DUA','4','kelurahan','71','7110','711002','7110022012','WITA',NULL,NULL,0,'71.10.02.2012'),
                    (7110022013,711002,'KOTABUNAN SELATAN','4','kelurahan','71','7110','711002','7110022013','WITA',NULL,NULL,0,'71.10.02.2013'),
                    (7110022014,711002,'KOTABUNAN BARAT','4','kelurahan','71','7110','711002','7110022014','WITA',NULL,NULL,0,'71.10.02.2014'),
                    (7110022015,711002,'PARET TIMUR','4','kelurahan','71','7110','711002','7110022015','WITA',NULL,NULL,0,'71.10.02.2015'),
                    (7110032001,711003,'IDUMUN','4','kelurahan','71','7110','711003','7110032001','WITA',NULL,NULL,0,'71.10.03.2001'),
                    (7110032002,711003,'MATABULU','4','kelurahan','71','7110','711003','7110032002','WITA',NULL,NULL,0,'71.10.03.2002'),
                    (7110032003,711003,'NUANGAN','4','kelurahan','71','7110','711003','7110032003','WITA',NULL,NULL,0,'71.10.03.2003'),
                    (7110032006,711003,'BAI','4','kelurahan','71','7110','711003','7110032006','WITA',NULL,NULL,0,'71.10.03.2006'),
                    (7110032007,711003,'JIKO BELANGA','4','kelurahan','71','7110','711003','7110032007','WITA',NULL,NULL,0,'71.10.03.2007'),
                    (7110032010,711003,'NUANGAN I','4','kelurahan','71','7110','711003','7110032010','WITA',NULL,NULL,0,'71.10.03.2010'),
                    (7110032011,711003,'IYOK','4','kelurahan','71','7110','711003','7110032011','WITA',NULL,NULL,0,'71.10.03.2011'),
                    (7110032012,711003,'LOYOW','4','kelurahan','71','7110','711003','7110032012','WITA',NULL,NULL,0,'71.10.03.2012'),
                    (7110032014,711003,'MATABULU TIMUR','4','kelurahan','71','7110','711003','7110032014','WITA',NULL,NULL,0,'71.10.03.2014'),
                    (7110032018,711003,'NUANGAN BARAT','4','kelurahan','71','7110','711003','7110032018','WITA',NULL,NULL,0,'71.10.03.2018'),
                    (7110032019,711003,'NUANGAN SELATAN','4','kelurahan','71','7110','711003','7110032019','WITA',NULL,NULL,0,'71.10.03.2019'),
                    (7110042001,711004,'MODAYAG','4','kelurahan','71','7110','711004','7110042001','WITA',NULL,NULL,0,'71.10.04.2001'),
                    (7110042002,711004,'LIBERIA','4','kelurahan','71','7110','711004','7110042002','WITA',NULL,NULL,0,'71.10.04.2002'),
                    (7110042003,711004,'PURWOREJO','4','kelurahan','71','7110','711004','7110042003','WITA',NULL,NULL,0,'71.10.04.2003'),
                    (7110042007,711004,'BUYANDI','4','kelurahan','71','7110','711004','7110042007','WITA',NULL,NULL,0,'71.10.04.2007'),
                    (7110042008,711004,'TOBONGON','4','kelurahan','71','7110','711004','7110042008','WITA',NULL,NULL,0,'71.10.04.2008'),
                    (7110042009,711004,'LANUT','4','kelurahan','71','7110','711004','7110042009','WITA',NULL,NULL,0,'71.10.04.2009'),
                    (7110042010,711004,'BADARO','4','kelurahan','71','7110','711004','7110042010','WITA',NULL,NULL,0,'71.10.04.2010'),
                    (7110042011,711004,'MODAYAG II','4','kelurahan','71','7110','711004','7110042011','WITA',NULL,NULL,0,'71.10.04.2011'),
                    (7110042012,711004,'MODAYAG III','4','kelurahan','71','7110','711004','7110042012','WITA',NULL,NULL,0,'71.10.04.2012'),
                    (7110042013,711004,'PURWOREJO TIMUR','4','kelurahan','71','7110','711004','7110042013','WITA',NULL,NULL,0,'71.10.04.2013'),
                    (7110042014,711004,'LIBERIA TIMUR','4','kelurahan','71','7110','711004','7110042014','WITA',NULL,NULL,0,'71.10.04.2014'),
                    (7110042016,711004,'PURWOREJO TENGAH','4','kelurahan','71','7110','711004','7110042016','WITA',NULL,NULL,0,'71.10.04.2016'),
                    (7110042021,711004,'CANDI REJO','4','kelurahan','71','7110','711004','7110042021','WITA',NULL,NULL,0,'71.10.04.2021'),
                    (7110042022,711004,'SUMBER REJO','4','kelurahan','71','7110','711004','7110042022','WITA',NULL,NULL,0,'71.10.04.2022'),
                    (7110052001,711005,'MOYONGKOTA','4','kelurahan','71','7110','711005','7110052001','WITA',NULL,NULL,0,'71.10.05.2001'),
                    (7110052002,711005,'BANGUNAN WUWUK','4','kelurahan','71','7110','711005','7110052002','WITA',NULL,NULL,0,'71.10.05.2002'),
                    (7110052003,711005,'BONGKUDAI BARAT','4','kelurahan','71','7110','711005','7110052003','WITA',NULL,NULL,0,'71.10.05.2003'),
                    (7110052004,711005,'BONGKUDAI','4','kelurahan','71','7110','711005','7110052004','WITA',NULL,NULL,0,'71.10.05.2004'),
                    (7110052005,711005,'MOYONGKOTA BARU','4','kelurahan','71','7110','711005','7110052005','WITA',NULL,NULL,0,'71.10.05.2005'),
                    (7110052006,711005,'MOONOW','4','kelurahan','71','7110','711005','7110052006','WITA',NULL,NULL,0,'71.10.05.2006'),
                    (7110052007,711005,'INATON','4','kelurahan','71','7110','711005','7110052007','WITA',NULL,NULL,0,'71.10.05.2007'),
                    (7110052008,711005,'BANGUNAN WUWUK TIMUR','4','kelurahan','71','7110','711005','7110052008','WITA',NULL,NULL,0,'71.10.05.2008'),
                    (7110052009,711005,'PINONOBATUAN','4','kelurahan','71','7110','711005','7110052009','WITA',NULL,NULL,0,'71.10.05.2009'),
                    (7110052010,711005,'TANGATON','4','kelurahan','71','7110','711005','7110052010','WITA',NULL,NULL,0,'71.10.05.2010'),
                    (7110062001,711006,'MOTONGKAD UTARA','4','kelurahan','71','7110','711006','7110062001','WITA',NULL,NULL,0,'71.10.06.2001'),
                    (7110062002,711006,'MOTONGKAD','4','kelurahan','71','7110','711006','7110062002','WITA',NULL,NULL,0,'71.10.06.2002'),
                    (7110062003,711006,'MOTONGKAD SELATAN','4','kelurahan','71','7110','711006','7110062003','WITA',NULL,NULL,0,'71.10.06.2003'),
                    (7110062004,711006,'ATOGA','4','kelurahan','71','7110','711006','7110062004','WITA',NULL,NULL,0,'71.10.06.2004'),
                    (7110062005,711006,'ATOGA TIMUR','4','kelurahan','71','7110','711006','7110062005','WITA',NULL,NULL,0,'71.10.06.2005'),
                    (7110062006,711006,'MOTONGKAD TENGAH','4','kelurahan','71','7110','711006','7110062006','WITA',NULL,NULL,0,'71.10.06.2006'),
                    (7110062007,711006,'MOLOBOG','4','kelurahan','71','7110','711006','7110062007','WITA',NULL,NULL,0,'71.10.06.2007'),
                    (7110062008,711006,'MOLOBOG BARAT','4','kelurahan','71','7110','711006','7110062008','WITA',NULL,NULL,0,'71.10.06.2008'),
                    (7110062009,711006,'JIKO','4','kelurahan','71','7110','711006','7110062009','WITA',NULL,NULL,0,'71.10.06.2009'),
                    (7110062010,711006,'JIKO UTARA','4','kelurahan','71','7110','711006','7110062010','WITA',NULL,NULL,0,'71.10.06.2010'),
                    (7110062011,711006,'MOLOBOG TIMUR','4','kelurahan','71','7110','711006','7110062011','WITA',NULL,NULL,0,'71.10.06.2011'),
                    (7110072001,711007,'MOOAT','4','kelurahan','71','7110','711007','7110072001','WITA',NULL,NULL,0,'71.10.07.2001'),
                    (7110072002,711007,'BONGKUDAI SELATAN','4','kelurahan','71','7110','711007','7110072002','WITA',NULL,NULL,0,'71.10.07.2002'),
                    (7110072003,711007,'BONGKUDAI BARU','4','kelurahan','71','7110','711007','7110072003','WITA',NULL,NULL,0,'71.10.07.2003'),
                    (7110072004,711007,'BONGKUDAI UTARA','4','kelurahan','71','7110','711007','7110072004','WITA',NULL,NULL,0,'71.10.07.2004'),
                    (7110072005,711007,'BONGKUDAI TIMUR','4','kelurahan','71','7110','711007','7110072005','WITA',NULL,NULL,0,'71.10.07.2005'),
                    (7110072006,711007,'GUAAN','4','kelurahan','71','7110','711007','7110072006','WITA',NULL,NULL,0,'71.10.07.2006'),
                    (7110072007,711007,'MOTOTOMPIAAN','4','kelurahan','71','7110','711007','7110072007','WITA',NULL,NULL,0,'71.10.07.2007'),
                    (7110072008,711007,'MOKITOMPIA','4','kelurahan','71','7110','711007','7110072008','WITA',NULL,NULL,0,'71.10.07.2008'),
                    (7110072009,711007,'KOKAPOI','4','kelurahan','71','7110','711007','7110072009','WITA',NULL,NULL,0,'71.10.07.2009'),
                    (7110072010,711007,'KOKAPOI TIMUR','4','kelurahan','71','7110','711007','7110072010','WITA',NULL,NULL,0,'71.10.07.2010'),
                    (7111012004,711101,'TANGAGAH','4','kelurahan','71','7111','711101','7111012004','WITA',NULL,NULL,0,'71.11.01.2004'),
                    (7111012005,711101,'SALONGO','4','kelurahan','71','7111','711101','7111012005','WITA',NULL,NULL,0,'71.11.01.2005'),
                    (7111012006,711101,'TOLUAYA','4','kelurahan','71','7111','711101','7111012006','WITA',NULL,NULL,0,'71.11.01.2006'),
                    (7111012007,711101,'MOLIBAGU','4','kelurahan','71','7111','711101','7111012007','WITA',NULL,NULL,0,'71.11.01.2007'),
                    (7111012008,711101,'POPODU','4','kelurahan','71','7111','711101','7111012008','WITA',NULL,NULL,0,'71.11.01.2008'),
                    (7111012009,711101,'TOLONDADU','4','kelurahan','71','7111','711101','7111012009','WITA',NULL,NULL,0,'71.11.01.2009'),
                    (7111012010,711101,'TABILAA','4','kelurahan','71','7111','711101','7111012010','WITA',NULL,NULL,0,'71.11.01.2010'),
                    (7111012012,711101,'SONDANA','4','kelurahan','71','7111','711101','7111012012','WITA',NULL,NULL,0,'71.11.01.2012'),
                    (7111012013,711101,'DUDEPO','4','kelurahan','71','7111','711101','7111012013','WITA',NULL,NULL,0,'71.11.01.2013'),
                    (7111012014,711101,'PINOLANTUNGAN','4','kelurahan','71','7111','711101','7111012014','WITA',NULL,NULL,0,'71.11.01.2014'),
                    (7111012015,711101,'TOLONDADU I','4','kelurahan','71','7111','711101','7111012015','WITA',NULL,NULL,0,'71.11.01.2015'),
                    (7111012016,711101,'TOLONDADU II','4','kelurahan','71','7111','711101','7111012016','WITA',NULL,NULL,0,'71.11.01.2016'),
                    (7111012020,711101,'SOGUO','4','kelurahan','71','7111','711101','7111012020','WITA',NULL,NULL,0,'71.11.01.2020'),
                    (7111012022,711101,'PINTADIA','4','kelurahan','71','7111','711101','7111012022','WITA',NULL,NULL,0,'71.11.01.2022'),
                    (7111012023,711101,'SALONGO TIMUR','4','kelurahan','71','7111','711101','7111012023','WITA',NULL,NULL,0,'71.11.01.2023'),
                    (7111012027,711101,'SALONGO BARAT','4','kelurahan','71','7111','711101','7111012027','WITA',NULL,NULL,0,'71.11.01.2027'),
                    (7111012028,711101,'DUDEPO BARAT','4','kelurahan','71','7111','711101','7111012028','WITA',NULL,NULL,0,'71.11.01.2028'),
                    (7111022001,711102,'LION','4','kelurahan','71','7111','711102','7111022001','WITA',NULL,NULL,0,'71.11.02.2001'),
                    (7111022002,711102,'MOMALIA II','4','kelurahan','71','7111','711102','7111022002','WITA',NULL,NULL,0,'71.11.02.2002'),
                    (7111022003,711102,'MEYAMBANGA','4','kelurahan','71','7111','711102','7111022003','WITA',NULL,NULL,0,'71.11.02.2003'),
                    (7111022004,711102,'SAIBUAH','4','kelurahan','71','7111','711102','7111022004','WITA',NULL,NULL,0,'71.11.02.2004'),
                    (7111022007,711102,'SINOMBAYUGA','4','kelurahan','71','7111','711102','7111022007','WITA',NULL,NULL,0,'71.11.02.2007'),
                    (7111022008,711102,'LUWOO','4','kelurahan','71','7111','711102','7111022008','WITA',NULL,NULL,0,'71.11.02.2008'),
                    (7111022009,711102,'MOMALIA I','4','kelurahan','71','7111','711102','7111022009','WITA',NULL,NULL,0,'71.11.02.2009'),
                    (7111022011,711102,'SAKTI','4','kelurahan','71','7111','711102','7111022011','WITA',NULL,NULL,0,'71.11.02.2011'),
                    (7111022012,711102,'MANGGADAA','4','kelurahan','71','7111','711102','7111022012','WITA',NULL,NULL,0,'71.11.02.2012'),
                    (7111022013,711102,'PILOLAHUNGA','4','kelurahan','71','7111','711102','7111022013','WITA',NULL,NULL,0,'71.11.02.2013'),
                    (7111022014,711102,'TONALA','4','kelurahan','71','7111','711102','7111022014','WITA',NULL,NULL,0,'71.11.02.2014'),
                    (7111022016,711102,'ILOHELUMA','4','kelurahan','71','7111','711102','7111022016','WITA',NULL,NULL,0,'71.11.02.2016'),
                    (7111022017,711102,'MEYAMBANGA TIMUR','4','kelurahan','71','7111','711102','7111022017','WITA',NULL,NULL,0,'71.11.02.2017'),
                    (7111022019,711102,'MOLOSIPAT','4','kelurahan','71','7111','711102','7111022019','WITA',NULL,NULL,0,'71.11.02.2019'),
                    (7111022022,711102,'MOMALIA TIGA','4','kelurahan','71','7111','711102','7111022022','WITA',NULL,NULL,0,'71.11.02.2022'),
                    (7111022023,711102,'INOSOTA','4','kelurahan','71','7111','711102','7111022023','WITA',NULL,NULL,0,'71.11.02.2023'),
                    (7111032001,711103,'LINAWAN','4','kelurahan','71','7111','711103','7111032001','WITA',NULL,NULL,0,'71.11.03.2001'),
                    (7111032002,711103,'NUNUK','4','kelurahan','71','7111','711103','7111032002','WITA',NULL,NULL,0,'71.11.03.2002'),
                    (7111032003,711103,'PINOLOSIAN','4','kelurahan','71','7111','711103','7111032003','WITA',NULL,NULL,0,'71.11.03.2003'),
                    (7111032004,711103,'KOMBOT','4','kelurahan','71','7111','711103','7111032004','WITA',NULL,NULL,0,'71.11.03.2004'),
                    (7111032005,711103,'LUNGKAP','4','kelurahan','71','7111','711103','7111032005','WITA',NULL,NULL,0,'71.11.03.2005'),
                    (7111032006,711103,'ILOMATA','4','kelurahan','71','7111','711103','7111032006','WITA',NULL,NULL,0,'71.11.03.2006'),
                    (7111032007,711103,'LINAWAN I','4','kelurahan','71','7111','711103','7111032007','WITA',NULL,NULL,0,'71.11.03.2007'),
                    (7111032008,711103,'TOLOTOYON','4','kelurahan','71','7111','711103','7111032008','WITA',NULL,NULL,0,'71.11.03.2008'),
                    (7111032009,711103,'PINOLOSIAN SELATAN','4','kelurahan','71','7111','711103','7111032009','WITA',NULL,NULL,0,'71.11.03.2009'),
                    (7111032010,711103,'KOMBOT TIMUR','4','kelurahan','71','7111','711103','7111032010','WITA',NULL,NULL,0,'71.11.03.2010'),
                    (7111042001,711104,'MATAINDO','4','kelurahan','71','7111','711104','7111042001','WITA',NULL,NULL,0,'71.11.04.2001'),
                    (7111042002,711104,'ADOW','4','kelurahan','71','7111','711104','7111042002','WITA',NULL,NULL,0,'71.11.04.2002'),
                    (7111042003,711104,'TOROSIK','4','kelurahan','71','7111','711104','7111042003','WITA',NULL,NULL,0,'71.11.04.2003'),
                    (7111042004,711104,'TOBAYAGAN','4','kelurahan','71','7111','711104','7111042004','WITA',NULL,NULL,0,'71.11.04.2004'),
                    (7111042005,711104,'DEAGA','4','kelurahan','71','7111','711104','7111042005','WITA',NULL,NULL,0,'71.11.04.2005'),
                    (7111042006,711104,'ADOW SELATAN','4','kelurahan','71','7111','711104','7111042006','WITA',NULL,NULL,0,'71.11.04.2006'),
                    (7111042007,711104,'MATAINDO UTARA','4','kelurahan','71','7111','711104','7111042007','WITA',NULL,NULL,0,'71.11.04.2007'),
                    (7111042008,711104,'TOBAYAGAN SELATAN','4','kelurahan','71','7111','711104','7111042008','WITA',NULL,NULL,0,'71.11.04.2008'),
                    (7111052001,711105,'MOTANDOI','4','kelurahan','71','7111','711105','7111052001','WITA',NULL,NULL,0,'71.11.05.2001'),
                    (7111052002,711105,'DUMAGIN A','4','kelurahan','71','7111','711105','7111052002','WITA',NULL,NULL,0,'71.11.05.2002'),
                    (7111052003,711105,'DUMAGIN B','4','kelurahan','71','7111','711105','7111052003','WITA',NULL,NULL,0,'71.11.05.2003'),
                    (7111052004,711105,'DAYOW','4','kelurahan','71','7111','711105','7111052004','WITA',NULL,NULL,0,'71.11.05.2004'),
                    (7111052005,711105,'ONGGUNOI','4','kelurahan','71','7111','711105','7111052005','WITA',NULL,NULL,0,'71.11.05.2005'),
                    (7111052006,711105,'MODISI','4','kelurahan','71','7111','711105','7111052006','WITA',NULL,NULL,0,'71.11.05.2006'),
                    (7111052007,711105,'POSILAGON','4','kelurahan','71','7111','711105','7111052007','WITA',NULL,NULL,0,'71.11.05.2007'),
                    (7111052008,711105,'PIDUNG','4','kelurahan','71','7111','711105','7111052008','WITA',NULL,NULL,0,'71.11.05.2008'),
                    (7111052009,711105,'ILIGON','4','kelurahan','71','7111','711105','7111052009','WITA',NULL,NULL,0,'71.11.05.2009'),
                    (7111052010,711105,'MOTANDOI SELATAN','4','kelurahan','71','7111','711105','7111052010','WITA',NULL,NULL,0,'71.11.05.2010'),
                    (7111052011,711105,'PERJUANGAN','4','kelurahan','71','7111','711105','7111052011','WITA',NULL,NULL,0,'71.11.05.2011'),
                    (7111052012,711105,'ONGGUNOI SELATAN','4','kelurahan','71','7111','711105','7111052012','WITA',NULL,NULL,0,'71.11.05.2012'),
                    (7111062001,711106,'BINIHA TIMUR','4','kelurahan','71','7111','711106','7111062001','WITA',NULL,NULL,0,'71.11.06.2001'),
                    (7111062002,711106,'BINIHA','4','kelurahan','71','7111','711106','7111062002','WITA',NULL,NULL,0,'71.11.06.2002'),
                    (7111062003,711106,'BINIHA SELATAN','4','kelurahan','71','7111','711106','7111062003','WITA',NULL,NULL,0,'71.11.06.2003'),
                    (7111062004,711106,'DUMINANGA','4','kelurahan','71','7111','711106','7111062004','WITA',NULL,NULL,0,'71.11.06.2004'),
                    (7111062005,711106,'HALABOLU','4','kelurahan','71','7111','711106','7111062005','WITA',NULL,NULL,0,'71.11.06.2005'),
                    (7111062006,711106,'TRANS PATOA','4','kelurahan','71','7111','711106','7111062006','WITA',NULL,NULL,0,'71.11.06.2006'),
                    (7111062007,711106,'BAKIDA','4','kelurahan','71','7111','711106','7111062007','WITA',NULL,NULL,0,'71.11.06.2007'),
                    (7111062008,711106,'SINANDAKA','4','kelurahan','71','7111','711106','7111062008','WITA',NULL,NULL,0,'71.11.06.2008'),
                    (7111062009,711106,'SOPUTA','4','kelurahan','71','7111','711106','7111062009','WITA',NULL,NULL,0,'71.11.06.2009'),
                    (7111062010,711106,'PANGIA','4','kelurahan','71','7111','711106','7111062010','WITA',NULL,NULL,0,'71.11.06.2010'),
                    (7111062011,711106,'MOTOLOHU','4','kelurahan','71','7111','711106','7111062011','WITA',NULL,NULL,0,'71.11.06.2011'),
                    (7111072001,711107,'BOTULIODU','4','kelurahan','71','7111','711107','7111072001','WITA',NULL,NULL,0,'71.11.07.2001'),
                    (7111072002,711107,'NUNUKA RAYA','4','kelurahan','71','7111','711107','7111072002','WITA',NULL,NULL,0,'71.11.07.2002'),
                    (7111072003,711107,'TOLUTU','4','kelurahan','71','7111','711107','7111072003','WITA',NULL,NULL,0,'71.11.07.2003'),
                    (7111072004,711107,'MILANGODAA','4','kelurahan','71','7111','711107','7111072004','WITA',NULL,NULL,0,'71.11.07.2004'),
                    (7111072005,711107,'MILANGODAA BARAT','4','kelurahan','71','7111','711107','7111072005','WITA',NULL,NULL,0,'71.11.07.2005'),
                    (7111072006,711107,'MILANGODAA UTARA','4','kelurahan','71','7111','711107','7111072006','WITA',NULL,NULL,0,'71.11.07.2006'),
                    (7111072007,711107,'PAKUKU JAYA','4','kelurahan','71','7111','711107','7111072007','WITA',NULL,NULL,0,'71.11.07.2007'),
                    (7171011001,717101,'MOLAS','4','kelurahan','71','7171','717101','7171011001','WITA',NULL,NULL,0,'71.71.01.1001'),
                    (7171011006,717101,'TONGKAINA','4','kelurahan','71','7171','717101','7171011006','WITA',NULL,NULL,0,'71.71.01.1006'),
                    (7171011007,717101,'MERAS','4','kelurahan','71','7171','717101','7171011007','WITA',NULL,NULL,0,'71.71.01.1007'),
                    (7171011008,717101,'BAILANG','4','kelurahan','71','7171','717101','7171011008','WITA',NULL,NULL,0,'71.71.01.1008'),
                    (7171011009,717101,'PANDU','4','kelurahan','71','7171','717101','7171011009','WITA',NULL,NULL,0,'71.71.01.1009'),
                    (7171021001,717102,'BITUNG KARANGRIA','4','kelurahan','71','7171','717102','7171021001','WITA',NULL,NULL,0,'71.71.02.1001'),
                    (7171021002,717102,'TUMINTING','4','kelurahan','71','7171','717102','7171021002','WITA',NULL,NULL,0,'71.71.02.1002'),
                    (7171021003,717102,'TUMUMPA SATU','4','kelurahan','71','7171','717102','7171021003','WITA',NULL,NULL,0,'71.71.02.1003'),
                    (7171021004,717102,'MAASING','4','kelurahan','71','7171','717102','7171021004','WITA',NULL,NULL,0,'71.71.02.1004'),
                    (7171021005,717102,'SINDULANG SATU','4','kelurahan','71','7171','717102','7171021005','WITA',NULL,NULL,0,'71.71.02.1005'),
                    (7171021006,717102,'SINDULANG DUA','4','kelurahan','71','7171','717102','7171021006','WITA',NULL,NULL,0,'71.71.02.1006'),
                    (7171021007,717102,'ISLAM','4','kelurahan','71','7171','717102','7171021007','WITA',NULL,NULL,0,'71.71.02.1007'),
                    (7171021008,717102,'TUMUMPA DUA','4','kelurahan','71','7171','717102','7171021008','WITA',NULL,NULL,0,'71.71.02.1008'),
                    (7171021009,717102,'SUMOMPO','4','kelurahan','71','7171','717102','7171021009','WITA',NULL,NULL,0,'71.71.02.1009'),
                    (7171021010,717102,'MAHAWU','4','kelurahan','71','7171','717102','7171021010','WITA',NULL,NULL,0,'71.71.02.1010'),
                    (7171031001,717103,'SINGKIL SATU','4','kelurahan','71','7171','717103','7171031001','WITA',NULL,NULL,0,'71.71.03.1001'),
                    (7171031002,717103,'SINGKIL DUA','4','kelurahan','71','7171','717103','7171031002','WITA',NULL,NULL,0,'71.71.03.1002'),
                    (7171031003,717103,'WAWONASA','4','kelurahan','71','7171','717103','7171031003','WITA',NULL,NULL,0,'71.71.03.1003'),
                    (7171031004,717103,'KARAME','4','kelurahan','71','7171','717103','7171031004','WITA',NULL,NULL,0,'71.71.03.1004'),
                    (7171031005,717103,'KETANG BARU','4','kelurahan','71','7171','717103','7171031005','WITA',NULL,NULL,0,'71.71.03.1005'),
                    (7171031006,717103,'TERNATE BARU','4','kelurahan','71','7171','717103','7171031006','WITA',NULL,NULL,0,'71.71.03.1006'),
                    (7171031007,717103,'KOMBOS BARAT','4','kelurahan','71','7171','717103','7171031007','WITA',NULL,NULL,0,'71.71.03.1007'),
                    (7171031008,717103,'KOMBOS TIMUR','4','kelurahan','71','7171','717103','7171031008','WITA',NULL,NULL,0,'71.71.03.1008'),
                    (7171031009,717103,'TERNATE TANJUNG','4','kelurahan','71','7171','717103','7171031009','WITA',NULL,NULL,0,'71.71.03.1009'),
                    (7171041001,717104,'TIKALA KUMARAKA','4','kelurahan','71','7171','717104','7171041001','WITA',NULL,NULL,0,'71.71.04.1001'),
                    (7171041002,717104,'MAHAKERET TIMUR','4','kelurahan','71','7171','717104','7171041002','WITA',NULL,NULL,0,'71.71.04.1002'),
                    (7171041003,717104,'MAHAKERET BARAT','4','kelurahan','71','7171','717104','7171041003','WITA',NULL,NULL,0,'71.71.04.1003'),
                    (7171041004,717104,'TELING BAWAH','4','kelurahan','71','7171','717104','7171041004','WITA',NULL,NULL,0,'71.71.04.1004'),
                    (7171041005,717104,'WENANG UTARA','4','kelurahan','71','7171','717104','7171041005','WITA',NULL,NULL,0,'71.71.04.1005'),
                    (7171041006,717104,'WENANG SELATAN','4','kelurahan','71','7171','717104','7171041006','WITA',NULL,NULL,0,'71.71.04.1006'),
                    (7171041007,717104,'PINAESAAN','4','kelurahan','71','7171','717104','7171041007','WITA',NULL,NULL,0,'71.71.04.1007'),
                    (7171041008,717104,'CALACA','4','kelurahan','71','7171','717104','7171041008','WITA',NULL,NULL,0,'71.71.04.1008'),
                    (7171041009,717104,'ISTIQLAL','4','kelurahan','71','7171','717104','7171041009','WITA',NULL,NULL,0,'71.71.04.1009'),
                    (7171041010,717104,'LAWANGIRUNG','4','kelurahan','71','7171','717104','7171041010','WITA',NULL,NULL,0,'71.71.04.1010'),
                    (7171041011,717104,'KOMO LUAR','4','kelurahan','71','7171','717104','7171041011','WITA',NULL,NULL,0,'71.71.04.1011'),
                    (7171041012,717104,'BUMI BERINGIN','4','kelurahan','71','7171','717104','7171041012','WITA',NULL,NULL,0,'71.71.04.1012'),
                    (7171051008,717105,'TIKALA BARU','4','kelurahan','71','7171','717105','7171051008','WITA',NULL,NULL,0,'71.71.05.1008'),
                    (7171051009,717105,'TAAS','4','kelurahan','71','7171','717105','7171051009','WITA',NULL,NULL,0,'71.71.05.1009'),
                    (7171051010,717105,'PAAL IV','4','kelurahan','71','7171','717105','7171051010','WITA',NULL,NULL,0,'71.71.05.1010'),
                    (7171051011,717105,'BANJER','4','kelurahan','71','7171','717105','7171051011','WITA',NULL,NULL,0,'71.71.05.1011'),
                    (7171051012,717105,'TIKALA ARES','4','kelurahan','71','7171','717105','7171051012','WITA',NULL,NULL,0,'71.71.05.1012'),
                    (7171061001,717106,'SARIO UTARA','4','kelurahan','71','7171','717106','7171061001','WITA',NULL,NULL,0,'71.71.06.1001'),
                    (7171061002,717106,'SARIO KOTABARU','4','kelurahan','71','7171','717106','7171061002','WITA',NULL,NULL,0,'71.71.06.1002'),
                    (7171061003,717106,'SARIO TUMPAAN','4','kelurahan','71','7171','717106','7171061003','WITA',NULL,NULL,0,'71.71.06.1003'),
                    (7171061004,717106,'SARIO','4','kelurahan','71','7171','717106','7171061004','WITA',NULL,NULL,0,'71.71.06.1004'),
                    (7171061005,717106,'TITIWUNGAN UTARA','4','kelurahan','71','7171','717106','7171061005','WITA',NULL,NULL,0,'71.71.06.1005'),
                    (7171061006,717106,'TITIWUNGAN SELATAN','4','kelurahan','71','7171','717106','7171061006','WITA',NULL,NULL,0,'71.71.06.1006'),
                    (7171061007,717106,'RANOTANA','4','kelurahan','71','7171','717106','7171061007','WITA',NULL,NULL,0,'71.71.06.1007'),
                    (7171071001,717107,'WANEA','4','kelurahan','71','7171','717107','7171071001','WITA',NULL,NULL,0,'71.71.07.1001'),
                    (7171071002,717107,'TANJUNG BATU','4','kelurahan','71','7171','717107','7171071002','WITA',NULL,NULL,0,'71.71.07.1002'),
                    (7171071003,717107,'PAKOWA','4','kelurahan','71','7171','717107','7171071003','WITA',NULL,NULL,0,'71.71.07.1003'),
                    (7171071004,717107,'BUMI NYIUR','4','kelurahan','71','7171','717107','7171071004','WITA',NULL,NULL,0,'71.71.07.1004'),
                    (7171071005,717107,'RANOTANA WERU','4','kelurahan','71','7171','717107','7171071005','WITA',NULL,NULL,0,'71.71.07.1005'),
                    (7171071006,717107,'TELING ATAS','4','kelurahan','71','7171','717107','7171071006','WITA',NULL,NULL,0,'71.71.07.1006'),
                    (7171071007,717107,'TINGKULU','4','kelurahan','71','7171','717107','7171071007','WITA',NULL,NULL,0,'71.71.07.1007'),
                    (7171071008,717107,'KAROMBASAN UTARA','4','kelurahan','71','7171','717107','7171071008','WITA',NULL,NULL,0,'71.71.07.1008'),
                    (7171071009,717107,'KAROMBASAN SELATAN','4','kelurahan','71','7171','717107','7171071009','WITA',NULL,NULL,0,'71.71.07.1009'),
                    (7171081001,717108,'PANIKI BAWAH','4','kelurahan','71','7171','717108','7171081001','WITA',NULL,NULL,0,'71.71.08.1001'),
                    (7171081002,717108,'LAPANGAN','4','kelurahan','71','7171','717108','7171081002','WITA',NULL,NULL,0,'71.71.08.1002'),
                    (7171081003,717108,'MAPANGET BARAT','4','kelurahan','71','7171','717108','7171081003','WITA',NULL,NULL,0,'71.71.08.1003'),
                    (7171081004,717108,'KIMA ATAS','4','kelurahan','71','7171','717108','7171081004','WITA',NULL,NULL,0,'71.71.08.1004'),
                    (7171081005,717108,'BUHA','4','kelurahan','71','7171','717108','7171081005','WITA',NULL,NULL,0,'71.71.08.1005'),
                    (7171081006,717108,'BENGKOL','4','kelurahan','71','7171','717108','7171081006','WITA',NULL,NULL,0,'71.71.08.1006'),
                    (7171081008,717108,'KAIRAGI SATU','4','kelurahan','71','7171','717108','7171081008','WITA',NULL,NULL,0,'71.71.08.1008'),
                    (7171081009,717108,'KAIRAGI DUA','4','kelurahan','71','7171','717108','7171081009','WITA',NULL,NULL,0,'71.71.08.1009'),
                    (7171081010,717108,'PANIKI SATU','4','kelurahan','71','7171','717108','7171081010','WITA',NULL,NULL,0,'71.71.08.1010'),
                    (7171081011,717108,'PANIKI DUA','4','kelurahan','71','7171','717108','7171081011','WITA',NULL,NULL,0,'71.71.08.1011'),
                    (7171091001,717109,'MALALAYANG SATU','4','kelurahan','71','7171','717109','7171091001','WITA',NULL,NULL,0,'71.71.09.1001'),
                    (7171091002,717109,'BAHU','4','kelurahan','71','7171','717109','7171091002','WITA',NULL,NULL,0,'71.71.09.1002'),
                    (7171091003,717109,'KLEAK','4','kelurahan','71','7171','717109','7171091003','WITA',NULL,NULL,0,'71.71.09.1003'),
                    (7171091004,717109,'BATU KOTA','4','kelurahan','71','7171','717109','7171091004','WITA',NULL,NULL,0,'71.71.09.1004'),
                    (7171091005,717109,'MALALAYANG SATU TIMUR','4','kelurahan','71','7171','717109','7171091005','WITA',NULL,NULL,0,'71.71.09.1005'),
                    (7171091006,717109,'MALALAYANG SATU BARAT','4','kelurahan','71','7171','717109','7171091006','WITA',NULL,NULL,0,'71.71.09.1006'),
                    (7171091007,717109,'MALALAYANG DUA','4','kelurahan','71','7171','717109','7171091007','WITA',NULL,NULL,0,'71.71.09.1007'),
                    (7171091008,717109,'WINANGUN SATU','4','kelurahan','71','7171','717109','7171091008','WITA',NULL,NULL,0,'71.71.09.1008'),
                    (7171091009,717109,'WINANGUN DUA','4','kelurahan','71','7171','717109','7171091009','WITA',NULL,NULL,0,'71.71.09.1009'),
                    (7171101001,717110,'BUNAKEN','4','kelurahan','71','7171','717110','7171101001','WITA',NULL,NULL,0,'71.71.10.1001'),
                    (7171101002,717110,'MANADO TUA SATU','4','kelurahan','71','7171','717110','7171101002','WITA',NULL,NULL,0,'71.71.10.1002'),
                    (7171101003,717110,'MANADO TUA DUA','4','kelurahan','71','7171','717110','7171101003','WITA',NULL,NULL,0,'71.71.10.1003'),
                    (7171101004,717110,'ALUNG BANUA','4','kelurahan','71','7171','717110','7171101004','WITA',NULL,NULL,0,'71.71.10.1004'),
                    (7171111001,717111,'RANOMUUT','4','kelurahan','71','7171','717111','7171111001','WITA',NULL,NULL,0,'71.71.11.1001'),
                    (7171111002,717111,'KAIRAGI WERU','4','kelurahan','71','7171','717111','7171111002','WITA',NULL,NULL,0,'71.71.11.1002'),
                    (7171111003,717111,'PAAL DUA','4','kelurahan','71','7171','717111','7171111003','WITA',NULL,NULL,0,'71.71.11.1003'),
                    (7171111004,717111,'PERKAMIL','4','kelurahan','71','7171','717111','7171111004','WITA',NULL,NULL,0,'71.71.11.1004'),
                    (7171111005,717111,'MALENDENG','4','kelurahan','71','7171','717111','7171111005','WITA',NULL,NULL,0,'71.71.11.1005'),
                    (7171111006,717111,'DENDENGAN DALAM','4','kelurahan','71','7171','717111','7171111006','WITA',NULL,NULL,0,'71.71.11.1006'),
                    (7171111007,717111,'DENDENGAN LUAR','4','kelurahan','71','7171','717111','7171111007','WITA',NULL,NULL,0,'71.71.11.1007'),
                    (7172011001,717201,'PASIR PANJANG','4','kelurahan','71','7172','717201','7172011001','WITA',NULL,NULL,0,'71.72.01.1001'),
                    (7172011002,717201,'PAUDEAN','4','kelurahan','71','7172','717201','7172011002','WITA',NULL,NULL,0,'71.72.01.1002'),
                    (7172011003,717201,'BATULUBANG','4','kelurahan','71','7172','717201','7172011003','WITA',NULL,NULL,0,'71.72.01.1003'),
                    (7172011004,717201,'PAPUSUNGAN','4','kelurahan','71','7172','717201','7172011004','WITA',NULL,NULL,0,'71.72.01.1004'),
                    (7172011006,717201,'PANCURAN','4','kelurahan','71','7172','717201','7172011006','WITA',NULL,NULL,0,'71.72.01.1006'),
                    (7172011011,717201,'DORBOLAANG','4','kelurahan','71','7172','717201','7172011011','WITA',NULL,NULL,0,'71.72.01.1011'),
                    (7172011016,717201,'KELAPA DUA','4','kelurahan','71','7172','717201','7172011016','WITA',NULL,NULL,0,'71.72.01.1016'),
                    (7172021001,717202,'WANGURER BARAT','4','kelurahan','71','7172','717202','7172021001','WITA',NULL,NULL,0,'71.72.02.1001'),
                    (7172021002,717202,'PACEDA','4','kelurahan','71','7172','717202','7172021002','WITA',NULL,NULL,0,'71.72.02.1002'),
                    (7172021003,717202,'MADIDIR URE','4','kelurahan','71','7172','717202','7172021003','WITA',NULL,NULL,0,'71.72.02.1003'),
                    (7172021004,717202,'KADOODAN','4','kelurahan','71','7172','717202','7172021004','WITA',NULL,NULL,0,'71.72.02.1004'),
                    (7172021006,717202,'MADIDIR WERU','4','kelurahan','71','7172','717202','7172021006','WITA',NULL,NULL,0,'71.72.02.1006'),
                    (7172021007,717202,'MADIDIR UNET','4','kelurahan','71','7172','717202','7172021007','WITA',NULL,NULL,0,'71.72.02.1007'),
                    (7172021009,717202,'WANGURER TIMUR','4','kelurahan','71','7172','717202','7172021009','WITA',NULL,NULL,0,'71.72.02.1009'),
                    (7172021011,717202,'WANGURER UTARA','4','kelurahan','71','7172','717202','7172021011','WITA',NULL,NULL,0,'71.72.02.1011'),
                    (7172031001,717203,'KARONDORAN','4','kelurahan','71','7172','717203','7172031001','WITA',NULL,NULL,0,'71.72.03.1001'),
                    (7172031002,717203,'KUMERESOT','4','kelurahan','71','7172','717203','7172031002','WITA',NULL,NULL,0,'71.72.03.1002'),
                    (7172031004,717203,'PINOKALAN','4','kelurahan','71','7172','717203','7172031004','WITA',NULL,NULL,0,'71.72.03.1004'),
                    (7172031005,717203,'TEWAAN','4','kelurahan','71','7172','717203','7172031005','WITA',NULL,NULL,0,'71.72.03.1005'),
                    (7172031006,717203,'DANOWUDU','4','kelurahan','71','7172','717203','7172031006','WITA',NULL,NULL,0,'71.72.03.1006'),
                    (7172031007,717203,'DUASADARA','4','kelurahan','71','7172','717203','7172031007','WITA',NULL,NULL,0,'71.72.03.1007'),
                    (7172031008,717203,'APELA  DUA','4','kelurahan','71','7172','717203','7172031008','WITA',NULL,NULL,0,'71.72.03.1008'),
                    (7172031009,717203,'APELA SATU','4','kelurahan','71','7172','717203','7172031009','WITA',NULL,NULL,0,'71.72.03.1009'),
                    (7172031010,717203,'PINASUNGKULAN','4','kelurahan','71','7172','717203','7172031010','WITA',NULL,NULL,0,'71.72.03.1010'),
                    (7172031011,717203,'BATUPUTIH ATAS','4','kelurahan','71','7172','717203','7172031011','WITA',NULL,NULL,0,'71.72.03.1011'),
                    (7172031012,717203,'BATUPUTIH  BAWAH','4','kelurahan','71','7172','717203','7172031012','WITA',NULL,NULL,0,'71.72.03.1012'),
                    (7172041003,717204,'PATETEN SATU','4','kelurahan','71','7172','717204','7172041003','WITA',NULL,NULL,0,'71.72.04.1003'),
                    (7172041004,717204,'WINENET SATU','4','kelurahan','71','7172','717204','7172041004','WITA',NULL,NULL,0,'71.72.04.1004'),
                    (7172041005,717204,'AERTEMBAGA SATU','4','kelurahan','71','7172','717204','7172041005','WITA',NULL,NULL,0,'71.72.04.1005'),
                    (7172041006,717204,'TANDURUSA','4','kelurahan','71','7172','717204','7172041006','WITA',NULL,NULL,0,'71.72.04.1006'),
                    (7172041007,717204,'MAKAWIDEY','4','kelurahan','71','7172','717204','7172041007','WITA',NULL,NULL,0,'71.72.04.1007'),
                    (7172041008,717204,'PINANGUNIAN','4','kelurahan','71','7172','717204','7172041008','WITA',NULL,NULL,0,'71.72.04.1008'),
                    (7172041011,717204,'PATETEN DUA','4','kelurahan','71','7172','717204','7172041011','WITA',NULL,NULL,0,'71.72.04.1011'),
                    (7172041012,717204,'WINENET DUA','4','kelurahan','71','7172','717204','7172041012','WITA',NULL,NULL,0,'71.72.04.1012'),
                    (7172041013,717204,'KASAWARI','4','kelurahan','71','7172','717204','7172041013','WITA',NULL,NULL,0,'71.72.04.1013'),
                    (7172041014,717204,'AERTEMBAGA DUA','4','kelurahan','71','7172','717204','7172041014','WITA',NULL,NULL,0,'71.72.04.1014'),
                    (7172051001,717205,'TANJUNG MERAH','4','kelurahan','71','7172','717205','7172051001','WITA',NULL,NULL,0,'71.72.05.1001'),
                    (7172051002,717205,'SAGERAT','4','kelurahan','71','7172','717205','7172051002','WITA',NULL,NULL,0,'71.72.05.1002'),
                    (7172051003,717205,'MANEMBO-NEMBO ATAS','4','kelurahan','71','7172','717205','7172051003','WITA',NULL,NULL,0,'71.72.05.1003'),
                    (7172051007,717205,'MANEMBO-NEMBO','4','kelurahan','71','7172','717205','7172051007','WITA',NULL,NULL,0,'71.72.05.1007'),
                    (7172051011,717205,'SAGERAT WERU SATU','4','kelurahan','71','7172','717205','7172051011','WITA',NULL,NULL,0,'71.72.05.1011'),
                    (7172051012,717205,'SAGERAT WERU DUA','4','kelurahan','71','7172','717205','7172051012','WITA',NULL,NULL,0,'71.72.05.1012'),
                    (7172051013,717205,'MANEMBO-NEMBO TENGAH','4','kelurahan','71','7172','717205','7172051013','WITA',NULL,NULL,0,'71.72.05.1013'),
                    (7172051014,717205,'TENDEKI','4','kelurahan','71','7172','717205','7172051014','WITA',NULL,NULL,0,'71.72.05.1014'),
                    (7172061001,717206,'GIRIAN ATAS','4','kelurahan','71','7172','717206','7172061001','WITA',NULL,NULL,0,'71.72.06.1001'),
                    (7172061002,717206,'GIRIAN WERU SATU','4','kelurahan','71','7172','717206','7172061002','WITA',NULL,NULL,0,'71.72.06.1002'),
                    (7172061003,717206,'GIRIAN BAWAH','4','kelurahan','71','7172','717206','7172061003','WITA',NULL,NULL,0,'71.72.06.1003'),
                    (7172061004,717206,'GIRIAN PERMAI','4','kelurahan','71','7172','717206','7172061004','WITA',NULL,NULL,0,'71.72.06.1004'),
                    (7172061005,717206,'GIRIAN WERU DUA','4','kelurahan','71','7172','717206','7172061005','WITA',NULL,NULL,0,'71.72.06.1005'),
                    (7172061006,717206,'GIRIAN INDAH','4','kelurahan','71','7172','717206','7172061006','WITA',NULL,NULL,0,'71.72.06.1006'),
                    (7172061007,717206,'WANGURER','4','kelurahan','71','7172','717206','7172061007','WITA',NULL,NULL,0,'71.72.06.1007'),
                    (7172071001,717207,'BITUNG BARAT SATU','4','kelurahan','71','7172','717207','7172071001','WITA',NULL,NULL,0,'71.72.07.1001'),
                    (7172071002,717207,'PAKADOODAN','4','kelurahan','71','7172','717207','7172071002','WITA',NULL,NULL,0,'71.72.07.1002'),
                    (7172071003,717207,'BITUNG BARAT  DUA','4','kelurahan','71','7172','717207','7172071003','WITA',NULL,NULL,0,'71.72.07.1003'),
                    (7172071004,717207,'BITUNG TENGAH','4','kelurahan','71','7172','717207','7172071004','WITA',NULL,NULL,0,'71.72.07.1004'),
                    (7172071005,717207,'BITUNG TIMUR','4','kelurahan','71','7172','717207','7172071005','WITA',NULL,NULL,0,'71.72.07.1005'),
                    (7172071006,717207,'KAKENTURAN  SATU','4','kelurahan','71','7172','717207','7172071006','WITA',NULL,NULL,0,'71.72.07.1006'),
                    (7172071007,717207,'KEKENTURAN DUA','4','kelurahan','71','7172','717207','7172071007','WITA',NULL,NULL,0,'71.72.07.1007'),
                    (7172071008,717207,'PATETEN TIGA','4','kelurahan','71','7172','717207','7172071008','WITA',NULL,NULL,0,'71.72.07.1008'),
                    (7172081001,717208,'MAWALI','4','kelurahan','71','7172','717208','7172081001','WITA',NULL,NULL,0,'71.72.08.1001'),
                    (7172081002,717208,'PINTUKOTA','4','kelurahan','71','7172','717208','7172081002','WITA',NULL,NULL,0,'71.72.08.1002'),
                    (7172081003,717208,'BINUANG','4','kelurahan','71','7172','717208','7172081003','WITA',NULL,NULL,0,'71.72.08.1003'),
                    (7172081004,717208,'MOTTO','4','kelurahan','71','7172','717208','7172081004','WITA',NULL,NULL,0,'71.72.08.1004'),
                    (7172081005,717208,'LIRANG','4','kelurahan','71','7172','717208','7172081005','WITA',NULL,NULL,0,'71.72.08.1005'),
                    (7172081006,717208,'POSOKAN','4','kelurahan','71','7172','717208','7172081006','WITA',NULL,NULL,0,'71.72.08.1006'),
                    (7172081007,717208,'NUSU','4','kelurahan','71','7172','717208','7172081007','WITA',NULL,NULL,0,'71.72.08.1007'),
                    (7172081008,717208,'KAREKO','4','kelurahan','71','7172','717208','7172081008','WITA',NULL,NULL,0,'71.72.08.1008'),
                    (7172081009,717208,'GUNUNG WOKA','4','kelurahan','71','7172','717208','7172081009','WITA',NULL,NULL,0,'71.72.08.1009'),
                    (7172081010,717208,'BATUKOTA','4','kelurahan','71','7172','717208','7172081010','WITA',NULL,NULL,0,'71.72.08.1010'),
                    (7173011001,717301,'PINARAS','4','kelurahan','71','7173','717301','7173011001','WITA',NULL,NULL,0,'71.73.01.1001'),
                    (7173011002,717301,'LAHENDONG','4','kelurahan','71','7173','717301','7173011002','WITA',NULL,NULL,0,'71.73.01.1002'),
                    (7173011003,717301,'TONDANGOW','4','kelurahan','71','7173','717301','7173011003','WITA',NULL,NULL,0,'71.73.01.1003'),
                    (7173011004,717301,'PANGOLOMBIAN','4','kelurahan','71','7173','717301','7173011004','WITA',NULL,NULL,0,'71.73.01.1004'),
                    (7173011005,717301,'TUMATANGTANG','4','kelurahan','71','7173','717301','7173011005','WITA',NULL,NULL,0,'71.73.01.1005'),
                    (7173011006,717301,'KAMPUNG JAWA','4','kelurahan','71','7173','717301','7173011006','WITA',NULL,NULL,0,'71.73.01.1006'),
                    (7173011007,717301,'LANSOT','4','kelurahan','71','7173','717301','7173011007','WITA',NULL,NULL,0,'71.73.01.1007'),
                    (7173011008,717301,'WALIAN','4','kelurahan','71','7173','717301','7173011008','WITA',NULL,NULL,0,'71.73.01.1008'),
                    (7173011009,717301,'ULUINDANO','4','kelurahan','71','7173','717301','7173011009','WITA',NULL,NULL,0,'71.73.01.1009'),
                    (7173011010,717301,'WALIAN SATU','4','kelurahan','71','7173','717301','7173011010','WITA',NULL,NULL,0,'71.73.01.1010'),
                    (7173011011,717301,'WALIAN DUA','4','kelurahan','71','7173','717301','7173011011','WITA',NULL,NULL,0,'71.73.01.1011'),
                    (7173011012,717301,'TUMATANGTANG SATU','4','kelurahan','71','7173','717301','7173011012','WITA',NULL,NULL,0,'71.73.01.1012'),
                    (7173021009,717302,'TALETE  SATU','4','kelurahan','71','7173','717302','7173021009','WITA',NULL,NULL,0,'71.73.02.1009'),
                    (7173021010,717302,'TALETE DUA','4','kelurahan','71','7173','717302','7173021010','WITA',NULL,NULL,0,'71.73.02.1010'),
                    (7173021011,717302,'KAMASI','4','kelurahan','71','7173','717302','7173021011','WITA',NULL,NULL,0,'71.73.02.1011'),
                    (7173021012,717302,'KOLONGAN','4','kelurahan','71','7173','717302','7173021012','WITA',NULL,NULL,0,'71.73.02.1012'),
                    (7173021015,717302,'MATANI SATU','4','kelurahan','71','7173','717302','7173021015','WITA',NULL,NULL,0,'71.73.02.1015'),
                    (7173021016,717302,'MATANI DUA','4','kelurahan','71','7173','717302','7173021016','WITA',NULL,NULL,0,'71.73.02.1016'),
                    (7173021017,717302,'MATANI TIGA','4','kelurahan','71','7173','717302','7173021017','WITA',NULL,NULL,0,'71.73.02.1017'),
                    (7173021018,717302,'KAMASI SATU','4','kelurahan','71','7173','717302','7173021018','WITA',NULL,NULL,0,'71.73.02.1018'),
                    (7173021019,717302,'KOLONGAN SATU','4','kelurahan','71','7173','717302','7173021019','WITA',NULL,NULL,0,'71.73.02.1019'),
                    (7173031001,717303,'TINOOR SATU','4','kelurahan','71','7173','717303','7173031001','WITA',NULL,NULL,0,'71.73.03.1001'),
                    (7173031002,717303,'TINOOR DUA','4','kelurahan','71','7173','717303','7173031002','WITA',NULL,NULL,0,'71.73.03.1002'),
                    (7173031003,717303,'KINILOW','4','kelurahan','71','7173','717303','7173031003','WITA',NULL,NULL,0,'71.73.03.1003'),
                    (7173031004,717303,'KAKASKASEN SATU','4','kelurahan','71','7173','717303','7173031004','WITA',NULL,NULL,0,'71.73.03.1004'),
                    (7173031005,717303,'KAKASKASEN DUA','4','kelurahan','71','7173','717303','7173031005','WITA',NULL,NULL,0,'71.73.03.1005'),
                    (7173031006,717303,'KAKASKASEN TIGA','4','kelurahan','71','7173','717303','7173031006','WITA',NULL,NULL,0,'71.73.03.1006'),
                    (7173031007,717303,'WAILAN','4','kelurahan','71','7173','717303','7173031007','WITA',NULL,NULL,0,'71.73.03.1007'),
                    (7173031008,717303,'KAYAWU','4','kelurahan','71','7173','717303','7173031008','WITA',NULL,NULL,0,'71.73.03.1008'),
                    (7173031009,717303,'KINILOW SATU','4','kelurahan','71','7173','717303','7173031009','WITA',NULL,NULL,0,'71.73.03.1009'),
                    (7173031010,717303,'KAKASKASEN','4','kelurahan','71','7173','717303','7173031010','WITA',NULL,NULL,0,'71.73.03.1010'),
                    (7173041001,717304,'WOLOAN SATU','4','kelurahan','71','7173','717304','7173041001','WITA',NULL,NULL,0,'71.73.04.1001'),
                    (7173041002,717304,'WOLOAN DUA','4','kelurahan','71','7173','717304','7173041002','WITA',NULL,NULL,0,'71.73.04.1002'),
                    (7173041003,717304,'WOLOAN TIGA','4','kelurahan','71','7173','717304','7173041003','WITA',NULL,NULL,0,'71.73.04.1003'),
                    (7173041004,717304,'TARATARA SATU','4','kelurahan','71','7173','717304','7173041004','WITA',NULL,NULL,0,'71.73.04.1004'),
                    (7173041005,717304,'TARATARA DUA','4','kelurahan','71','7173','717304','7173041005','WITA',NULL,NULL,0,'71.73.04.1005'),
                    (7173041006,717304,'WOLOAN SATU UTARA','4','kelurahan','71','7173','717304','7173041006','WITA',NULL,NULL,0,'71.73.04.1006'),
                    (7173041007,717304,'TARATARA','4','kelurahan','71','7173','717304','7173041007','WITA',NULL,NULL,0,'71.73.04.1007'),
                    (7173041008,717304,'TARATARA TIGA','4','kelurahan','71','7173','717304','7173041008','WITA',NULL,NULL,0,'71.73.04.1008'),
                    (7173051001,717305,'PASLATEN SATU','4','kelurahan','71','7173','717305','7173051001','WITA',NULL,NULL,0,'71.73.05.1001'),
                    (7173051002,717305,'PASLATEN  DUA','4','kelurahan','71','7173','717305','7173051002','WITA',NULL,NULL,0,'71.73.05.1002'),
                    (7173051003,717305,'RURUKAN','4','kelurahan','71','7173','717305','7173051003','WITA',NULL,NULL,0,'71.73.05.1003'),
                    (7173051004,717305,'RURUKAN SATU','4','kelurahan','71','7173','717305','7173051004','WITA',NULL,NULL,0,'71.73.05.1004'),
                    (7173051005,717305,'KUMELEMBUAY','4','kelurahan','71','7173','717305','7173051005','WITA',NULL,NULL,0,'71.73.05.1005'),
                    (7174011005,717401,'BIGA','4','kelurahan','71','7174','717401','7174011005','WITA',NULL,NULL,0,'71.74.01.1005'),
                    (7174011006,717401,'UPAI','4','kelurahan','71','7174','717401','7174011006','WITA',NULL,NULL,0,'71.74.01.1006'),
                    (7174011007,717401,'GENGGULANG','4','kelurahan','71','7174','717401','7174011007','WITA',NULL,NULL,0,'71.74.01.1007'),
                    (7174012001,717401,'BILALANG SATU','4','kelurahan','71','7174','717401','7174012001','WITA',NULL,NULL,0,'71.74.01.2001'),
                    (7174012002,717401,'BILALANG DUA','4','kelurahan','71','7174','717401','7174012002','WITA',NULL,NULL,0,'71.74.01.2002'),
                    (7174012003,717401,'PONTODON','4','kelurahan','71','7174','717401','7174012003','WITA',NULL,NULL,0,'71.74.01.2003'),
                    (7174012004,717401,'SIA','4','kelurahan','71','7174','717401','7174012004','WITA',NULL,NULL,0,'71.74.01.2004'),
                    (7174012008,717401,'PONTODON TIMUR','4','kelurahan','71','7174','717401','7174012008','WITA',NULL,NULL,0,'71.74.01.2008'),
                    (7174021003,717402,'KOTOBANGUN','4','kelurahan','71','7174','717402','7174021003','WITA',NULL,NULL,0,'71.74.02.1003'),
                    (7174021004,717402,'TUMUBUI','4','kelurahan','71','7174','717402','7174021004','WITA',NULL,NULL,0,'71.74.02.1004'),
                    (7174021005,717402,'SININDIAN','4','kelurahan','71','7174','717402','7174021005','WITA',NULL,NULL,0,'71.74.02.1005'),
                    (7174021006,717402,'MATALI','4','kelurahan','71','7174','717402','7174021006','WITA',NULL,NULL,0,'71.74.02.1006'),
                    (7174021007,717402,'MOTOBOI BESAR','4','kelurahan','71','7174','717402','7174021007','WITA',NULL,NULL,0,'71.74.02.1007'),
                    (7174021008,717402,'KOBO BESAR','4','kelurahan','71','7174','717402','7174021008','WITA',NULL,NULL,0,'71.74.02.1008'),
                    (7174022001,717402,'MOYAG','4','kelurahan','71','7174','717402','7174022001','WITA',NULL,NULL,0,'71.74.02.2001'),
                    (7174022002,717402,'KOBO KECIL','4','kelurahan','71','7174','717402','7174022002','WITA',NULL,NULL,0,'71.74.02.2002'),
                    (7174022009,717402,'MOYAG TAMPOAN','4','kelurahan','71','7174','717402','7174022009','WITA',NULL,NULL,0,'71.74.02.2009'),
                    (7174022010,717402,'MOYAG TODULAN','4','kelurahan','71','7174','717402','7174022010','WITA',NULL,NULL,0,'71.74.02.2010'),
                    (7174031007,717403,'MOTOBOI KECIL','4','kelurahan','71','7174','717403','7174031007','WITA',NULL,NULL,0,'71.74.03.1007'),
                    (7174031008,717403,'MONGONDOW','4','kelurahan','71','7174','717403','7174031008','WITA',NULL,NULL,0,'71.74.03.1008'),
                    (7174031009,717403,'POBUNDAYAN','4','kelurahan','71','7174','717403','7174031009','WITA',NULL,NULL,0,'71.74.03.1009'),
                    (7174032001,717403,'POYOWA BESAR SATU','4','kelurahan','71','7174','717403','7174032001','WITA',NULL,NULL,0,'71.74.03.2001'),
                    (7174032002,717403,'POYOWA BESAR DUA','4','kelurahan','71','7174','717403','7174032002','WITA',NULL,NULL,0,'71.74.03.2002'),
                    (7174032003,717403,'TABANG','4','kelurahan','71','7174','717403','7174032003','WITA',NULL,NULL,0,'71.74.03.2003'),
                    (7174032004,717403,'BUNGKO','4','kelurahan','71','7174','717403','7174032004','WITA',NULL,NULL,0,'71.74.03.2004'),
                    (7174032005,717403,'KOPANDAKAN SATU','4','kelurahan','71','7174','717403','7174032005','WITA',NULL,NULL,0,'71.74.03.2005'),
                    (7174032006,717403,'POYOWA KECIL','4','kelurahan','71','7174','717403','7174032006','WITA',NULL,NULL,0,'71.74.03.2006'),
                    (7174041001,717404,'MONGKONAI','4','kelurahan','71','7174','717404','7174041001','WITA',NULL,NULL,0,'71.74.04.1001'),
                    (7174041002,717404,'MOLINOW','4','kelurahan','71','7174','717404','7174041002','WITA',NULL,NULL,0,'71.74.04.1002'),
                    (7174041003,717404,'MOGOLAING','4','kelurahan','71','7174','717404','7174041003','WITA',NULL,NULL,0,'71.74.04.1003'),
                    (7174041004,717404,'GOGAGOMAN','4','kelurahan','71','7174','717404','7174041004','WITA',NULL,NULL,0,'71.74.04.1004'),
                    (7174041005,717404,'KOTAMOBAGU','4','kelurahan','71','7174','717404','7174041005','WITA',NULL,NULL,0,'71.74.04.1005'),
                    (7174041006,717404,'MONGKONAI BARAT','4','kelurahan','71','7174','717404','7174041006','WITA',NULL,NULL,0,'71.74.04.1006');
            "
        );
    }
}
