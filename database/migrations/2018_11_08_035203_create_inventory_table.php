<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->string('brand')->nullable();
            $table->string('details')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('type');
            $table->boolean('federation_owned');
            $table->boolean('status')->default(1);
            $table->integer('owned_by')->unsigned();
            $table->integer('asigned_to')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        Schema::table('inventory', function($table) {
            $table->foreign('owned_by')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('asigned_to')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')
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
        Schema::dropIfExists('inventory');
    }
}
