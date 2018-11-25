<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Contest-owner',
                'description' => 'Contest owners can see only teams with player-list of his contest',
                'tasks' => '|view team|view player|'
            ],
            [
                'id' => 2,
                'title' => 'Team owners',
                'description' => 'Team owners can see all players',
                'tasks' => '|view all player|'
            ],
            [
                'id' => 3,
                'title' => 'Player',
                'description' => 'player can see the teams and contests he is in',
                'tasks' => '|view team|view contest|'
            ]
        ];

        foreach ($data as $key => $value) {
            Role::create($value);
        }
    }
}
