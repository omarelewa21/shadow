<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialStats extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'stat_name',
        'stat_value',
        'add_plus_sign',
        'add_k_char',
    ];

    
}
