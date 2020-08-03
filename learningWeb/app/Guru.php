<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama','password'];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function sekolah()
    {
        return $this->belongsTo('App\Sekolah');
    }

}
