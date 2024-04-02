<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'generated_numbers',
        'user_numbers',
        'cows',
        'bulls',
        'total_points'
    ];
}
