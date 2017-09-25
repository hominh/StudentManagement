<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $timestamps = true;
    protected $table = 'programs';
    protected $fillable = ['name','description','user_id'];
    protected $primaryKey = 'id';
}
