<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
           
                $table->id();
                $table->integer('res_id');
                $table->string('res_name');
                $table->integer('user_id')->default(0);
                $table->string('fname');
                $table->string('lname');
                $table->string('mobile');
                $table->string('specialReq');

                $table->integer('hour_id')->default(0);
                $table->string('hours');
                $table->string('date');
                $table->integer('people');
                $table->string('zactive')->default('Pending');
                $table->string('email')->default('NULL');

                $table->timestamps();
            
        });
    }

    
    // INSERT INTO `orders` (`id`, `res_id`, `res_name`, `user_id`, `fName`, `fLame`, `mobile`, `specialReq`, `hour_id`, `hours`, `date`, `people`, `zactive`, `created_at`, `updated_at`) VALUES (NULL, '5', 'Dream Holiday', '0', 'Nafis', 'Chonchol', '0174137742', '', '5', '8.30 PM', '2021-09-18', '2', 'Order', NULL, NULL);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
