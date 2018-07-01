<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_email', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mail_sender')->nullable();
            $table->enum('mail_driver', ['smtp', 'mail', 'sendmail'])->nullable();
            $table->string('mail_host')->nullable();
            $table->integer('mail_port')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER sys_email_before_ins_tr BEFORE INSERT ON sys_email FOR EACH ROW
        BEGIN
            set new.created_at = now(); 
        END');

        DB::unprepared('CREATE TRIGGER sys_email_before_upd_tr BEFORE UPDATE ON sys_email FOR EACH ROW
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
        DB::unprepared('DROP TRIGGER sys_email_before_ins_tr');
        DB::unprepared('DROP TRIGGER sys_email_before_upd_tr');
        Schema::dropIfExists('sys_email');
    }
}
