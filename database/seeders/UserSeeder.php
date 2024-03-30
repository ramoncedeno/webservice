<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Sample Dummy Users Array
        $users = [
            [
                'name'=>'Cesar Valencia',
                'email'=>'cvalencia@igs.com',
                'password'=> Hash::make('12345678')
            ],
            [
                'name'=>'Ivan Gonzalez',
                'email'=>'igonzalez@igs.com',
                'password'=> Hash::make('12345678')
            ],
            [
                'name'=>'Carlos Gomez',
                'email'=>'cgomez@aigs.com',
                'password'=> Hash::make('12345678')
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($users as $user){
            User::create($user);
        }
    }
}
