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
        return $this->belongsTo('App\Models\User');
    }

    public function feelings()
    {
        return $this->belongsTo('App\Models\Feeling');
    }

    public function songs()
    {
        return $this->belongsTo('App\Models\Song');
    }
}
