<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'href',
        'artist',
        'producer',
        'release_date',
        'genre',
        'album',
        'duration',
        'image',
    ];

    public function feeling()
    {
        return $this->belongsTo('App\Models\Feeling');
    }

    public function playlists()
    {
        return $this->belongsToMany('App\Models\Playlist');
    }
}
