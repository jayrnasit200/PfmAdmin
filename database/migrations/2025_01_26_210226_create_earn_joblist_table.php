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
        Schema::create('earn_joblist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('Job_title');
            $table->double('pay_rate');
            $table->Text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earn_joblist');
    }
};
