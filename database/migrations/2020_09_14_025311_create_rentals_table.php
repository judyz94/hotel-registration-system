<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->date('check_in');
            $table->date('check_out');
            $table->double('total_cost', 8, 2);
            $table->mediumText('observation')->nullable();
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('receptionist_id');
            $table->unsignedBigInteger('status_id');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('receptionist_id')
                ->references('id')
                ->on('receptionists')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
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
        Schema::dropIfExists('rentals');
    }
}
