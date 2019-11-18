<?php

namespace PLearning;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmarks';
    protected $fillable = [
        'user_id', 'content_id', 'A'
    ];

    // Primary Key
    public $primarykey = 'id';

    // Timestamps
    public $timestamps = true;
}
