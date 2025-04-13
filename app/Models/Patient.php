<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    protected $fillable=[
        'name',
        'email',
        'password',
        'gender',
        'status',
        'age',
        'phone',
        'img',
    ];
    

    public function appointment()
    {
        return $this->hasMany(Appointment::class , 'patient_id');
    }
}
