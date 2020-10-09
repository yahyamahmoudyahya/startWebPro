<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','email','password','school_id'
    ];

    public function phone()
    {
        return $this->hasOne('App\Phone','student_id');
    }
    public function school(){
        return $this->belongsTo(School::class,'school_id');
    }
    public $timestamps = false;  //to unsave created_at and updated_at

    ########### relation ############

}
