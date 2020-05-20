<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'barangay_id',
        'hospital_name',
        'contact_no'
    ];

    public function barangays(){

        return $this->belongsTo('App\Barangay','barangay_id');

    }

    public function doctors(){
        return $this->belongsToMany('App\Doctor');
    }

    public function services(){
        return $this->belongsToMany('App\Services')->withPivot('price');
    }

    public $timestamps=false;
}
