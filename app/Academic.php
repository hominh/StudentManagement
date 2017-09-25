<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public $timestamps = true;
    protected $table = 'academics';
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}
