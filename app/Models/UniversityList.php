<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityList extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function years() {
        return $this->hasMany(Year::class);
    } 
}
