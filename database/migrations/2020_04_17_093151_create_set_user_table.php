<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('set_id');
            $table->boolean('todaypayment')->default(false);
            $table->integer('amountdeposited')->default(0);
            $table->double('security')->default(0);
            $table->string('previoustoken')->nullable();
            $table->boolean('yesterdaypayment')->default(true);
            $table->boolean('twodaybeforepayment')->default(true);
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
        Schema::dropIfExists('set_user');
    }
}
