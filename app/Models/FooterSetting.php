<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class FooterSetting extends Model { protected $fillable=['capability_ids','page_links','footer_links']; protected $casts=['capability_ids'=>'array','page_links'=>'array','footer_links'=>'array']; }
