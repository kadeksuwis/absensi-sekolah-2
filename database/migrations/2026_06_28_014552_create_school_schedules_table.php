<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('school_schedules', function (Blueprint $table) {

            $table->id();

            $table->enum('day', [
                'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu'
            ]);

            $table->time('check_in_start');

            $table->time('late_time');

            $table->time('check_out_time');

            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->boolean('use_default')
                ->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_schedules');
    }
};
