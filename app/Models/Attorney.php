<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Attorney extends Model
{
    protected $fillable=['photo','name','slug','practice','industry','location','title','email','phone','overview','experience','experience_points','education','admissions'];
    public function capabilities(){return $this->belongsToMany(Capability::class);} public function blogPosts(){return $this->belongsToMany(BlogPost::class);}
}
