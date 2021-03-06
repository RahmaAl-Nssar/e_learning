<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['title','subject_id','duration','expires_at','published'];

    public function questions(){
        return $this->hasMany('App\Models\Question','question_id');
    }

    public  function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }
}
