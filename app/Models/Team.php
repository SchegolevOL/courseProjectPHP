<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',

    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }
}
