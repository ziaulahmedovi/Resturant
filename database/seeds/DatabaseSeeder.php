<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //factory(App\Employee::class,50)->create();
       factory(App\CustomerMail::class,250)->create();

    }
}
