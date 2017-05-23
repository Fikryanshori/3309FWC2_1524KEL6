<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $table ='petugas';
    protected $quarded = ['id'];
	protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'no_telp'];

	 public function pengguna()
    {
    	return $this->belongsto(pengguna::class);
    }

    public function getUsernameAttribute()
    {
    	return $this->pengguna->username;
    }

    public function info()
    {
        return $this->hasMany(info::class,'petugas_id');
    }
    public function listpetugasDanNo_telp(){
        $out = [];
        foreach ($this->all() as $petugas){

            $out[$petugas->id] = "{$petugas->nama} ({$petugas->no_telp})";
        }
            return $out;
        }
}
