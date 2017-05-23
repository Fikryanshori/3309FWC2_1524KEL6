<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table ='pengguna';

    protected $quarded = ['id'];

    protected $fillable = ['username', 'password'];

    public function pelanggan()
    {
    	return $this->hasOne(pelanggan::class);
    }
    public function petugas()
    {
    	return $this->hasOne(petugas::class);
    }
}
