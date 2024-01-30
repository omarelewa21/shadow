<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProjectImages extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'portfolio_project_images';

    protected $fillable = [
        'project_id',
        'image',
    ];

    public function project()
    {
        return $this->belongsTo(PortfolioProjectWithPage::class, 'project_id');
    }
}
