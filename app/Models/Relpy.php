<?php

namespace App\Models;

class Relpy extends Model
{
    protected $fillable = ['content'];

    public function topic()
    {
      return $this->belongsTo(Topic::class);
    }

    public function user()
    {
     return $this->belongsTo(User::class);
    }
}
