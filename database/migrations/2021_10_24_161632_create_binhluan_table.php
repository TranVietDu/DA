<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2021_10_24_161632_create_binhluan_table.php
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
=======
            $table->id();
            $table->integer('user_id');
            $table->string('ten');
            $table->string('email');
>>>>>>> origin:database/migrations/2021_10_24_161632_binhluan.php
            $table->string('noidung');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
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
        Schema::table('binhluan', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
