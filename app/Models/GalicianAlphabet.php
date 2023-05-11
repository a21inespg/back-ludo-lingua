<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalicianAlphabet extends Model
{
    use HasFactory;

    protected $table = 'galician_alphabets';
    protected $fillable = ['letra'];
}
