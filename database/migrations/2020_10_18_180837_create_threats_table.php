<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('subtitle', 500)->nullable();
            $table->text('content')->nullable();
            $table->text('content_long')->nullable();
         //   $table->string('image_url');
           // $table->unsignedbigInteger('user_id');

           // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threats');
    }
}
