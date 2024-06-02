<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    // allow multiple fields to be mass assignable
    protected $fillable = [
        'title',
        'category',
        'description',
        'author',
        'signees',
    ];

    
}
