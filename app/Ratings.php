<?php

namespace PLearning;

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
        return $this->belongsTo('PLearning\User');
    }

    public function contents() {
        return $this->belongsTo('PLearning\Contents');
    }
}
