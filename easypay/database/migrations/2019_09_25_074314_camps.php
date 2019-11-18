<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Camps extends Migration
{
    /**ww
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',50);
            $table->string('organization_name',200);
            $table->string('kra_pin',200);
            $table->string('physical_address',200);
            $table->string('postal_address',200);
            $table->string('phone',200);
            $table->string('currency',200);
            $table->text('info');
            $table->string('num_of_employees',200);
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
        Schema::dropIfExists('companies');
    }
}
