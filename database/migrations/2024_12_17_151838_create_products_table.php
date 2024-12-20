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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 10, 2); 
            $table->decimal('oldPrice', 10, 2)->nullable()->change();
            $table->integer('quantity')->default(0); 
            $table->string('sku')->unique(); 
            $table->unsignedBigInteger('category_id'); 
            $table->string('image')->nullable(); 
            $table->boolean('is_active')->default(true); 
            $table->timestamps(); 

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
