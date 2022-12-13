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
        Schema::create('kasus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('murid_id');
            $table->unsignedBigInteger('pelanggaran_id');
            $table->dateTimeTz('tanggal');
           

            $table->foreign('murid_id')->references('id')->on('murid')->onDelete('cascade');
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')->onDelete('cascade');
            $table->timestamps();
            // $table->unsignedBigInteger('point_id');
            // $table->unsignedBigInteger('sanksi_id');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus');
    }
};
