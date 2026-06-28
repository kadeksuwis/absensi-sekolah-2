<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    protected $fillable = [

        'default_check_in_start',

        'default_late_time',

        'default_check_out_time',

    ];
}
