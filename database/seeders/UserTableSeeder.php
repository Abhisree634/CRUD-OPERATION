<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Abhi',
            'email'=>'abhsi@gmail.com',
            'date_of_birth'=>'1999-03-12',
                

        ]);
        User::create([
            'name'=>'sree',
            'email'=>'sree@gmail.com',
            'date_of_birth'=>'1999-10-25',
                

        ]);

    }
}
