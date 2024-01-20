<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    protected $fillable = [
        'load_no',
        'bill_no',
        'dispatcher',
        'sale_rep',
        'status',
        'wo',
        'type',
        'type_rate',
        'pds',
        'fsc',
        'fsc_rate',
        'other_charges',
        'usd_rate',
        'carrier',
        'driver',
        'equipment_type',
        'truck',
        'trailer',
        'flat_rate',
    ];

}
