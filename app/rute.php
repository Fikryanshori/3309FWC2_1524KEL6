<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rute extends Model
{
    protected $table ='rute';
    protected $fillable = ['kota_asal', 'kota_tujuan', 'id'];

    public function penerbangan()
    {
    	return $this->hasOne(penerbangan::class);
    }
}
