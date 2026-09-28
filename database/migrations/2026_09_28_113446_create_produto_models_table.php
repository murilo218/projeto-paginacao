<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
    $table->id();
    $table->string('name');          
    $table->decimal('price', 8, 2);  
    $table->date('expiration_date'); 
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_models');
    }
};
