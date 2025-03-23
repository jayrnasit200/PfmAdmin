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
        Schema::create('goals_contribution', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->Text('notes');
            $table->foreignId('goal_id')->constrained()->onDelete('cascade');
            $table->date("date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals_contribution');
    }
};
