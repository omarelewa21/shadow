<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
    ];
}
