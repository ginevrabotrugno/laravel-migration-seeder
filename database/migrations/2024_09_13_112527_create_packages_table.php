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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('destination');           
            $table->text('description');             
            $table->decimal('price', 8, 2);          
            $table->integer('days');                 
            $table->string('accommodation');         
            $table->string('transport');             
            $table->string('departure_location');    
            $table->date('departure_date');          
            $table->date('return_date');             
            $table->integer('max_participants');     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
