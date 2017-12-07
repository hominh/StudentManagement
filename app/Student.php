<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = true;
    protected $table = 'students';
    protected $primaryKey = 'id';

}
