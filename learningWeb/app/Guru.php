<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['name','password','sekolah_id','kelas_id'];
    protected $hidden = ['password', 'remember_token'];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
    public function sekolah()
    {
        return $this->belongsTo('App\Sekolah');
    }

}
