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
            $table->string('ngaysinh');
            $table->string('gioitinh');
            $table->string('sdt');
            $table->string('email');
            $table->string('nganhnghe');
            $table->string('diachi');
            $table->string('mota');
            $table->string('anh')->nullable();
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
