<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\petugas;

use App\pengguna;

class petugasController extends Controller
{
     protected $informasi = 'Gagal Melakukan aksi';

    public function awal()
    {
        $semuaPetugas = petugas::all();
        return view('petugas.awal', compact('semuaPetugas'));//['data'=>mahasiswa::all()]);
    }
    public function tambah()
    {
        return view('petugas.tambah');
    }
    public function simpan(Request $input)
    {
        $pengguna = new pengguna($input->only('username','password'));
        if ($pengguna->save()) {
            $petugas = new petugas();
            $petugas->nama = $input->nama;
            $petugas->alamat = $input->alamat;
            $petugas->jenis_kelamin = $input->jenis_kelamin;
            $petugas->no_telp = $input->no_telp;
            //$mahasiswa->pengguna_id = $input->pengguna_id;
            if($pengguna->petugas()->save($petugas)) $this->informasi = 'Berhasil Simpan Data';
           // $informasi = $mahasiswa->save() ? 'berhasil Simpan data' : 'Gagal Simpan Data';

        }
        return redirect('petugas')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $petugas = petugas::find($id);
        return view('petugas.edit')->with(array('petugas'=>$petugas));
    }
    public function lihat($id)
    {
        $petugas = petugas::find($id);
        return view('petugas.lihat')->with(array('petugas'=>$petugas));
    }
    public function update($id, Request $input)
    {
        $petugas = petugas::find($id);
        $pengguna = $petugas->pengguna;
        $petugas->nama = $input->nama;
        $petugas->alamat = $input->alamat;
        $petugas->jenis_kelamin = $input->jenis_kelamin;
        //$mahasiswa->pengguna_id = $input->pengguna_id;
        $petugas->save();
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

        return redirect('petugas')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $petugas = petugas::find($id);
        if($petugas->pengguna()->delete()) {
            if($petugas->delete()){
                $this->informasi = 'Berhasil Hapus Data';
            }
        }


       // $informasi = $mahasiswa->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
        return redirect('petugas')->with(['informasi'=>$this->informasi]);
    }
}
