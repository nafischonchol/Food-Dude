<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('res_id');
            $table->string('res_name');
            $table->string('price');
            $table->text('description')->default('NULL');
            $table->text('ingredients')->default('NULL');
            $table->text('nutrition')->default('NULL');
            $table->string('menuType')->default('NULL');
            $table->string('foodType')->default('NULL');
            $table->string('category')->default('NULL');
            $table->string('subCatergory')->default('NULL');
            $table->string('image')->default('NULL');
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
        Schema::dropIfExists('menus');
    }
}
