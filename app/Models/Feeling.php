<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeling extends Model
{
    protected $hidden = [
        'name',
    ];

    public function playlists()
    {
        return $this->hasMany('App\Models\Playlist');
    }

    public function songs()
    {
        return $this->hasMany('App\Models\Song');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
