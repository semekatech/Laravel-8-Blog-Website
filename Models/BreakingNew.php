<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNew extends Model
{
    use HasFactory;
     protected $fillable=[
    'title',
    'slug',
    'image',
    'category_id',
    'description',
    'views',
    ];
}
