<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('owner_id');
            $table->string('owners');
            
            $table->text('name');
            $table->string('age');
            $table->text('gender');
            $table->text('address');

            $table->text('vps');
            $table->text('cn');
            $table->text('vm');
            $table->text('vmy');
            $table->text('vhp');
            $table->string('vcn');
            $table->string('ven');
            $table->text('vpc');
            $table->text('vu');
            $table->text('vw');
            $table->text('fuel');          
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
        Schema::dropIfExists('vehicle');
    }
}
