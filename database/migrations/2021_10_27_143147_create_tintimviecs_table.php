<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTimViecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_10_27_143147_create_tintimviecs_table.php
        Schema::create('tintimviecs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('ten');
            $table->string('gioitinh');
            $table->string('ngaysinh');
            $table->string('email')->nullable();
            $table->string('anh');
            $table->string('dienthoai');
            $table->string('nganhnghe');
            $table->string('kinhnghiem');
            $table->string('thoigian');
            $table->string('mucluong');
            $table->string('mota')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
=======
        Schema::create('tintimviec', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ten');
            $table->string('gioitinh');
            $table->string('ngaysinh');
            $table->string('lienhe')->nullable();
            $table->string('anh')->nullable();
            $table->text('mota');
>>>>>>> origin:database/migrations/2021_10_27_143147_tintimviec.php
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
        Schema::table('tintimviec', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
    }
