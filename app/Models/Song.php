<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $hidden = [
        's_id',
        's_name',
        's_artist',
        's_producer',
        'release_date',
        's_genre',
        's_album',
        's_duration',
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
