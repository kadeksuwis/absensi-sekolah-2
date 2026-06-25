<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'nip',
        'is_bk',
        'is_piket',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function classes()
    {
        return $this->hasMany(SchoolClass::class, 'wali_teacher_id');
    }
}
