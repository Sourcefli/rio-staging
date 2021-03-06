<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        DB::table('users')->insert([
           [
               'id' => 1,
               'name' => 'Jonathan Havens',
               'email' => 'jonathan.e.havens@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(40)
            ],
           [
               'id' => 2,
               'name' => 'Don Havens',
               'email' => 'donald.havens@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
               'id' => 3,
               'name' => 'Rich Schlemmer',
               'email' => 'rschlem2@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
               'id' => 4,
               'name' => 'Shawn Bantz',
               'email' => 'shawnbantz@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
               'id' => 5,
               'name' => 'Russ Atkins',
               'email' => 'russatkins25@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
               'id' => 6,
               'name' => 'Shawn Lange',
               'email' => 'shawnlange76@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
               'id' => 7,
               'name' => 'Rich Finkelstein',
               'email' => 'richfink@yahoo.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
               'api_token' => Str::random(60)
            ],
            [
                'id' => 8,
                'name' => 'Monica Crain',
                'email' => 'monicaw880@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 9,
                'name' => 'Richard Edwards',
                'email' => 'rck333@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 10,
                'name' => 'Stephen Elliott',
                'email' => 'leutts@aol.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 11,
                'name' => 'Ricky Rogalski',
                'email' => 'rroga21@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 12,
                'name' => 'Admin Account',
                'email' => 'admin@retirementinsuranceoptions.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 13,
                'name' => 'Tina Dubowy',
                'email' => 'tinadubowy@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
            [
                'id' => 14,
                'name' => 'Anita Warsche',
                'email' => 'ANITA991245@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //'password'
                'api_token' => Str::random(60)
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
