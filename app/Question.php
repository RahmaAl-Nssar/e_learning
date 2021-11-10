<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id','content','full_mark','correct_answer','image'];

    public function quiz(){
        return $this->belongsTo('App\Models\Quiz','quiz_id');
    }

    public function answers(){
        return $this->hasMany('App\Models\Answer','question_id');
    }
}
