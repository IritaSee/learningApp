<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Kelas;
use App\Sekolah; 

class GuruController extends Controller
{
    public function index()
    {
        $guru=Guru::all();
        // $kelas=Kelas::all();
        // $sekolah=Sekolah::all();
        return view('list_guru',['guru'=>$guru]);
    }
    public function tambah()
    {
        return view('regis_guru');
    }
    
}
