<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\info;

use App\petugas;

class infoController extends Controller
{
    protected $informasi = 'Gagal Melakukan aksi';

    public function awal()
    {
        $semuaInfo = info::all();
        return view('info.awal', compact('semuaInfo'));//['data'=>mahasiswa::all()]);
    }
    public function tambah()
    {
    	 $petugas = new petugas;
        return view('info.tambah', compact('petugas'));
    }
    public function simpan(Request $input)
    {
        $info = new info($input->only('petugas_id'));
    	$info->cuaca = $input->cuaca;
    	$info->status_penerbangan = $input->status_penerbangan;
    	$informasi = $info->save() ? 'berhasil Simpan data' : 'Gagal Simpan Data';
    	if($petugas->info()->save($info)) $this->informasi = 'Berhasil Simpan Data';
        return redirect('info')->with(['informasi'=> $this->informasi]); 
    }
    public function edit($id)
    {
        $info = info::find($id);
        $petugas = new petugas;
        
        return view('info.edit', compact('petugas'));
    }
    public function lihat($id)
    {
         $info = info::find($id);
        return view('info.lihat',compact('info'));
    }
    public function update($id, Request $input)
    {
     	$info = info::find($id);
        $info->petugas_id = $input->petugas_id;
        $info->cuaca = $input->cuaca;
    	$info->status_penerbangan = $input->status_penerbangan;
        $informasi = $info->save() ? 'Berhasil Update' : 'Gagal Update Data';
        return redirect('info')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $info = info::find($id);
        $informasi = $info->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('info')->with(['informasi'=>$informasi]);
    }
}
