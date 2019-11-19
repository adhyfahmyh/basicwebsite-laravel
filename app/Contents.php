<?php

<<<<<<< HEAD
namespace MyLearning;
=======
namespace PLearning;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Contents extends Model
{
    // use Rateable;

    // Table name
    protected $table = 'contents';
    protected $fillable = [
        'user_id', 'title', 'content_img', 'description', 'category', 'tag', 'body', 'file', 'video'
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
<<<<<<< HEAD
        return $this->hasMany('MyLearning\Ratings');
=======
        return $this->hasMany('PLearning\Ratings');
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
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
