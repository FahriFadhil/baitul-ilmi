<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_berita');
            $table->string('tanggal_berita');
            $table->text('berita');
            $table->string('photo');
            $table->string('sumber');
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
        Schema::dropIfExists('academic');
    }
}
