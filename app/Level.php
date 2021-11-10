<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  protected $fillable = ['name'];

  public function subjects(){
      return $this->hasMany('App\Models\Subject','subject_id');
  }
}
