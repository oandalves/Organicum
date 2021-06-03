<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('description');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('postalcode');
            $table->string('address');
            $table->string('neighborhood');
            $table->string('complete');
            $table->string('city');
            $table->string('station');
            $table->string('country');
            $table->string('name');
            $table->text('text');
            $table->string('days');
            $table->string('image');
            $table->integer('ddd');
            $table->integer('phone');
            $table->string('addressfair');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('fairs');
    }
}
