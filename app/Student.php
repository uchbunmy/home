<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable=['name','sex','dob','address','description'];

    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }
}

