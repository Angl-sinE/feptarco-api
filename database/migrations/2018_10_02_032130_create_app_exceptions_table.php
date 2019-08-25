<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_exceptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 30);
            $table->string('code', 50);
            $table->text('file');
            $table->string('line', 10);
            $table->text('message');
            $table->text('trace');
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
        Schema::dropIfExists('app_exceptions');
    }
}
