<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'user_id', 'name', 'slug', 'summary', 'file', 'status'
    ];
    
    public function user()  {
        return $this->belongsTo(User::tag);
    }
    
}
