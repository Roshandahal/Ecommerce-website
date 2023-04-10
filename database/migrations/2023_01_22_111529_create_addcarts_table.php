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
        Schema::create('addcarts', function (Blueprint $table) {
            $table->id();
            $table->string('name1')->nullable();
            $table->string('price1')->nullable();
            $table->string('discount1')->nullable();
            $table->string('image1')->nullable();

            $table->string('name2')->nullable();
            $table->string('price2')->nullable();
            $table->string('discount2')->nullable();
            $table->string('image2')->nullable();

            $table->string('name3')->nullable();
            $table->string('price3')->nullable();
            $table->string('discount3')->nullable();
            $table->string('image3')->nullable();
            
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
        Schema::dropIfExists('addcarts');
    }
};
