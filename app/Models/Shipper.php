<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    protected $fillable = [
        'load_id',
        'name',
        'location',
        'ship_date',
        'ship_time',
        'description',
        'type',
        'qty',
        'weight',
        'amt',
        'notes',
        'po_number',
        'customs_broker',
    ];


    // Create Shipper
    public function createShipper($data){
        $Saved = self::create($data);
        if($Saved){
            return $Saved;
        }else{
            return false;
        }
    }

    // Update shipper
    public function updateShipper($data, $id){
        $updated = self::where('load_id', $id)->update([
            'name' => $data['name'],
            'location' => $data['location'],
            'ship_date' => $data['ship_date'],
            'ship_time' => $data['ship_time'],
            'description' => $data['description'],
            'type' => $data['type'],
            'qty' => $data['qty'],
            'weight' => $data['weight'],
            'amt' => $data['amt'],
            'notes' => $data['notes'],
            'po_number' => $data['po_number'],
            'customs_broker' => $data['customs_broker'],
        ]);
        if($updated){
            return $updated;
        }else{
            return false;
        }
    }
}
