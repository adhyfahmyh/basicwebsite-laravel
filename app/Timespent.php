<?php

namespace PLearning;

use Illuminate\Database\Eloquent\Model;

class Timespent extends Model
{
    protected $table = 'timespents';
    protected $fillable = [
        'user_id', 'content_id', 'timespent'
    ];

     // Primary Key
     public $primarykey = 'id';
 
     // Timestamps
     public $timestamps = true;
}
