<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->enum('status', ['Available', 'Not Available']);
            $table->double('cost', 8, 2);
            $table->mediumText('description')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                ->references('id')
                ->on('room_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
