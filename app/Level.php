<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $timestamps = true;
    protected $table = 'levels';
    protected $fillable = ['name','description','program_id','user_id'];
    protected $primaryKey = 'id';
}
