<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
                'name' => 'Durbin Labs',
                'email' => 'admin@durbinlabs.com',
                'password' => Hash::make('12345'),
                'role_id' => 1
            ],
            [
                'name' => 'Shafi',
                'email' => 'shafi@durbinlabs.com ',
                'password' => Hash::make('12345'),
                'role_id' => 2
            ],
            [
                'name' => 'Rabiul Islam',
                'email' => 'rir.cse.71@gmail.com',
                'password' => Hash::make('12345'),
                'role_id' => 3
            ]
        ];
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
