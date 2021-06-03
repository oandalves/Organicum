<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('sexo'); 
            $table->string('visit');
            $table->string('description')->nullable();
            $table->string('days')->nullable();
            $table->string('delivery');           
            $table->string('agriculture');
            $table->string('certification');
            $table->string('payment');
            $table->boolean('sipaf');
            $table->integer('ddd');
            $table->integer('number');
            $table->string('postalcode');
            $table->string('address');
            $table->int('num');
            $table->string('neighborhood');
            $table->string('complete')->nullable();
            $table->string('city');
            $table->string('station');
            $table->string('country');
            $table->boolean('status')->default(0);
            $table->integer('fair_id')
                            ->unsigned();
            $table->foreign('fair_id')
                            ->references('id')
                            ->on('fairs')
                            ->onUpdate('cascade');
            $table->integer('user_id')
                            ->unsigned();
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onUpdate('cascade');
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
        Schema::dropIfExists('marketers');
    }
}
