<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'name' => 'Bestshine Hospital',
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'M.B.B.S,M.D',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '774345234',
                'user_type' => 'admin'
            ],

            [
                'email' => 'doctor@gmail.com',
                'name' => "Yashini",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'M.B.B.S, MD',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '767035067',
                'user_type' => 'doctor'
            ],

            [
                'email' => 'pharmacist@gmail.com',
                'name' => "kannan",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'D.FORM',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '714193432',
                'user_type' => 'pharmacist'
            ],

            [
                'email' => 'general1@gmail.com',
                'name' => "vasanth",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'MBA',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '713843043',
                'user_type' => 'general'
            ],

            [
                'email' => 'general2@gmail.com',
                'name' => "hasika dilshani",
                'password' => '$2y$10$T/AO49e7BmIC9aUG/33mAOdy9yDm/SUGUZC5zU.3Gtj4Lvvf.27My', //12345678
                'education' => 'MBA',
                'location' => 'sfavasdvasd',
                'skills' => 'asdasd',
                'notes' => '4a56sd4avas',
                'contactnumber' => '703169302',
                'user_type' => 'general'
            ]
        ]);
    }
}
