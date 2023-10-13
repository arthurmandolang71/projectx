<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PaketKabkotaProv extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'paket_kabkota_prov';
}
