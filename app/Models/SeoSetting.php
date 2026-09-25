<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    protected $fillable = ['page', 'meta_title', 'meta_description', 'meta_keywords', 'meta_robots'];

    /**
     * Get SEO settings for a specific page.
     * Returns an object with fallback defaults.
     */
    public static function forPage(string $page): self
    {
        return self::firstOrNew(['page' => $page]);
    }
}
