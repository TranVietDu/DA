<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_10_28_151803_create_blogs_table.php
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
=======
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
>>>>>>> origin:database/migrations/2021_10_28_151803_blog.php
            $table->string('tennguoiviet');
            $table->string('tieude');
            $table->string('noidung');
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
        Schema::table('blog', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
