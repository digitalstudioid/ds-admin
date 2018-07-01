<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_application', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->boolean('api_debug_mode')->default(true);
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER sys_application_before_ins_tr BEFORE INSERT ON sys_application FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER sys_application_before_upd_tr BEFORE UPDATE ON sys_application FOR EACH ROW
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
        DB::unprepared('DROP TRIGGER sys_application_before_ins_tr');
        DB::unprepared('DROP TRIGGER sys_application_before_upd_tr');
        Schema::dropIfExists('sys_application');
    }
}
