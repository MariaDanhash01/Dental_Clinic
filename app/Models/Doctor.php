<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
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
        'specialization_id',
        'department_id',
        'created_by',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
    public function specialization()
    {
         return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class , 'department_id');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class , 'doctor_id');
    }

}
