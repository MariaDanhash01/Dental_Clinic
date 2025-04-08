<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    public function appointment()
    {
        return $this->hasMany(Appointment::class , 'patient_id');
    }
}
