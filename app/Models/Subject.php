<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name','level_id'
    ];

    public function level(){
        return $this->belongsTo('App\Models\Level','level_id');
    }

    public function quizzes(){
        return $this->hasMany('App\Models\Quiz','subject_id');
    }

   

}
