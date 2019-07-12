<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhomTheLoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhomtheloai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nhomTheLoaiId');
            $table->String("ten",128);
            $table->tinyInteger("kichHoat")->default("1");
            $table->tinyInteger("daXoa")->default("0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhomtheloai');
    }
}
