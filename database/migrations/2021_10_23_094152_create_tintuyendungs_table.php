<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTuyendungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuyendungs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tieude');
            $table->string('tenquan');
            $table->text('diachi');
            $table->string('soluong');
            $table->string('nganhnghe');
            $table->string('luong');
            $table->string('thoigian');
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
        Schema::table('tintuyendung', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
