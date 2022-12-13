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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->bigInteger('guru_id')->unsigned();
            $table->foreign('guru_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->timestamps();

            
            // $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            // $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
            // $table->foreign('guru_id')->references('id')->on('guru');
            // $table->foreign('kelas_id')->references('id')->on('guru');
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
};
