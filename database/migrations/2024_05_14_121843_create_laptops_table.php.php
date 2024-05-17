<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->timestamps(); 
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};  
 

// import area define the vale of the system under the value of like function array define import 
