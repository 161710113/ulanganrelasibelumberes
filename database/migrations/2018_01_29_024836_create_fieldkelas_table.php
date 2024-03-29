<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldkelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('siswas', function($table) {
            $table->unsignedInteger('kelas_id')->after('guru_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('siswas', function($table) {
            $table->dropColumn('kelas_id');
        });
    }
}
