<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizStudent extends Model
{
   protected $fillable = ['quiz_id','student_id','result','finished','ends_at'];

   public function quiz(){
       return $this->belongsTo('App\Models\Quiz','quiz_id');
   }

   public function student(){
    return $this->belongsTo('App\Models\Student','student_id');
}
}
