<?php

namespace PLearning;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
     // Table name
     protected $table = 'user_selection';
     protected $fillable = [
        'user_id', 'content_id', 'total_selection'
    ];

     // Primary Key
     public $primarykey = 'id';
 
     // Timestamps
     public $timestamps = true;
 
    //  public function user()
    //  {
    //      return $this->belongsTo('PLearning\User');
    //  }
 
    //  public function contents() {
    //      return $this->belongsTo('PLearning\Contents');
    //  }
}
