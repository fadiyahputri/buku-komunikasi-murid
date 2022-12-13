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
        Schema::create('murid_pelanggaran', function (Blueprint $table) {
            $table->unsignedBigInteger('nama_murid');
            $table->foreign('nama_murid')->references('id')->on('murid')->onDelete('restrict');
            $table->unsignedBigInteger('pelanggaran');
            $table->foreign('pelanggaran')->references('id')->on('pelanggaran')->onDelete('restrict');
            $table->unsignedBigInteger('point');
            $table->foreign('point')->references('id')->on('pelanggaran')->onDelete('restrict');
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
        Schema::dropIfExists('murid_pelanggaran');
    }
};
