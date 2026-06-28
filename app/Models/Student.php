<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'class_id',
        'qr_token',
    ];

    public function schoolClass(): BelongsTo
    {
        return $this->belongsTo(
            SchoolClass::class,
            'class_id'
        );
    }
    public function classHistories()
    {
        return $this->hasMany(StudentClassHistory::class);
    }
}
