<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreKeeperEmployee extends Model
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
        'created_by',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
