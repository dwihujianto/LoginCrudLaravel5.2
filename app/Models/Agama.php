<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
   protected $table = 'agama';

   public function dosen()
   {
   		return $this->hasMany('App\Models\Dosen');
   }

}
