<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name','address'
    ];

    public function student(){
        return $this->hasMany(Student::class,'school_id');
    }
}
