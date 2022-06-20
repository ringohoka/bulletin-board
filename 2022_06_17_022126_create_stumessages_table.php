<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStumessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stumessages', function (Blueprint $table) {
            $table->id();
            $table->integer('STUCON_NO');
            $table->text('CONTENTS',256);
            $table->integer('SUB_NO');
            $table->integer('UNDERSTAND');
            $table->integer('SNUMBER') -> length(7);
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
        Schema::dropIfExists('stumessages');
    }
}
