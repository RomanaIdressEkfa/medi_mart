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
        Schema::create('vendor__details', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('store_name');
            $table->text('store_link')->nullable();
            $table->text('location')->nullable();
            $table->text('store_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor__details');
    }
};
