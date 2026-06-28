<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSchedule extends Model
{
    protected $fillable = [

        'day',

        'check_in_start',

        'late_time',

        'check_out_time',

        'use_default',

        'is_active',

    ];
}
