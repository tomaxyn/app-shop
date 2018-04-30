<?php

use Illuminate\Database\Seeder;
use App\Rolluser;

class UserRollTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rolluser::class, 5)->create();
    }
}
