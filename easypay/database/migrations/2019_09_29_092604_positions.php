<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Positions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',50);
            $table->string('title',200);
			$table->string('rate',200);
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
		 Schema::dropIfExists('positions');
        //
    }
}
