<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigguideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigguide', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gig_artis');
            $table->string('gig_lokasi');
            $table->string('gig_waktu');
            $table->string('gig_keterangan');
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
        Schema::dropIfExists('gigguide');
    }
}
