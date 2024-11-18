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
            Schema::create('tickets', function (Blueprint $table) {
                $table->id(); 
                $table->foreignId('ad_id')->constrained('ads')->onDelete('cascade'); 
                $table->integer('ticket_adult_price'); 
                $table->integer('ticket_adult_quantity')->default(0); 
                $table->integer('ticket_kid_price'); 
                $table->integer('ticket_kid_quantity')->default(0);
                $table->timestamps(); 
            });
            
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
