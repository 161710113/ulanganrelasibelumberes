<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('siswas', function($table) {
            $table->unsignedInteger('guru_id')->after('nis')->nullable();
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('CASCADE');
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
            $table->dropColumn('guru_id');
        });

    }
}
