<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';

    public function dosen()
    {
    	return $this->hasMany('App\Models\Dosen');
    }
}
