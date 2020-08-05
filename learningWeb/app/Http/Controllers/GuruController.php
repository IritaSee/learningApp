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

    public function store(Request $request)
    {
        $this->validate($request,[
    		'name' => 'required',
        	'password' => 'required',
            'sekolah_id'=>'required',
            'kelas_id'=>'required'
    	]);
 
        Guru::create([
    		'name' => $request->name,
            'password' => $request->password,
            'sekolah_id' => $request->sekolah_id,
            'kelas_id' => $request->kelas_id,
    	]);
 
    	return redirect('admin/guru');
    }
    
}
