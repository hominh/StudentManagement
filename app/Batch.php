<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $timestamps = true;
    protected $table = 'batches';
    protected $fillable = ['name','user_id'];
    protected $primaryKey = 'id';
}
