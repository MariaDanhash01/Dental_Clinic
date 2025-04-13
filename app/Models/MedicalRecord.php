<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    //
    protected $fillable = [
        'name',
         'patient_id',
         'created_by'
        ];

    public function patient()
    {
        return $this->belongsTo(Patient::class , 'patient_id');
    }

    public function storeKeeperEmployee()
    {
        return $this->belongsTo(StoreKeeperEmployee::class , 'created_by');
    }
}
