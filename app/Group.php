<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = true;
    protected $table = 'groups';
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}
