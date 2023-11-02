<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_pictures', function (Blueprint $table) {
            $table->id('property_picture_id');
            $table->string('name');
            // $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['bath', 'bedroom', 'kitchen', 'garage', 'outside'])->nullable();
            $table->boolean('main')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties_pictures');
    }
};
