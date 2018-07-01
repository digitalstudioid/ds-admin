<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_privileges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('theme_color')->nullable();
            $table->boolean('is_superadmin')->default(false);
            $table->boolean('is_default')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER sys_privileges_before_ins_tr BEFORE INSERT ON sys_privileges FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER sys_privileges_before_upd_tr BEFORE UPDATE ON sys_privileges FOR EACH ROW
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
        DB::unprepared('DROP TRIGGER sys_privileges_before_ins_tr');
        DB::unprepared('DROP TRIGGER sys_privileges_before_upd_tr');
        Schema::dropIfExists('sys_privileges');
    }
}
