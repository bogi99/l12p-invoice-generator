<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serialNumber extends Model
{
    /** @use HasFactory<\Database\Factories\SerialNumberFactory> */
    use HasFactory;
    protected $fillable = [
        'prefix',
        'number',
        'increment',
    ];
}
