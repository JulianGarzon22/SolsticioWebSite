<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'body', 'file', 'status'
    ];

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public function category()  {
        return $this->belongsTo(Category::class);
      }
}