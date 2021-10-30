<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tintimviec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintimviec', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
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
