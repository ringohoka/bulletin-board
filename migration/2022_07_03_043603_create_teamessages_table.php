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
        if (Schema::hasTable('teamessages')) {
            // テーブルが存在していればリターン
            return;
        }else{
            Schema::create('teamessages', function (Blueprint $table) {
                $table->id();
                $table->foreignId('stumessage_id')->constrained('stumessages')->onDelete('cascade');
                $table->text('contents');
                $table->timestamps();
                $table->softDeletes();
                // $table->primary(['teacon_no','stucon_no']);
            });
            // Schema::table('teamessages', function (Blueprint $table) {
            //     $table->BigIncrements('teacon_no')->change();

            // });
        }
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
