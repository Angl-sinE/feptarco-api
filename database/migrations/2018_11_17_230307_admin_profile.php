<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_profiles', function (Blueprint $table) {
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
        Schema::table('admin_profiles', function($table) {
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
        Schema::dropIfExists('admin_profiles');
    }
}
