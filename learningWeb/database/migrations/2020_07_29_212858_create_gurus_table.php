<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->unsignedInteger('sekolah_id');
            $table->unsignedInteger('kelas_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('sekolah_id')
            ->references('id')
            ->on('sekolahs')
            ->onDelete('cascade');

            $table->foreign('kelas_id')
            ->references('id')
            ->on('kelas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
