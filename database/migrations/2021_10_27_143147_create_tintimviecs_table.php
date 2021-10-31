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
