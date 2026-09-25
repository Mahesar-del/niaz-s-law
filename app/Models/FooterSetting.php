<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class FooterSetting extends Model {
    protected $fillable = [
        'capability_ids', 'page_links', 'footer_links',
        'about_text', 'copyright_text',
        'facebook_url', 'linkedin_url', 'twitter_url', 'instagram_url',
    ];
    protected $casts = [
        'capability_ids' => 'array',
        'page_links'     => 'array',
        'footer_links'   => 'array',
    ];
}
