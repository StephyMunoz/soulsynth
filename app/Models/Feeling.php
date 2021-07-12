<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeling extends Model
{
    protected $fillable = [
        'f_name',
        'f_nature',
    ];
}
