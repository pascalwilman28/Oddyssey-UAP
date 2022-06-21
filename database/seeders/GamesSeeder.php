<?php

namespace Database\Seeders;

use App\Models\Games;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $game = new Games();
        $game->title = "Apex Legends";
        $game->categoryId = 2;
        $game->price = 0;
        $game->game_image = 'game/Apex Legends/';
        $game->description = "Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.";
        $game->save();

        // 2
        $game = new Games();
        $game->title = "Citizen Sleeper";
        $game->categoryId = 2;
        $game->price = 109000;
        $game->game_image = 'game/Citizen Sleeper/';
        $game->description = "Roleplaying in the ruins of interplanetary capitalism. Live the life of an escaped worker, washed-up on a lawless station at the edge of an interstellar society. Inspired by the flexibility and freedom of TTRPGs, explore the station, choose your friends, escape your past and change your future.";
        $game->save();

        // 3
        $game = new Games();
        $game->title = "Counter-Strike Global Offensive";
        $game->categoryId = 2;
        $game->price = 36000;
        $game->game_image = 'game/Counter-Strike Global Offensive/';
        $game->description = "Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).";
        $game->save();

        // 4
        $game = new Games();
        $game->title = "Dinosaur Fossil Hunter";
        $game->categoryId = 5;
        $game->price = 98000;
        $game->game_image = 'game/Dinosaur Fossil Hunter/';
        $game->description = "Become a real paleontologist, explore various environments and search for dinosaur fossils. Dig for and study the remnants of these majestic creatures to learn about their evolution. Build your own museum and experience an immersive background story.";
        $game->save();

        // 5
        $game = new Games();
        $game->title = "Dota 2";
        $game->categoryId = 5;
        $game->price = 0;
        $game->game_image = 'game/Dota 2/';
        $game->description = "Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it's their 10th hour of play or 1,000th, there's always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.";
        $game->save();

        // 6
        $game = new Games();
        $game->title = "Dread Hunger";
        $game->categoryId = 6;
        $game->price = 170000;
        $game->game_image = 'game/Dread Hunger/';
        $game->description = "A game of survival and betrayal. Eight Explorers path their ship through the unforgiving Arctic. Among the crew, two traitors call on dark powers to undermine them.";
        $game->save();

        // 7
        $game = new Games();
        $game->title = "Elden Ring";
        $game->categoryId = 4;
        $game->price = 599000;
        $game->game_image = 'game/Elden Ring/';
        $game->description = "THE NEW FANTASY ACTION RPG. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.";
        $game->save();

        // 8
        $game = new Games();
        $game->title = "Grand Theft Auto V";
        $game->categoryId = 5;
        $game->price = 179000;
        $game->game_image = 'game/Grand Theft Auto V/';
        $game->description = "Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.";
        $game->save();

        // 9
        $game = new Games();
        $game->title = "Lost Ark";
        $game->categoryId = 4;
        $game->price = 0;
        $game->game_image = 'game/Lost Ark/';
        $game->description = "Embark on an odyssey for the Lost Ark in a vast, vibrant world: explore new lands, seek out lost treasures, and test yourself in thrilling action combat in this action-packed free-to-play RPG.";
        $game->save();

        // 10
        $game = new Games();
        $game->title = "MIR4";
        $game->categoryId = 4;
        $game->price = 0;
        $game->game_image = 'game/MIR4/';
        $game->description = "MIR4 is a free-to-play open world K-fantasy MMORPG that can be cross-played on both PC and mobile devices. MIR4 is full of action and features numerous large scale clan PVP battles. Join now and become a legend.";
        $game->save();

        // 11
        $game = new Games();
        $game->title = "Nightmare of Decay";
        $game->categoryId = 7;
        $game->price = 40000;
        $game->game_image = 'game/Nightmare of Decay/';
        $game->description = "A first-person action horror game set in a nightmarish manor infested with zombies, psychotic cultists, and a horde of other horrors. Utilize an assortment of different weapons in a brutal fight for survival as you try to escape from the Nightmare of Decay.";
        $game->save();

        // 12
        $game = new Games();
        $game->title = "Northgard";
        $game->categoryId = 4;
        $game->price = 35000;
        $game->game_image = 'game/Northgard/';
        $game->description = "Northgard is a strategy game based on Norse mythology in which you control a clan of Vikings vying for the control of a mysterious newfound continent.";
        $game->save();

        // 13
        $game = new Games();
        $game->title = "PUBG Battlegrounds";
        $game->categoryId = 6;
        $game->price = 110000;
        $game->game_image = 'game/PUBG Battlegrounds/';
        $game->description = "Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.";
        $game->save();

        // 14
        $game = new Games();
        $game->title = "Retrowave";
        $game->categoryId = 3;
        $game->price = 13000;
        $game->game_image = 'game/Retrowave/';
        $game->description = "Neon lights, palm trees, synthwave, '80s supercars speeding down an endless highway... Welcome to the world of Retrowave!";
        $game->save();

        // 15
        $game = new Games();
        $game->title = "Rust";
        $game->categoryId = 6;
        $game->price = 170000;
        $game->game_image = 'game/Rust/';
        $game->description = "The only aim in Rust is to survive. Everything wants you to die - the islands wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.";
        $game->save();

        // // 16
        // $game = new Games();
        // $game->title = "Shadow Warrior 2";
        // $game->categoryId = 1;
        // $game->price = 30000;
        // $game->game_image = 'game/Shadow Warrior 2/';
        // $game->description = "Shadow Warrior 2 is the stunning evolution of Flying Wild Hog’s offbeat first-person shooter starring the brash warrior Lo Wang, who must again wield a devastating combination of guns, blades, magic and wit to strike down the demonic legions overwhelming the world.";
        // $game->save();

        // // 17
        // $game = new Games();
        // $game->title = "Team Fortress 2";
        // $game->categoryId = 2;
        // $game->price = 0;
        // $game->game_image = 'game/Team Fortress 2/';
        // $game->description = "Nine distinct classes provide a broad range of tactical abilities and personalities. Constantly updated with new Games modes, maps, equipment and, most importantly, hats!";
        // $game->save();

        // // 18
        // $game = new Games();
        // $game->title = "Warframe";
        // $game->categoryId = 4;
        // $game->price = 0;
        // $game->game_image = 'game/Warframe/';
        // $game->description = "Awaken as an unstoppable warrior and battle alongside your friends in this story-driven free-to-play online action game.";
        // $game->save();

        // // 19
        // $game = new Games();
        // $game->title = "Wingspan";
        // $game->categoryId = 8;
        // $game->price = 109000;
        // $game->game_image = 'game/Wingspan/';
        // $game->description = "Wingspan is a relaxing, award-winning strategy card game about birds for 1 to 5 players. Each bird you play extends a chain of powerful combinations in one of your three habitats. Your goal is to discover and attract the best birds to your network of wildlife preserves.";
        // $game->save();

        // // 20
        // $game = new Games();
        // $game->title = "Yu-Gi-Oh! Master Duel";
        // $game->categoryId = 8;
        // $game->price = 0;
        // $game->game_image = 'game/Yu-Gi-Oh! Master Duel/';
        // $game->description = "The definitive digital edition of the competitive card game that has been evolving for over 20 years! Duel at the highest level against Duelists all over the world.";
        // $game->save();
    }
}
