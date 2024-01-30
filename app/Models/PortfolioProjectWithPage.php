<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProjectWithPage extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'home_banner',
        'home_title',
        'background_banner',
        'main_banner',
        'contact_banner',
        'client_name',
        'category',
        'project_date',
        'project_overview',
        'twitter_link',
        'facebook_link',
        'instagram_link',
        'behance_link',
    ];
    
    public function images()
    {
        return $this->hasMany(PortfolioProjectImage::class, 'project_id');
    }
}
