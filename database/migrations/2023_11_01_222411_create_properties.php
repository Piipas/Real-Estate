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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('title');
            $table->enum('type', \App\Models\Property::types);
            $table->string('location');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->float('price');
            $table->longText('description');
            $table->string('video')->nullable();
            $table->integer('bedroom')->default(0);
            $table->integer('bath')->default(0);
            $table->integer('kitchen')->default(0);
            $table->integer('air_condition')->default(0);
            $table->integer('belcony')->default(0);
            $table->integer('gym')->default(0);
            $table->integer('garden')->default(0);
            $table->integer('cctv')->default(0);
            $table->integer('children_play_ground')->default(0);
            $table->integer('community_center')->default(0);
            $table->integer('security_system')->default(0);
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
        Schema::dropIfExists('properties');
    }
};
