<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('image');
            $table->string('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('township_id');
            $table->unsignedBigInteger('quartervillage_id');
            $table->unsignedBigInteger('status_id')->default('1');
            $table->timestamps();

          
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('township_id')->references('id')->on('townships');
            $table->foreign('quartervillage_id')->references('id')->on('quarter_villages');
            $table->foreign('status_id')->references('id')->on('statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complains');
    }
}
