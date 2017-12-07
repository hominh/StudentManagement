<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = true;
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id','user_id','class_id'];
}
