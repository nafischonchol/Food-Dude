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
            $table->text('description')->nullable('NULL');
            $table->text('ingredients')->nullable('NULL');
            $table->text('nutrition')->nullable('NULL');
            $table->string('menuType')->nullable('NULL');
            $table->string('foodType')->nullable('NULL');
            $table->string('category')->nullable('NULL');
            $table->string('subCatergory')->nullable('NULL');
            $table->string('image')->nullable('NULL');
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
