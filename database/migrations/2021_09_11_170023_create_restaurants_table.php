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

            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('owner');
            $table->string('res_name');
            $table->text('city');
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->string('website')->nullable();
            $table->string('pass');
            $table->string('image')->nullable();
            $table->integer('view_count')->default(0);
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
