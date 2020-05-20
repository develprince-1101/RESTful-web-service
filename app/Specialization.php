<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = [
        'spec_name',
        'spec_desc'
    ];

    public function doctors(){
        return $this->belongsToMany('App\Doctor');
    }
    public $timestamps=false;
}
