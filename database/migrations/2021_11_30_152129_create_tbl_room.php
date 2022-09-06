<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_room', function (Blueprint $table) {
            $table->increments('room_id');
            $table->integer('category_id');
            $table->integer('district_id');
            $table->text('room_desc');
            $table->text('room_content');
            $table->string('room_price');
            $table->string('room_image');
            $table->integer('room_status');
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
        Schema::dropIfExists('tbl_room');
    }
}
