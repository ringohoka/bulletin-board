<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([SubjectSeeder::class]);
        // $this->call([StudentSeeder::class]);
        // $this->call([StumessageSeeder::class]);
        // $this->call([TeacherSeeder::class]);
        $this->call([TeamessageSeeder::class]);

    }
}
