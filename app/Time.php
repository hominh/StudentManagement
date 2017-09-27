<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public $timestamps = true;
    protected $table = 'times';
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}
