<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('modules', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('position')->nullable();
          $table->string('prefix')->nullable();
          $table->string('name');
          $table->longText('resume')->nullable();
          $table->boolean('activated')->default(false);
          $table->timestamps();
          $table->index('name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('modules');
    }
}
