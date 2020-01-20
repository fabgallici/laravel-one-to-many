<?php

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
        // $this->call(UsersTableSeeder::class);  //lista classi che vengono chiamate in base a questo ordine
        $this->call([
                    EmployeeSeeder::class,
                    TaskSeeder::class
                ]);

    }
}
