<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = ['nik','nama','jenkel','alamat','id_agama','id_matkul'];

    public function agama()
    {
    	return $this->belongsTo('App\Models\Agama','id_agama');
    }

    public function matkul()
    {
    	return $this->belongsTo('App\Models\Matkul','id_matkul');
    }
}
