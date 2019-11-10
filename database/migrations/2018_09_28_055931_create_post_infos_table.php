<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('category_id');
            $table->string('location');
            $table->string('address');
            $table->float('rent', 10,2);
            $table->string('phone_no');
            $table->string('email');
            $table->text('short_description');
            $table->text('long_description');
            $table->integer('available_room');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('post_infos');
    }
}
