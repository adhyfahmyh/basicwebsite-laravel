<?php

namespace MyLearning;

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
        return $this->belongsTo('MyLearning\User');
    }
}
