<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            
            $table->string('image')->nullable();
            $table->string('res_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('owner');
            $table->text('location');
            $table->text('city');
            $table->text('description');

            $table->string('website')->nullable();
            $table->integer('view_count')->default(0);
            $table->string('pass');

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
        Schema::dropIfExists('restaurants');
    }
}
