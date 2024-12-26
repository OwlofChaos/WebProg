<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CleanupProject extends Model
{
    use HasFactory;

    protected $fillable = ['name_event', 'location', 'date', 'image_path'];

    protected $casts = [
        'date' => 'date',
    ];
}

