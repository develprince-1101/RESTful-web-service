<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessEntity extends Model
{
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'contact_number',
        'business_type_id'
    ];

    public function business_addresses(){
        return $this->hasMany('App\BusinessAddress');
    }

    public function business_type(){
        return $this->belongsTo('App\BusinessType');
    }
    public $timestamps=false;
}
