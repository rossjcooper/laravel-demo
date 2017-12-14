<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'complete',];

    public function user()
    {
        return $this->belongaTo(User::class);
    }
}
