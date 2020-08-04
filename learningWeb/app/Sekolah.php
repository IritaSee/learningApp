<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    public function guru(){
    	return $this->hasOne('App\Guru');
    }
}
