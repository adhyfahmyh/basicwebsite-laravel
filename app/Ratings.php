<?php

<<<<<<< HEAD
namespace MyLearning;
=======
namespace PLearning;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    // Table name
    protected $table = 'ratings';

    // Primary Key
    public $primarykey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user()
    {
<<<<<<< HEAD
        return $this->belongsTo('MyLearning\User');
    }

    public function contents() {
        return $this->belongsTo('MyLearning\Contents');
=======
        return $this->belongsTo('PLearning\User');
    }

    public function contents() {
        return $this->belongsTo('PLearning\Contents');
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
    }
}
