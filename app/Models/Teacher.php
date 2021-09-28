<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id', 'job', 'bio','code'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
