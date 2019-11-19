<?php

<<<<<<< HEAD
namespace MyLearning;
=======
namespace PLearning;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    // Table name
    protected $table = 'posts';

    // Primary Key
    public $primarykey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user()
    {
<<<<<<< HEAD
        return $this->belongsTo('MyLearning\User');
=======
        return $this->belongsTo('PLearning\User');
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
    }
}
