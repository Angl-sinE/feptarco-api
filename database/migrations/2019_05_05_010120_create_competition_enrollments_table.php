<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id')->unsigned();
            $table->integer('archer_id')->unsigned();
            $table->integer('status');
            $table->float('payment_amount');
            $table->string('payment_invoice');
            $table->integer('updated_by')->nullable()->unsigned();
            $table->timestamps();

        });

        Schema::table('competition_enrollments', function($table) {
            $table->foreign('updated_by')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('competition_id')->references('id')->on('competitions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('archer_id')->references('id')->on('archer_profiles')
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
        Schema::dropIfExists('competition_enrollments');
    }
}
