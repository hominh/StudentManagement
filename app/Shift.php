<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $timestamps = true;
    protected $table = 'shifts';
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}
