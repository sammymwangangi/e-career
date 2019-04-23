<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sammy',
                'lname' => 'Sammy Mwangangi',
                'phone' => '717503802',
                'age' => '100',
                'gender' => 'Male',
                'city' => 'Nairobi',
                'education_level' => 'Post-Graduate',
                'email' => 'sammymwinzi2@gmail.com',
                'password' => '$2y$10$jQJ0xWCXnJpvxneENCHx7.XJ48jnMK28ePUatOsTyFij6jRiqaog2',
                'email_verified_at'  => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-04-22 06:38:20',
                'updated_at' => '2019-04-22 06:38:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'James',
                'lname' => 'Kim',
                'phone' => '717503000',
                'age' => '19',
                'gender' => 'Male',
                'city' => 'Nairobi',
                'education_level' => 'Secondary School Leaver',
                'email' => 'jameskim@gmail.com',
                'password' => '$2y$10$jQJ0xWCXnJpvxneENCHx7.XJ48jnMK28ePUatOsTyFij6jRiqaog2',
                'email_verified_at'  => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-04-22 06:39:30',
                'updated_at' => '2019-04-22 06:39:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jane',
                'lname' => 'Doe',
                'phone' => '723456478',
                'age' => '20',
                'gender' => 'Female',
                'city' => 'Nakuru',
                'education_level' => 'Under-Graduate',
                'email' => 'janedoe@gmail.com',
                'password' => '$2y$10$jQJ0xWCXnJpvxneENCHx7.XJ48jnMK28ePUatOsTyFij6jRiqaog2',
                'email_verified_at'  => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-04-22 07:38:23',
                'updated_at' => '2019-04-22 07:38:23',
            ),
        ));
    }
}
