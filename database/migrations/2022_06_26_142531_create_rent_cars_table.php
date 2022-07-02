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
        Schema::create('rent_cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('registration_license');
            $table->string('brand');
            $table->string('model');
            $table->string('manufacture_date');
            $table->string('description')->nullable();
            $table->string('category_id');
            $table->string('properties')->nullable();
            $table->string('slug')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_cars');
    }
};
