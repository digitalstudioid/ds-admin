<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrrMeetingRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrr_meeting_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mrr_building')->unsigned()->comment('from table mrr_building');
            $table->string('name');
            $table->enum('is_active', ['0', '1'])->default('1')->comment('0 = No, 1 = Yes');
            $table->timestamps();

            $table->foreign('id_mrr_building')->references('id')->on('mrr_building')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mrr_meeting_room');
    }
}
