<?php

namespace MyLearning;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Contents extends Model
{
    // use Rateable;

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
        return $this->belongsTo(User::class);
    }
    public function ratings()
    {
        return $this->hasMany('MyLearning\Ratings');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    
}
// $contents = Contents::first();

// $rating = new willvincent\Rateable\Rating;
// $rating->rating = 5;
// $rating->user_id = \Auth::id();

// $contents->ratings()->save($rating);

// dd(Contents::first()->ratings);
