<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemeny extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'filepath',
    ];
    protected $casts = [
        'startDate' => 'date:Y-m-d',
        'endDate' => 'date:Y-m-d',
    ];
    
}
