<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'more_info',
        'image',
        'created_by',
        'status',
    ];

    public function storeKeeperEmployee()
    {
        return $this->belongsTo(StoreKeeperEmployee::class, 'created_by');
    }

}
