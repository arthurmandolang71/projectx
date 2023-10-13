<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CalegPendukung extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'caleg_pendukung';
    // protected $with = ['caleg_ri', 'caleg_prov', 'caleg_kabkota'];
    protected $guarded = [];

    public function scopeCari($query, array $filters)
    {
        $level_caleg = session()->get('level_caleg');
        $caleg_id = session()->get('caleg_id');

        //kabkota filter
        // jika caleg daeraj

        if ($level_caleg == 1) {
            $query->where('caleg_ri', $caleg_id);
        }

        if ($level_caleg == 2) {
            $query->where('caleg_prov', $caleg_id);
        }

        if ($level_caleg == 3) {
            $query->where('caleg_kabkota', $caleg_id);
        }


        $kelurahandesa = $filters['kelurahandesa'] ?? false;
        $query->when(
            $kelurahandesa,
            fn ($query, $kelurahandesa) =>
            $query->where('kelurahan_desa', $kelurahandesa)
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
            $query->where('tps', $tps_string)
        );

        $nama = $filters['cari_nama'] ?? false;
        $query->when(
            $nama,
            fn ($query, $nama) =>
            $query->where('nama', 'like', "%$nama%")
        );
    }

    public function caleg_ri_ref(): HasOne
    {
        return $this->hasOne(CalegRi::class, 'id', 'caleg_ri');
    }

    public function caleg_prov_ref(): HasOne
    {
        return $this->hasOne(CalegProv::class, 'id', 'caleg_prov');
    }

    public function caleg_kabkota_ref(): HasOne
    {
        return $this->hasOne(CalegKabkota::class, 'id', 'caleg_kabkota');
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
