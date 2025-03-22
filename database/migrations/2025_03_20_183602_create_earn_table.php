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
        Schema::create('earn', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->foreignId('user_id');
            $table->date('date_earned');
            $table->string('category');
            $table->string('source');
            $table->foreignId('job_id')->nullable();
            $table->longText('notes')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earn');
    }
};
