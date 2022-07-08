<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeacherSeeder extends Seeder
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
            DB::table('teachers')->insert([
                [
                'tnumber' => '0000000',
                'tea_name' => 'Comp 大和',
                'password' => 'Comp34',
                'created_at' => date('Y-m-d H:i:s')
                ],
                [
                'tnumber' => '0000001',
                'tea_name' => 'Job 撫子',
                'password' => 'Work98',
                'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
       });
    }
}
