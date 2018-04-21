<?php

use App\Game;
use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = [
	        [
	        	'id' => 1,
	        	'title' => 'Counter-Strike: Global Offensive',
	        	'abbreviation' => 'CS:GO',
	        	'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/730/69f7ebe2735c366c65c0b33dae00e12dc40edbe4.jpg',
	        	'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Counter-Strike:%20Global%20Offensive-285x380.jpg',
	        	'created_at' => \Carbon\Carbon::now(),
	        	'updated_at' => \Carbon\Carbon::now()
	        ],
	        [
	        	'id' => 2,
	        	'title' => 'PLAYERUNKNOWN\'S BATTLEGROUNDS',
	        	'abbreviation' => 'PUBG',
	        	'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/578080/93d896e7d7a42ae35c1d77239430e1d90bc82cae.jpg',
	        	'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/PLAYERUNKNOWN%27S%20BATTLEGROUNDS-285x380.jpg',
	        	'created_at' => \Carbon\Carbon::now(),
	        	'updated_at' => \Carbon\Carbon::now()
	        ],
	        [
	        	'id' => 3,
	        	'title' => 'Rocket League',
	        	'abbreviation' => 'RL',
	        	'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/252950/9ad6dd3d173523354385955b5fb2af87639c4163.jpg',
	        	'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Rocket%20League-285x380.jpg',
	        	'created_at' => \Carbon\Carbon::now(),
	        	'updated_at' => \Carbon\Carbon::now()
	        ],
	        [
	        	'id' => 4,
	        	'title' => 'Fortnite',
	        	'abbreviation' => 'FN',
	        	'icon' => 'http://www.advanceduninstaller.com/72082e15d40dbf3f5f3f31f7ff2b4c7e-icon.ico',
	        	'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Fortnite-285x380.jpg',
	        	'created_at' => \Carbon\Carbon::now(),
	        	'updated_at' => \Carbon\Carbon::now()
	        ],
	        [
	        	'id' => 5,
	        	'title' => 'Overwatch',
	        	'abbreviation' => 'OW',
	        	'icon' => 'https://cdn.iconverticons.com/files/png/165801040c96cb8c_256x256.png',
	        	'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Overwatch-285x380.jpg',
	        	'created_at' => \Carbon\Carbon::now(),
	        	'updated_at' => \Carbon\Carbon::now()
	        ]
	    ];

        Game::insert($game);
    }
}
