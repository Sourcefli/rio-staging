<?php

use Illuminate\Database\Seeder;

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
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
           [
               'id' => 2,
               'name' => 'Don Havens',
               'email' => 'donald.havens@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
               'id' => 3,
               'name' => 'Rich Schlemmer',
               'email' => 'rschlem2@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
               'id' => 4,
               'name' => 'Shawn Bantz',
               'email' => 'shawnbantz@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
               'id' => 5,
               'name' => 'Russ Atkins',
               'email' => 'russatkins25@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
               'id' => 6,
               'name' => 'Shawn Lange',
               'email' => 'shawnlange76@gmail.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
               'id' => 7,
               'name' => 'Rich Finkelstein',
               'email' => 'richfink@yahoo.com',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
           ],
            [
                'id' => 8,
                'name' => 'Monica Crain',
                'email' => 'monicaw880@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
            ],
            [
                'id' => 9,
                'name' => 'Richard Edwards',
                'email' => 'rck333@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
            ],
            [
                'id' => 10,
                'name' => 'Stephen Elliott',
                'email' => 'leutts@aol.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
            ],
            [
                'id' => 11,
                'name' => 'Ricky Rogalski',
                'email' => 'rroga21@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
            ],
            [
                'id' => 12,
                'name' => 'Admin Account',
                'email' => 'admin@retirementinsuranceoptions.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //'password'
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
