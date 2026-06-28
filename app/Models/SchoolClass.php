<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolClass extends Model
{
    protected $fillable = [
        'nama_kelas',
        'wali_teacher_id',
    ];

    public function wali(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'wali_teacher_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id');
    }
    public function classHistories()
    {
        return $this->hasMany(StudentClassHistory::class, 'class_id');
    }
}
