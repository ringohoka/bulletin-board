<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
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
            DB::table('students')->insert([
                [
                'snumber' => '0000000',
                'stu_name' => 'ECC 太郎',
                'password' => 'ECCcomp11',
                'created_at' => date('Y-m-d H:i:s')
                ],
                [
                'snumber' => '0000001',
                'stu_name' => 'SCH 花子',
                'password' => 'School13',
                'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
       });

    }
}
