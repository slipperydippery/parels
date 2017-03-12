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
        DB::table('users')->delete();

        $users = [
            [
                'id' => '1',
                'name' => 'Maarten de Jager', 
                'email' => 'maartendejager@gmail.com',
                'password' => 'password1',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
