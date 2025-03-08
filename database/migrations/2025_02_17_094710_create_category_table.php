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
        Schema::create('category', function (Blueprint $table) {
    
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        $data = [
            ['name'=>'Bills','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Charity','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Eating out','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Expenses','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Family','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'General','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Gift','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Groceries','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Holidays','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'personal care','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Saving','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Shopping','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Transport','created_at'=>now(),'updated_at'=>now()],
           

        ];
        DB::table('category')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
