<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transform extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
