<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::transaction(function(){
            DB::table('subjects')->insert([
                [
                    'subject'=> 'IT開発',
                ],
                [
                    'subject'=> 'Cisco',
                ],
                [
                    'subject'=> 'コンセプトワーク',
                ],
                [
                    'subject'=> 'UNIX演習',
                ],
                [
                    'subject'=> 'Web演習',
                ],
                [
                    'subject'=> '外国語',
                ],
                [
                    'subject'=> 'データベース',
                ],
                [
                    'subject'=> 'サーバーサイト',
                ],
                [
                    'subject'=> 'システム設計',
                ]

            ]);
        });

    }
}
