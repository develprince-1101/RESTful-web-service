<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doc_name',
        'gender',
        'contact_no'
    ];

    public function specializations(){
        return $this->belongsToMany('App\Specialization');
    }

    public function hospitals(){
        return $this->belongsToMany('App\Hospital');
    }



    public $timestamps=false;
}
