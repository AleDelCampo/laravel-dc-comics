<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("title");
            $table->text("description");
            $table->text("thumb")->nullable();
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
