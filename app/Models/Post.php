<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
