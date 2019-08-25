<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArcherProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_names',140);
            $table->string('last_names',140);
            $table->string('gender',1);
            $table->integer('age');
            $table->dateTime('birth_date');
            $table->string('current_category',45);
            $table->string('current_mode',45);
            $table->integer('status')->default(1);
            $table->boolean('federated')->default(1);
            $table->string('passport_number',45)->unique()->nullable();
            $table->string('current_address',300)->nullable();
            $table->string('phone_number',45)->nullable();
            $table->integer('national_ranking')->nullable();
            $table->float('average_arrow')->nullable();
            $table->integer('season_best')->nullable();
            $table->integer('carreer_best')->nullable();
            $table->integer('number_of_matches')->nullable();
            $table->integer('current_score')->nullable();
            $table->dateTime('joined_date')->nullable();
            $table->integer('number_of_faults')->nullable();
            $table->integer('selection_progress')->nullable();
            $table->string('employment')->nullable();
            $table->string('training_days')->nullable();
            $table->dateTime('training_hour_start')->nullable();
            $table->dateTime('training_hour_end')->nullable();
            $table->string('amount_training_hours')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->string('civil_status')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('club_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::table('archer_profiles', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('archer_profiles', function($table) {
            $table->foreign('club_id')->references('id')->on('clubs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archer_profiles');
    }
}
