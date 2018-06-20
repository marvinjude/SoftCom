<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSoftware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id');
            $table->integer('author_id');  //synonumous to user
            $table->string('download_link')->nullable();
            $table->text('description');
            $table->decimal('price');
            $table->string('downloads')->nullable();
            $table->integer('stars')->nullable();
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
        //
    }
}
