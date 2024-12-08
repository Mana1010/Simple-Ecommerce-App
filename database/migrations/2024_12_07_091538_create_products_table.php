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
            $table->string('product_name');
            $table->enum('category', ['food', 'electronic', 'beauty', 'cloth', 'home', 'toy', 'book', 'tool', 'jewelry']);
            $table->decimal('price', 8, 2);
            $table->integer('stock_quantity');
            $table->text('description');
            $table->string('manufacturer');
            $table->timestamps();
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