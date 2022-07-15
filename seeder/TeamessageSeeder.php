<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::transaction(function (){
            DB::table('teamessages')->insert([
                [
                'contents' => '違います。',
                'stumessage_id' => '1',
                'created_at' => date('Y-m-d H:i:s')
                ],
                [
                'contents' => 'はい、そうです。',
                'stumessage_id' => '2',
                'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
       });

    }
}
