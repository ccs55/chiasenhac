<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baihat', function (Blueprint $table) {
            //
            $table->string('TenBh');
            $table->string('TacGia');
            $table->string('CaSy');
            $table->text('LoiBh');            
            $table->date('NgayPh');
            $table->string('ChuDe');
            $table->text('Link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baihat', function (Blueprint $table) {
            //
        });
    }
}
