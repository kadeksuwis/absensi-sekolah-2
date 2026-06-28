<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = [

        'start_year',

        'nama',

        'is_active',

    ];
    public function classHistories()
    {
        return $this->hasMany(
            StudentClassHistory::class,
            'academic_year_id'
        );
    }
}
