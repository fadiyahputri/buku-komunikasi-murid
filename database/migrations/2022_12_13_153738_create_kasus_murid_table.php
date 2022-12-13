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
        Schema::create('kasus_murid', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kasus_id')->unsigned();
            $table->bigInteger('murid_id')->unsigned();
            $table->timestamps();

            $table->foreign('kasus_id')->references('id')->on('kasus')->onDelete('cascade');
            $table->foreign('murid_id')->references('id')->on('murid')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus_murid');
    }
};
