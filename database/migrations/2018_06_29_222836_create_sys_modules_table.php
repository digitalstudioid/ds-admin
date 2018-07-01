<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('path');
            //$table->string('table_name')->nullable();
            //$table->string('controller')->nullable();
            //$table->boolean('is_protected')->default(false);
            $table->integer('sorting');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER sys_modules_before_ins_tr BEFORE INSERT ON sys_modules FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER sys_modules_before_upd_tr BEFORE UPDATE ON sys_modules FOR EACH ROW
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
        DB::unprepared('DROP TRIGGER sys_modules_before_ins_tr');
        DB::unprepared('DROP TRIGGER sys_modules_before_upd_tr');
        Schema::dropIfExists('sys_modules');
    }
}
