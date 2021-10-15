<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_id','content','is_correct'];

    public function question(){
        return $this->belongsTo('App\Models\Question','question_id');
    }
}
