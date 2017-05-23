<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table ='pelanggan';

    protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'no_telp'];

    public function pengguna()
    {
    	return $this->belongsto(pengguna::class);
    }

    public function getUsernameAttribute()
    {
    	return $this->pengguna->username;
    }

  
}
