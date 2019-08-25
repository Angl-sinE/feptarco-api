<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('annoucement_date')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('name')->unique();
            $table->string('location', 500);
            $table->text('coordinates')->nullable();
            $table->string('details',500)->nullable();
            $table->string('certification_doc',300)->nullable();
            $table->integer('status');
            $table->float('admission_price')->nullable();
            $table->integer('type_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('competitions', function($table) {
            $table->foreign('type_id')->references('id')->on('competitions_types')
            ->onUpdate('cascade')->onDelete('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
