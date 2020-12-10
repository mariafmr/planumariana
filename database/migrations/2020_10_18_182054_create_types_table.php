<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title', 300);
            $table->string('subtitle', 500)->nullable();
            $table->text('content')->nullable();
            $table->text('content_long')->nullable();
         //   $table->string('image_url');
            $table->unsignedbigInteger('threat_id');

            $table->foreign('threat_id')->references('id')->on('threats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
