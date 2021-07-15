<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $hidden = ['idList'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function feeling()
    {
        return $this->belongsTo('App\Models\Feeling');
    }

    public function songs()
    {
        return $this->belongsToMany('App\Models\Song');
    }
}
