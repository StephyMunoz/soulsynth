<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    public function feelings()
    {
        return $this->belongsToMany('App\Models\Feeling')->withTimestamps();
    }

    public function songs()
    {
        return $this->belongsToMany('App\Models\Song')->withTimestamps();
    }
}
