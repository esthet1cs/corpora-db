<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('entries', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->unique();
      // manually editable identifier
      $table->string('identifier')->nullable();
      // foreign key constraint on genre
      $table->integer('genre_id')->unsigned()->nullable();
      $table->foreign('genre_id')
            ->references('id')->on('genres')
            ->onDelete('cascade');
      // publishing year
      $table->integer('year')->nullable();
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
    Schema::dropIfExists('entries');
  }
}
