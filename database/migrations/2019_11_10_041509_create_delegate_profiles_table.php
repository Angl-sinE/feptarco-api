<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegate_profiles', function (Blueprint $table) {
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
            $table->boolean('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::table('delegate_profiles', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('delegate_profiles');
    }
}
