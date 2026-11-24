<?php

namespace App\Models;

use Database\Factories\ProgramFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    /** @use HasFactory<ProgramFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'channel',
        'category',
        'is_watched',
    ];

    protected $casts = [
        'is_watched' => 'boolean',
    ];
}
