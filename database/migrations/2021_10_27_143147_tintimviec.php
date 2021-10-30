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
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ten');
            $table->string('gioitinh');
            $table->string('ngaysinh');
            $table->string('lienhe')->nullable();
            $table->string('anh')->nullable();
            $table->text('mota');
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
