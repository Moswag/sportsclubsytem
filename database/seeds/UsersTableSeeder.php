<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Webster',
                'surname' => 'Moswa',
                'branch' => 'Rotten Row',
                'employeeid' => 'V123456',
                'email' => 'admin1@gmail.com',
                'phonenumber' => '263771407147',
                'address' => '1234 Warren Park',
                'gender' => 'Mail',
                'password' => bcrypt('admin123'),
                'remember_token' => null,

            ]
        );
    }
}
