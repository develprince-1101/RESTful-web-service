<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [

        'service_name',
        'service_desc'

    ];

    public function hospitals(){

        return $this->belongsToMany('App\Hospital')->withPivot('price');

    }

    public $timestamps=false;
}
