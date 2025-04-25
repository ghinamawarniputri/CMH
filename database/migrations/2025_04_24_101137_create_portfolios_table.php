<?php

// database/migrations/[timestamp]_create_portfolios_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('genre', ['Accoustic', 'Dubstep', 'Jazz', 'Pop', 'Progressive', 'Sundanese']);
            $table->string('link', 2083);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
};