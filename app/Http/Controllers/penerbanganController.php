<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\penerbangan;

class penerbanganController extends Controller
{
    public function awal(){
        return view("penerbangan.awal", ['data'=>penerbangan::all()]);
    }
    public function tambah(){
        return view('penerbangan.tambah');
    }
    public function simpan(Request $input){
        $penerbangan = new penerbangan();
        $penerbangan->maskapai = $input->maskapai;
        $penerbangan->bandara = $input->bandara;
        $penerbangan->jenis_penerbangan = $input->jenis_penerbangan;
        $informasi = $penerbangan->save() ? 'Berhasil Simpan Data' : 'Gagal Simpan Data';
        return redirect('penerbangan')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $penerbangan = penerbangan::find($id);
        return view('penerbangan.edit')->with(array('penerbangan'=>$penerbangan));
    }
    public function lihat($id){
        $penerbangan = penerbangan::find($id);
        return view('penerbangan.lihat')->with(array('penerbangan'=>$penerbangan));
    }
    public function update($id, Request $input){
        $penerbangan = penerbangan::find($id);
        $penerbangan->maskapai = $input->maskapai;
        $penerbangan->bandara = $input->bandara;
        $penerbangan->jenis_penerbangan = $input->jenis_penerbangan;
        $informasi = $penerbangan->save() ? 'Berhasil update Data' : 'Gagal update Data';
        return redirect('penerbangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id, Request $input){
        $penerbangan = rute::find($id);
        $informasi = $penerbangan->delete() ? 'Berhasil hapus Data' : 'Gagal hapus Data';
        return redirect('penerbangan')->with(['informasi'=>$informasi]);
    }
}
