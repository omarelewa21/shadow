<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'background_image1',
        'background_image2',
        'title',
        'description',
    ];
}
