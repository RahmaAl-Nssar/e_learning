<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table ="quizzes";

    protected $fillable = ['title','subject_id','duration','expires_at','published'];

    public function publishedType(){
     if($this->published){
         return 'off';
     }
     else{
         return 'on';
     }
    }

    // public function getPublishedAttribute($val){
    //     return $val == 0 ?
    //     '<a href="" class="btn btn-danger justify-content-around">غير مرئي</a>':
    //         '<a href="" class="btn btn-success justify-content-around"> مرئي</a>';  
    // }
    public function subject(){
        return $this->belongsTo('App\Models\Subject','subject_id');
    }
}
