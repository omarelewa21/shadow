<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'service_title',
        'service_description',
        'why_choose_description',
        'service_main_banner',
        'service_second_banner',
        'service_third_banner',
        'icon',
        'home_description',
        'fixed_in_home_page',
    ];

    protected $appends = [
        'service_main_banner_src',
        'service_second_banner_src',
        'service_third_banner_src',
    ];

    protected function serviceMainBannerSrc(): Attribute
    {
        return Attribute::make(
            fn ($value, $attributes) => sprintf("/storage/%s", $attributes['service_main_banner']),
        );
    }

    protected function serviceSecondBannerSrc(): Attribute
    {
        return Attribute::make(
            fn ($value, $attributes) => sprintf("/storage/%s", $attributes['service_second_banner']),
        );
    }

    protected function serviceThirdBannerSrc(): Attribute
    {
        return Attribute::make(
            fn ($value, $attributes) => sprintf("/storage/%s", $attributes['service_third_banner']),
        );
    }    
}
