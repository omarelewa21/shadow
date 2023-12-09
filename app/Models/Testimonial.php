<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_position',
        'testimonial_text',
        'client_image',
        'rating',
    ];
}
