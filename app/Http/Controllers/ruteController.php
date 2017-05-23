<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\rute;

class ruteController extends Controller
{
    public function awal(){
        return view("rute.awal", ['data'=>rute::all()]);
    }
    public function tambah(){
        return view('rute.tambah');
    }
    public function simpan(Request $input){
        $rute = new rute();
        $rute->kota_asal = $input->kota_asal;
        $rute->kota_tujuan = $input->kota_tujuan;
        $informasi = $rute->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data';
        return redirect('rute')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $rute = rute::find($id);
        return view('rute.edit')->with(array('rute'=>$rute));
    }
    public function lihat($id){
        $rute = rute::find($id);
        return view('rute.lihat')->with(array('rute'=>$rute));
    }
    public function update($id, Request $input){
        $rute = rute::find($id);
        $rute->kota_asal = $input->kota_asal;
        $rute->kota_tujuan = $input->kota_tujuan;
        $informasi = $rute->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('rute')->with(['informasi'=>$informasi]);
    }
    public function hapus($id, Request $input){
        $rute = rute::find($id);
        $informasi = $rute->delete() ? 'Berhasil hapus Data' : 'Gagal hapus Data';
        return redirect('rute')->with(['informasi'=>$informasi]);
    }
}
