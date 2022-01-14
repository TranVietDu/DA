<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViecLamDaLuuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viec_lam_da_luu', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id')->unsigned();
            $table->string('tieude');
            $table->string('tenquan');
            $table->text('diachi');
            $table->string('soluong');
            $table->string('nganhnghe');
            $table->string('luong');
            $table->text('thoigian');
            $table->text('mota');
            $table->text('anh')->nullable();
            $table->text('ngayhethan');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes(); // add
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viec_lam_da_luu');
    }
}