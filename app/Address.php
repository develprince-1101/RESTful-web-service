<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'city',
        'zip_code',
        'province',
        'country',
    ];

    public function  barangays()
    {
        return $this->hasMany('App\Barangay');
    }

    public $timestamps=false;
}
