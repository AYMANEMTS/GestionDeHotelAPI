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
        Schema::create('appartment', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('detail')->nullable();
            $table->string('main_image')->nullable();
            $table->float('price_weck')->nullable();
            $table->integer('chambre')->nullable();
            $table->boolean('available')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartment');
    }
};
