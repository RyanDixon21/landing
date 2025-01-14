<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'app_settings';
    
    protected $fillable = [
        'key',
        'value',
        'type'
    ];
}