<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_access', function (Blueprint $table) {
            $table->integer('access_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::table('role_access', function($table) {
        $table->foreign('access_id')->references('id')->on('access')
            ->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('role_id')->references('id')->on('roles')
            ->onUpdate('cascade')->onDelete('cascade');
        $table->primary(['access_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_access');
    }
}
