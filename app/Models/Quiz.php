<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table ="quizzes";

    protected $fillable = ['title','subject_id','level_id','duration','expires_at','published'];

    public function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level','level_id');
    }

    public function questions()
   {
       return $this->hasMany('App\Models\Question','quiz_id');
   }

   public function results()
   {
       return $this->hasMany('App\Models\QuizStudent','quiz_id');
   }
}
