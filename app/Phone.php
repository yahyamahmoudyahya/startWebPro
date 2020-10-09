<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'code','phone','student_id'
    ];

    public function student(){
        return $this->belongsTo('App\Student','student_id');
    }


}
