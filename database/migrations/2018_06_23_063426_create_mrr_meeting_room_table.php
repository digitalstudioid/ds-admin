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
            $table->text('description');
            $table->integer('capacity');
            $table->enum('is_active', ['0', '1'])->default('1')->comment('0 = No, 1 = Yes');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_mrr_building')->references('id')->on('mrr_building')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        DB::unprepared('CREATE TRIGGER mrr_meeting_room_before_ins_tr BEFORE INSERT ON mrr_meeting_room FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER mrr_meeting_room_before_upd_tr BEFORE UPDATE ON mrr_meeting_room FOR EACH ROW
        BEGIN
            set new.updated_at = now(), new.created_at = old.created_at;
        END');        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER mrr_meeting_room_before_ins_tr');
        DB::unprepared('DROP TRIGGER mrr_meeting_room_before_upd_tr');
        Schema::dropIfExists('mrr_meeting_room');
    }
}
