<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    protected $fillable = [
        'load_no',
        'bill_to',
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


    // Create Load
    public function createLoad($data){
        if(!isset($data['fsc'])){
            $data['fsc'] = 'no';
        }
        $Saved = self::create($data);
        if($Saved){
            return $Saved;
        }else{
            return false;
        }
    }

    // Update Loads
    public function updateLoads($data, $id){
        $updated = self::where('id', $id)->update([
            'load_no' => $data['load_no'],
            'bill_to' => $data['bill_to'],
            'dispatcher' => $data['dispatcher'],
            'sale_rep' => $data['sale_rep'],
            'status' => $data['status'],
            'wo' => $data['wo'],
            'type' => $data['type'],
            'type_rate' => $data['type_rate'],
            'pds' => $data['pds'],
            'fsc' => isset($data['fsc']) ? $data['fsc']: 'no',
            'fsc_rate' => $data['fsc_rate'],
            'other_charges' => $data['other_charges'],
            'usd_rate' => $data['usd_rate'],
            'carrier' => $data['carrier'],
            'driver' => $data['driver'],
            'equipment_type' => $data['equipment_type'],
            'truck' => $data['truck'],
            'trailer' => $data['trailer'],
            'flat_rate' => $data['flat_rate'],
        ]);
        if($updated){
            return $updated;
        }else{
            return false;
        }
    }

    public function shipper(){
        return $this->hasOne('App\Models\Shipper');
    }

    public function consignee(){
        return $this->hasOne('App\Models\Consignee');
    }

}
