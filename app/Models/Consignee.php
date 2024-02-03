<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    use HasFactory;

    protected $fillable = [
        'load_id',
        'con_name',
        'con_location',
        'consign_date',
        'consign_time',
        'con_description',
        'con_type',
        'con_qty',
        'con_weight',
        'con_amt',
        'con_notes',
        'con_po_number',
    ];


    // Create Consignee
    public function createConsignee($data){
        $Saved = self::create($data);
        if($Saved){
            return $Saved;
        }else{
            return false;
        }
    }
    // Update Consignee
    public function updateConsignee($data, $id){
        $updated = self::where('load_id', $id)->update([
            'con_name' => $data['con_name'],
            'con_location' => $data['con_location'],
            'consign_date' => $data['consign_date'],
            'consign_time' => $data['consign_time'],
            'con_description' => $data['con_description'],
            'con_type' => $data['con_type'],
            'con_qty' => $data['con_qty'],
            'con_weight' => $data['con_weight'],
            'con_amt' => $data['con_amt'],
            'con_notes' => $data['con_notes'],
            'con_po_number' => $data['con_po_number'],
        ]);
        if($updated){
            return $updated;
        }else{
            return false;
        }
    }
}
