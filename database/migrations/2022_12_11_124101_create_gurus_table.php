<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
                        $table->id();
            $table->string('nama_guru');
            $table->string('mata_pelajaran');
            $table->bigInteger('kelas_id')->unsigned()->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('nip');
            $table->string('alamat');
            $table->timestamps();

            
            $table->foreign('kelas_id')->references('id')->on('kelas');
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
};
