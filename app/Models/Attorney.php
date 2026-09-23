<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Attorney extends Model
{
    protected $fillable=['photo','name','practice','industry','location','title','email','phone'];
}
