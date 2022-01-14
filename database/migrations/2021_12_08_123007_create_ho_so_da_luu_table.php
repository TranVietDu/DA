<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoSoDaLuuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_so_da_luu', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id')->unsigned();
            $table->string('ten');
            $table->text('ngaysinh');
            $table->string('gioitinh');
            $table->string('sdt');
            $table->string('email');
            $table->string('nganhnghe');
            $table->text('diachi');
            $table->text('mota');
            $table->text('anh')->nullable();
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
        Schema::table('ho_so_da_luu', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
