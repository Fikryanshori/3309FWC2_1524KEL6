<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pelanggan;

use App\pengguna;

class pelangganController extends Controller
{
     protected $informasi = 'Gagal Melakukan aksi';

    public function awal()
    {
        $semuaPelanggan = pelanggan::all();
        return view('pelanggan.awal', compact('semuaPelanggan'));//['data'=>mahasiswa::all()]);
    }
    public function tambah()
    {
        return view('pelanggan.tambah');
    }
    public function simpan(Request $input)
    {
        $pengguna = new pengguna($input->only('username','password'));
        if ($pengguna->save()) {
            $pelanggan = new pelanggan();
            $pelanggan->nama = $input->nama;
            $pelanggan->alamat = $input->alamat;
            $pelanggan->jenis_kelamin = $input->jenis_kelamin;
            $pelanggan->no_telp = $input->no_telp;
            //$mahasiswa->pengguna_id = $input->pengguna_id;
            if($pengguna->pelanggan()->save($pelanggan)) $this->informasi = 'Berhasil Simpan Data';
           // $informasi = $mahasiswa->save() ? 'berhasil Simpan data' : 'Gagal Simpan Data';

        }
        return redirect('pelanggan')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $pelanggan = pelanggan::find($id);
        return view('pelanggan.edit')->with(array('pelanggan'=>$pelanggan));
    }
    public function lihat($id)
    {
        $pelanggan = pelanggan::find($id);
        return view('pelanggan.lihat')->with(array('pelanggan'=>$pelanggan));
    }
    public function update($id, Request $input)
    {
        $pelanggan = pelanggan::find($id);
        $pengguna = $pelanggan->pengguna;
        $pelanggan->nama = $input->nama;
        $pelanggan->alamat = $input->alamat;
        $pelanggan->jenis_kelamin = $input->jenis_kelamin;
        //$mahasiswa->pengguna_id = $input->pengguna_id;
        $pelanggan->save();
       if (!is_null($input->username)){
        $pengguna->fill($input->only('username'));
        if (!empty($input->password)){
            $pengguna->password = $input->password;
        }
        if($pengguna->save()) {
            $this->informasi = 'Berhasil Simpan Data';
        }else{
            $this->informasi = 'Gagal Simpan Data';
        }
       }

       // $informasi = $mahasiswa->save() ? 'Berhasil Update' : 'Gagal Update Data';

        return redirect('pelanggan')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $pelanggan = pelanggan::find($id);
        if($pelanggan->pengguna()->delete()) {
            if($pelanggan->delete()){
                $this->informasi = 'Berhasil Hapus Data';
            }
        }


       // $informasi = $mahasiswa->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('pelanggan')->with(['informasi'=>$this->informasi]);
    }
}
