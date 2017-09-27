<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MClass extends Model
{
    public $timestamps = true;
    protected $table = 'classes';
    protected $fillable = ['academic_id','level_id','shift_id','time_id','group_id','batch_id','start_date','end_date','active','user_id'];
    protected $primaryKey = 'id';
}
