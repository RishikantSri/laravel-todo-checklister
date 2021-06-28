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
        user::create(['name'=>'superadmin',
        'email'=>'superadmin@admin.com',
        'password'=> bcrypt('password'),
        'is_admin'=>1]);
    }
}
