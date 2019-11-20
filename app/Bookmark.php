<?php

namespace MyLearning;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmarks';
    protected $fillable = [
        'user_id', 'content_id', 'bookmarked'
    ];

    // Primary Key
    public $primarykey = 'id';

    // Timestamps
    public $timestamps = true;
}
