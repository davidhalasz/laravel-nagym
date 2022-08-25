<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eloterjesztes extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_id', 'filename', 'filepath',
    ];
}
