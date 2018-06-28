<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrrBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrr_building', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('is_active', ['0', '1'])->default('1')->comment('0 = No, 1 = Yes');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::unprepared('CREATE TRIGGER mrr_building_before_ins_tr BEFORE INSERT ON mrr_building FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER mrr_building_before_upd_tr BEFORE UPDATE ON mrr_building FOR EACH ROW
        BEGIN
            set new.updated_at = now(), new.created_at = old.created_at;

            If new.deleted_at <> \'\' then
                set new.is_active = 1;
            end if;
        END');        

        DB::unprepared('CREATE TRIGGER mrr_building_after_upd_tr AFTER UPDATE ON mrr_building FOR EACH ROW
        BEGIN
            If new.is_active = 1 then /* 0 = No (idx no. 1), 1 = Yes (idx no. 2) */
                Update mrr_meeting_room set is_active = new.is_active where id_mrr_building = new.id;
            end if;

            If new.deleted_at <> \'\' then
                Update mrr_meeting_room set deleted_at = new.deleted_at where id_mrr_building = new.id;
            end if;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER mrr_building_before_ins_tr');
        DB::unprepared('DROP TRIGGER mrr_building_before_upd_tr');
        DB::unprepared('DROP TRIGGER mrr_building_after_upd_tr');
        Schema::dropIfExists('mrr_building');
    }
}
