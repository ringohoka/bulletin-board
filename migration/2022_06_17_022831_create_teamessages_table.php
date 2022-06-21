<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamessages', function (Blueprint $table) {
            $table->id('TEACON_NO');
            $table->unsignedBigInteger('STUCON_NO');
            $table->foreign('STUCON_NO')->references('STUCON_NO')->on('stumessages')->onDelete('cascade');
            $table->text('CONTENTS',256);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teamessages');
    }
}
