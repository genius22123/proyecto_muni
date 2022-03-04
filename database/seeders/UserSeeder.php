<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Marlon calla',
            'email'=>'marlon@gmail.com',
            'password'=>bcrypt('71548243')
        ])->assignRole('Admin');

        User::factory(10)->create();
    }
}
