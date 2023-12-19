<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use DOMDocument;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'company_info';

    protected $fillable = [
        'company_name',
        'company_address',
        'company_phone',
        'company_email',
        'company_logo',
        'company_facebook',
        'company_twitter',
        'company_linkedin',
        'company_instagram',
        'company_youtube',
        'company_pinterest',
        'company_github',
        'company_map_iframe',
        'tab_icon',
        'home_page_service_image',
        'home_page_youtube_link'
    ];

    public $timestamps = false;

    public $appends = [
        'company_logo',
        'company_map_iframe_src',
        'tab_icon_src',
    ];

    const COMPANY_SOCIAL_ATTRIBUTES_WITH_ICON = [
        'company_facebook'  => 'fab fa-facebook-square',
        'company_twitter'   => 'fab fa-twitter',
        'company_linkedin'  => 'fab fa-linkedin',
        'company_instagram' => 'fab fa-instagram',
        'company_youtube'   => 'fab fa-youtube',
        'company_pinterest' => 'fab fa-pinterest',
        'company_github'    => 'fab fa-github',
    ];

    public function socialLinks()
    {
        $socialLinks = [];
        foreach (self::COMPANY_SOCIAL_ATTRIBUTES_WITH_ICON as $attribute => $icon) {
            if ($this->$attribute) {
                $socialLinks[$attribute] = [
                    'icon' => $icon,
                    'link' => $this->$attribute
                ];
            }
        }
        return $socialLinks;
    }

    /**
     * Get the company map iframe attribute.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function companyMapIframeSrc(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                $value = $attributes['company_map_iframe'];
                $dom = new DOMDocument();
                $dom->loadHTML($value);
                $iframe = $dom->getElementsByTagName('iframe')->item(0);
                
                // Check if iframe element exists before attempting to get src attribute
                if ($iframe) {
                    // get src attribute
                    $src = $iframe->getAttribute('src');
                    return $src;
                } else {
                    // Handle the case where there is no iframe element
                    return ''; // or throw an exception, log an error, etc.
                }
            },
        );
    }

    protected function tabIconSrc(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                $value = $attributes['tab_icon'];
                if($value) {
                    return sprintf("/storage/%s", $value);
                } else {
                    return 'favicon.ico';
                }
            },
        );
    }
}
