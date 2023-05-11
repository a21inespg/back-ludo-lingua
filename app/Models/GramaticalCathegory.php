<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GramaticalCathegory extends Model
{
    use HasFactory;

    protected $table = 'gramatical_cathegories';
    protected $fillable = ['name'];

}
