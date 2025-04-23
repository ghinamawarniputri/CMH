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
            $table->foreignId('category_id')->constained()->references('id')->on('categories')->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('price');
            $table->text('images');
            $table->boolean('visibility')->default(false);
            $table->text('shopee_link')->nullable();
            $table->text('whatsapp_default_message')->nullable();
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
