<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CalegPendukungProv extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'caleg_pendukung_prov';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function scopeCari($query, array $filters)
    {

        $caleg_id = session()->get('caleg_id');

        //kabkota filter
        // jika caleg daerah

        $query->where('celeg_id', $caleg_id);

        $kabkota = $filters['kabkota'] ?? false;
        $query->when(
            $kabkota,
            fn ($query, $kabkota) =>
            $query->whereHas('pendukung_ref', fn ($query) =>
            $query->where('kabkota', $kabkota))
        );

        $kecamatan = $filters['kecamatan'] ?? false;
        $query->when(
            $kecamatan,
            fn ($query, $kecamatan) =>
            $query->whereHas('pendukung_ref', fn ($query) =>
            $query->where('kecamatan', $kecamatan))
            // $query->where('kecamatan', $kecamatan)
        );


        $kelurahandesa = $filters['kelurahandesa'] ?? false;
        $query->when(
            $kelurahandesa,
            fn ($query, $kelurahandesa) =>
            $query->whereHas('pendukung_ref', fn ($query) =>
            $query->where('kelurahan_desa', $kelurahandesa))
        );

        $tps = $filters['tps'] ?? false;
        if ($tps) {
            $tps_string = sprintf('%03d', $filters['tps']) ?? false;
        } else {
            $tps_string = NULL;
        }

        $query->when(
            $tps_string,
            fn ($query, $tps_string) =>
            $query->whereHas('pendukung_ref', fn ($query) =>
            $query->where('tps', $tps_string))
        );

        $nama = $filters['cari_nama'] ?? false;
        $query->when(
            $nama,
            fn ($query, $nama) =>
            $query->whereHas(
                'pendukung_ref',
                fn ($query) =>
                $query->where('nama', 'like', "%$nama%")
            )
        );
    }

    public function kabkota_ref(): HasOne
    {
        return $this->hasOne(Kabkota::class, 'id', 'kabkota');
    }

    public function kecamatan_ref(): HasOne
    {
        return $this->hasOne(Kecamatan::class, 'id', 'kecamatan');
    }

    public function kelurahandesa_ref(): HasOne
    {
        return $this->hasOne(Wilayah::class, 'id', 'kelurahan_desa');
    }
}
