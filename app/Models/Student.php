<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        
        'user_id', 'level_id', 'phone_number'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function level(){
        return $this->belongsTo('App\Models\Level','level_id');
    }

    public function results()
    {
        return $this->hasMany('App\Models\QuizStudent','student_id');
    }
}


