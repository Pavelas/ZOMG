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
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 2,
                'title' => 'PLAYERUNKNOWN\'S BATTLEGROUNDS',
                'abbreviation' => 'PUBG',
                'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/578080/93d896e7d7a42ae35c1d77239430e1d90bc82cae.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/PLAYERUNKNOWN%27S%20BATTLEGROUNDS-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 3,
                'title' => 'Rocket League',
                'abbreviation' => 'RL',
                'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/252950/9ad6dd3d173523354385955b5fb2af87639c4163.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Rocket%20League-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 4,
                'title' => 'Fortnite',
                'abbreviation' => 'FN',
                'icon' => 'http://www.advanceduninstaller.com/72082e15d40dbf3f5f3f31f7ff2b4c7e-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Fortnite-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 5,
                'title' => 'Overwatch',
                'abbreviation' => 'OW',
                'icon' => 'http://www.advanceduninstaller.com/8b91f98c4a814ea074e15a0eede43b72-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Overwatch-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 6,
                'title' => 'World of Warcraft',
                'abbreviation' => 'WOW',
                'icon' => 'https://swdb.ru/icons/wow_icon.png',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/World%20of%20Warcraft-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 7,
                'title' => 'God War',
                'abbreviation' => 'GW',
                'icon' => 'https://static.getjar.com/icon-50x50/94/769018_thm.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/God%20of%20War-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 8,
                'title' => 'League of Legends',
                'abbreviation' => 'LOL',
                'icon' => 'http://www.download82.com/images/produse/iconuri/league-of-legends.gif',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/League%20of%20Legends-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 9,
                'title' => 'Hearthstone',
                'abbreviation' => 'HRTH',
                'icon' => 'http://www.advanceduninstaller.com/66d5a926ef69d7ac364168b2a0a95950-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Hearthstone-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 10,
                'title' => 'Darkest Dungeon',
                'abbreviation' => 'DarkDun',
                'icon' => 'http://www.advanceduninstaller.com/2e0368877d1cfab61a04a84c5e0654b4-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Darkest%20Dungeon-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 11,
                'title' => 'Sea of Thieves',
                'abbreviation' => 'SOF',
                'icon' => 'https://vignette.wikia.nocookie.net/torment/images/3/39/Cloudkill_spell.gif/revision/latest?cb=20150624192551',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Sea%20of%20Thieves-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 12,
                'title' => 'Call of Duty: WWII',
                'abbreviation' => 'COD: WWII',
                'icon' => 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/476600/76e0d41512317eb42ff2025a1fc0d307d77c4e5f.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Call%20of%20Duty:%20WWII-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 1
            ],
            [
                'id' => 13,
                'title' => 'Super Smash Bros. Melee',
                'abbreviation' => 'SSB. Melee',
                'icon' => 'http://www.advanceduninstaller.com/d90a60ff85ec0adb340974032f3d22a6-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Super%20Smash%20Bros.%20Melee-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 14,
                'title' => 'Grand Theft Auto V',
                'abbreviation' => 'GTA V',
                'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/271590/1e72f87eb927fa1485e68aefaff23c7fd7178251.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Grand%20Theft%20Auto%20V-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 15,
                'title' => 'ROBLOX',
                'abbreviation' => 'RBL',
                'icon' => 'http://www.shouldiremoveit.com/resources/icons/7EB11A2FE2BAC13C945D967684C26FDF.png',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/ROBLOX-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 16,
                'title' => 'Tom Clancy\'s Rainbow Six: Siege',
                'abbreviation' => 'TCR6: Siege',
                'icon' => 'https://steamcdn-a.opskins.media/steamcommunity/public/images/apps/359550/b75ebf437f767a4444d324e1bbbff2a1a74a13ff.jpg',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Tom%20Clancy%27s%20Rainbow%20Six:%20Siege-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 17,
                'title' => 'Minecraft',
                'abbreviation' => 'MC',
                'icon' => 'https://static.filehorse.com/icons-web/online-games/minecraft-icon-32.png',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Minecraft-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 18,
                'title' => 'Heroes of the Storm',
                'abbreviation' => 'HOTS',
                'icon' => 'http://www.advanceduninstaller.com/5b3d2e52c38b107fdb714f16970b8f34-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Heroes%20of%20the%20Storm-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 19,
                'title' => 'Black Desert Online',
                'abbreviation' => 'DBO',
                'icon' => 'http://www.advanceduninstaller.com/c0e16d8c14f6232f0249fe4eb03b835b-icon.ico',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/Black%20Desert%20Online-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
            [
                'id' => 20,
                'title' => 'FIFA 2018',
                'abbreviation' => 'FIFA 18',
                'icon' => 'http://www.download82.com/images/produse/iconuri/fifa-manager.gif',
                'image' => 'https://static-cdn.jtvnw.net/ttv-boxart/FIFA%2018-285x380.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'is_popular' => 0
            ],
 
        ];
 
        Game::insert($game);
    }
}
