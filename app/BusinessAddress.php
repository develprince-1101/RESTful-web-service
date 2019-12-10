<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessAddress extends Model
{
    protected $fillable=[
        'address_id',
        'business_entity_id'
    ];

    public function business_entity(){
        return $this->belongsTo('App\BusinessEntity');
    }
    public function address(){
        return $this->belongsTo('App\Address');
    }
    public $timestamps=false;
}
