<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('title');
            $table->string('author');
            $table->string('image')->nullable();
            $table->text('description');
            $table->text('ingre')->nullable();
            $table->text('cat')->nullable();

            $table->text('method')->nullable();
            $table->text('duration');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
