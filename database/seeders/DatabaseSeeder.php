<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'doctor']);
        Role::create(['name'=>'patient']);
        // \App\Models\User::factory(10)->create();
    }
}
