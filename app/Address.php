<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
        'street',
        'building_no'
    ];

    public function businessAddress(){
        return $this->hasMany('App\BusinessAddress');
    }

    public $timestamps=false;



}
