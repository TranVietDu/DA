<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLienHeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lienhe', function (Blueprint $table) {
            $table->text('tamnhin')->nullable();
            $table->text('sumenh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lienhe', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
