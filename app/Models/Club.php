<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Club extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'emblem'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
    public function deleteFile()
    {
        if ($this->emblem!=null){

            $path=storage_path("app/public/{$this->emblem}");
            //dd($path);
            File::delete($path);

        }
    }

}
