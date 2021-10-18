<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->integer('perday');
            $table->integer('totalday');
            $table->integer('totalusers');
            $table->integer('currentusers')->default(0);
            $table->double('totalamount');
            $table->integer('dayspassed')->default(0);
            $table->double('returnperperson');
            $table->double('returnamount');
            $table->double('extras')->default(0);
            $table->double('totalamountperperson');
            $table->double('firsthopee');
            $table->double('secondhopee');
            $table->double('thirdhopee');
            $table->double('mycommission');
            $table->double('jazzcommission');
            $table->string('state');
            $table->date('startdate')->nullable();
            $table->date('tommorow')->nullable();
            $table->date('registereddate')->nullable();
            $table->date('enddate')->nullable();
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
        Schema::dropIfExists('sets');
    }
}
