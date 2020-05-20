<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $fillable = [
        'address_id',
        'barangay_name',
        'Latitude',
        'Longitude',
    ];


    public function hospitals()
    {
        return $this->hasMany('App\Hospital');
    }

    public function addresses()
    {
        return $this->belongsTo('App\Address','address_id');
    }
}
