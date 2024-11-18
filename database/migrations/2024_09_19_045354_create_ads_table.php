<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100); 
            $table->text('description')->nullable();
            $table->dateTime('event_date'); 
            $table->string('address', 255)->nullable();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
