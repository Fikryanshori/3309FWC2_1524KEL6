<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $table ='info';
    protected $fillable = ['cuaca', 'status_penerbangan'];

    public function petugas()
    {
    	return $this->belongsto(petugas::class);
    }
    
}
