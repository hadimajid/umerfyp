<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKameetiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kameeti_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kameeti_id');
            $table->unsignedBigInteger('user_id');
            $table->string('cnic_front');
            $table->string('cnic_back');
            $table->string('signature');
            $table->boolean('registered')->default(0);
            $table->foreign('kameeti_id')->references('id')->on('kameetis')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('kameeti_user');
    }
}
