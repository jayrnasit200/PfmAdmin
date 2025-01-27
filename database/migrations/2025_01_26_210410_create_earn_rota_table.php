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
        Schema::create('earn_rota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->foreignId('user_id');
            $table->date('Date');
            $table->time('sTime', precision: 0);
            $table->time('eTime', precision: 0);
            $table->enum('status', ['pending', 'completed'])->default('pending');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earn_rota');
    }
};
