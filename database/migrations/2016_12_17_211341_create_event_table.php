<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->integer('category_event_id');
            $table->string('name');
            $table->date('date');
            $table->string('hour');
            $table->string('local');
            $table->string('organization');
            $table->string('manager');
            $table->string('email');
            $table->string('site');
            $table->string('phone');
            $table->string('ingress');
            $table->text('description');
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
        //
    }
}
