<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StumessageSeeder extends Seeder
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
            DB::table('stumessages')->insert([
                [
                'contents' => '自己解釈です。',
                'sub_no' => '1',
                'snumber' => '0000000',
                'created_at' => date('Y-m-d H:i:s')
                ],
                [
                'contents' => 'こういうことですか？',
                'sub_no' => '2',
                'snumber' => '0000001',
                'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
       });

    }
}
