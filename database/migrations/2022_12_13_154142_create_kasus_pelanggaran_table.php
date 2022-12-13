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
        Schema::create('kasus_pelanggaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kasus_id')->unsigned();
            $table->bigInteger('pelanggaran_id')->unsigned();
            $table->timestamps();

            $table->foreign('kasus_id')->references('id')->on('kasus')->onDelete('cascade');
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus_pelanggaran');
    }
};
