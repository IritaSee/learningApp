<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelajaran');
            $table->unsignedInteger('sekolah_id');
            $table->unsignedInteger('konten_id');
            $table->timestamps();

            $table->foreign('sekolah_id')
            ->references('id')
            ->on('sekolahs')
            ->onDelete('cascade');

            $table->foreign('konten_id')
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
        Schema::dropIfExists('kelas');
    }
}
