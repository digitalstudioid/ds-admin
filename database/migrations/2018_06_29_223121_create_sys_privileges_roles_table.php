<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysPrivilegesRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_privileges_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_sys_privileges')->unsigned()->comment('from table sys_privileges');
            $table->bigInteger('id_sys_modules')->unsigned()->comment('from table sys_modules');
            $table->boolean('is_visible')->default(false);
            //$table->boolean('is_read')->default(false);
            $table->boolean('is_create')->default(false);
            $table->boolean('is_edit')->default(false);
            $table->boolean('is_delete')->default(false);
            $table->boolean('is_print')->default(false);
            $table->boolean('is_export')->default(false);
            $table->timestamps();

            $table->foreign('id_sys_privileges')->references('id')->on('sys_privileges')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_sys_modules')->references('id')->on('sys_modules')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        DB::unprepared('CREATE TRIGGER sys_privileges_roles_before_ins_tr BEFORE INSERT ON sys_privileges_roles FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER sys_privileges_roles_before_upd_tr BEFORE UPDATE ON sys_privileges_roles FOR EACH ROW
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
        DB::unprepared('DROP TRIGGER sys_privileges_roles_before_ins_tr');
        DB::unprepared('DROP TRIGGER sys_privileges_roles_before_upd_tr');
        Schema::dropIfExists('sys_privileges_roles');
    }
}
