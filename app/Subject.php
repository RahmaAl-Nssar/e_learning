<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $fillable = ['name','level_id'];

   public  function level(){
    return $this->belongsTo('App\Models\Level','level_id');
}
}
