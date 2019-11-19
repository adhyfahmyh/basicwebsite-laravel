<?php

<<<<<<< HEAD
namespace MyLearning;
=======
namespace PLearning;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

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
