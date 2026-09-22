<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = ['franklin_address', 'naperville_address', 'phone', 'email'];
}
