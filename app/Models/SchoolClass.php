<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $fillable = [
        'nama_kelas',
        'wali_teacher_id',
    ];

    public function wali()
    {
        return $this->belongsTo(Teacher::class, 'wali_teacher_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}