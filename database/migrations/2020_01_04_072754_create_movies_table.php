<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('online', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('owner_id');
            $table->string('owners');
            
            $table->text('name');
            $table->string('age');
            $table->text('gender');
            $table->text('occupation');
            $table->text('blood');
            $table->text('citizenship');
            $table->string('passport');
            $table->text('pad');
            $table->text('pav');
            $table->string('paw');
            $table->text('tad');
            $table->text('tavt');
            $table->string('taw');
            $table->text('email');
            $table->string('phone');
            $table->text('vehicle');
            $table->text('education');
            $table->text('citizenship_issue');
            $table->string('document');
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
        Schema::dropIfExists('online');
    }
}
