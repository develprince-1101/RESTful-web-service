<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $fillable = [
        'description'
    ];

    public function business_entities(){
        return $this->hasMany('App\BusinessEntity');
    }

    public $timestamps=false;
}
