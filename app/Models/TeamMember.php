<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'image',
        'fixed_in_about_page',
    ];
}
