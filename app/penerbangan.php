<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbangan extends Model
{
    protected $table ='penerbangan';
    protected $fillable = ['maskapai','bandara', 'jenis_penerbangan'];

    public function rute()
    {
    	return $this->belongsto(rute::class);
    }
}
