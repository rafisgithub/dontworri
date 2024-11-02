<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;


    protected $fillable = [
        'university_id',
        'first_year',
        'second_year',
        'third_year',
        'fourth_year',
    ];

}
