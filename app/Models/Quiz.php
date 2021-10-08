<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table ="quizzes";

    protected $fillable = ['title','subject_id','duration','expires_at','published'];

    public function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }
}
