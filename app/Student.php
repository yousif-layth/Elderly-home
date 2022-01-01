<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{

    public $fillable = [
        'name',
        'email',
        'address'
    ];

}
