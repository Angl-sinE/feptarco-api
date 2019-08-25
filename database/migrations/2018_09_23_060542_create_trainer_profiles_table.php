<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_names',140);
            $table->string('last_names',140);
            $table->string('gender',1);
            $table->integer('age');
            $table->dateTime('birth_date');
            $table->string('civil_status');
            $table->string('employment');
            $table->string('current_address',300)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('specialty')->nullable();
            $table->string('details', 500)->nullable();
            $table->boolean('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('club_id')->nullable()->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('trainer_profiles', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('club_id')->references('id')->on('clubs')
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
        Schema::dropIfExists('trainer_profiles');
    }
}
