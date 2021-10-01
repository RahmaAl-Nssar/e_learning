<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name','level_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\Level','level_id');
    }
}
