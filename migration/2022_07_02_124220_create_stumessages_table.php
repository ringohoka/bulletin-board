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
        if (Schema::hasTable('stumessages')) {
            // テーブルが存在していればリターン
            return;
        }else{
            Schema::create('stumessages', function (Blueprint $table) {
                $table->id('stucon_no');
                $table->text('contents');
                $table->unsignedBigInteger('sub_no');
                $table->foreign('sub_no')->references('id')->on('subjects')->onDelete('cascade');
                $table->integer('understand')->length(3)->nullable();
                $table->char('snumber',7);
                $table->foreign('snumber')->references('snumber')->on('students')->onDelete('cascade');
                $table->timestamps();
                $table->softDeletes();
            });
        }
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
