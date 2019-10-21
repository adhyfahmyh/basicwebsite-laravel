<?php

namespace MyLearning;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    // Table name
    protected $table = 'contents';
    protected $fillable = [
        'title', 'content_img', 'description', 'category', 'tag', 'body', 'file', 'video'
    ];

    // Primary Key
    public $primarykey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('MyLearning\User');
    }
}
