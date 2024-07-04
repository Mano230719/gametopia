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
        Schema::create('setups', function (Blueprint $table) {
            $table->id();
            $table->string('setup_name');
            $table->string('motherboard');
            $table->string('graphics_card');
            $table->string('processor');
            $table->string('ram');
            $table->unsignedBigInteger('setup_category_id');

            $table->timestamps();

            $table->foreign('setup_category_id')->references('id')->on('setup_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setups');
    }
};
