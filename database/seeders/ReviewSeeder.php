<?php

namespace Database\Seeders;

use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 Apex Legends (Featured) -> 4
        $review = new Review();
        $review->gameId = 1;
        $review->userId = 1;
        $review->review = 1;
        $review->descReview = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod et vitae, facere maiores necessitatibus quasi magni facilis corporis. Deserunt autem nisi totam deleniti, repellendus iure eveniet corrupti error. Ut, repellendus.";
        $review->save();

        // 2
        $review = new Review();
        $review->gameId = 1;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Menarik untuk dimainkan bersama-sama";
        $review->save();

        // 3
        $review = new Review();
        $review->gameId = 1;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Seru bangett!!";
        $review->save();

        // 4
        $review = new Review();
        $review->gameId = 1;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "2 Kali main ini ketagihan!!";
        $review->save();

        // 5 Citizen Sleeper
        $review = new Review();
        $review->gameId = 2;
        $review->userId = 1;
        $review->review = 0;
        $review->descReview = "Kurang menarik";
        $review->save();

        // 6
        $review = new Review();
        $review->gameId = 2;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod et vitae, facere maiores necessitatibus quasi magni facilis corporis. Deserunt autem nisi totam deleniti, repellendus iure eveniet corrupti error. Ut, repellendus.";
        $review->save();

        // 7
        $review = new Review();
        $review->gameId = 2;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Behh asik main bareng temen-temen!!";
        $review->save();
        
        // 8 Counter-Strike Global Offensive (Featured) -> 6
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 1;
        $review->review = 1;
        $review->descReview = "Kerenn parahh!";
        $review->save();

        // 9
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod et vitae, facere maiores necessitatibus quasi magni facilis corporis. Deserunt autem nisi totam deleniti, repellendus iure eveniet corrupti error. Ut, repellendus.";
        $review->save();

        // 10
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Tembak-tembakan game yang kece!!";
        $review->save();

        // 11
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "Murah dan seru gamenya";
        $review->save();

        // 12
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Seru!!";
        $review->save();

        // 13
        $review = new Review();
        $review->gameId = 3;
        $review->userId = 6;
        $review->review = 1;
        $review->descReview = "Enak banget mainnya!!";
        $review->save();

        // 14 Dinosaur Fossil Hunter
        $review = new Review();
        $review->gameId = 4;
        $review->userId = 1;
        $review->review = 0;
        $review->descReview = "Biasa saja";
        $review->save();

        // 15
        $review = new Review();
        $review->gameId = 4;
        $review->userId = 2;
        $review->review = 0;
        $review->descReview = "Mahal tapi tidak worth it!";
        $review->save();

        // 16
        $review = new Review();
        $review->gameId = 4;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Seru karena menantang!";
        $review->save();

        // 17 Dota 2 (Featured) -> 5
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 1;
        $review->review = 0;
        $review->descReview = "Ribet mainnya!";
        $review->save();

        // 18
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "ASEKKK!";
        $review->save();

        // 19
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Mantapp!";
        $review->save();

        // 20
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "Keceee!";
        $review->save();

        // 21
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Terbaikk game!";
        $review->save();

        // 22
        $review = new Review();
        $review->gameId = 5;
        $review->userId = 6;
        $review->review = 1;
        $review->descReview = "Ga ada duanya!";
        $review->save();

        // 23 Dread Hunger
        $review = new Review();
        $review->gameId = 6;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Asek juga gamenya!";
        $review->save();
        
        // 24
        $review = new Review();
        $review->gameId = 6;
        $review->userId = 6;
        $review->review = 0;
        $review->descReview = "Agak kurang ya";
        $review->save();

        // 25 Elden Ring (Featured) -> 5
        $review = new Review();
        $review->gameId = 7;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Grafiknya bagus";
        $review->save();

        // 26
        $review = new Review();
        $review->gameId = 7;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Gamenya seru abis";
        $review->save();

        // 27
        $review = new Review();
        $review->gameId = 7;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "Worth it, bagus";
        $review->save();
        
        // 28
        $review = new Review();
        $review->gameId = 7;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "ACTION RPG terbagus";
        $review->save();

        // 29
        $review = new Review();
        $review->gameId = 7;
        $review->userId = 6;
        $review->review = 1;
        $review->descReview = "Never mind, out of the box";
        $review->save();

        // 30 Grand Theft Auto V (Featured) -> 6
        $review = new Review();
        $review->gameId = 8;
        $review->userId = 1;
        $review->review = 1;
        $review->descReview = "Kocak gamesnya";
        $review->save();

        // 31
        $review = new Review();
        $review->gameId = 8;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Mantaps gamesnya";
        $review->save();

        // 32
        $review = new Review();
        $review->gameId = 8;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Kece gamesnya";
        $review->save();

        // 33
        $review = new Review();
        $review->gameId = 8;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "Daebak gamesnya";
        $review->save();

        // 34
        $review = new Review();
        $review->gameId = 8;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Mantull gamesnya";
        $review->save();

        // 35 Lost Ark
        $review = new Review();
        $review->gameId = 9;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Keren";
        $review->save();

        // 36
        $review = new Review();
        $review->gameId = 9;
        $review->userId = 4;
        $review->review = 0;
        $review->descReview = "Kureng yess";
        $review->save();

        // 37 MIR4 (Featured) -> 5
        $review = new Review();
        $review->gameId = 10;
        $review->userId = 2;
        $review->review = 1;
        $review->descReview = "Seru banget ini!";
        $review->save();

        // 38
        $review = new Review();
        $review->gameId = 10;
        $review->userId = 3;
        $review->review = 1;
        $review->descReview = "Game Actin RPG mirip Dynasty Warrior!";
        $review->save();

        // 39
        $review = new Review();
        $review->gameId = 10;
        $review->userId = 4;
        $review->review = 1;
        $review->descReview = "Wahh kerenn";
        $review->save();

        // 40
        $review = new Review();
        $review->gameId = 10;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Asekk banget";
        $review->save();

        // 41
        $review = new Review();
        $review->gameId = 10;
        $review->userId = 6;
        $review->review = 1;
        $review->descReview = "Luar Biasa gamenya";
        $review->save();

        // 42 Nightmare of Decay
        $review = new Review();
        $review->gameId = 11;
        $review->userId = 1;
        $review->review = 1;
        $review->descReview = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum obcaecati accusantium itaque debitis beatae natus, dolorum pariatur soluta fugit labore, facilis ratione, iure temporibus enim cupiditate sunt quibusdam reiciendis! Impedit.";
        $review->save();

        // 43
        $review = new Review();
        $review->gameId = 11;
        $review->userId = 5;
        $review->review = 0;
        $review->descReview = "Bikin Kaget";
        $review->save();

        // 44
        $review = new Review();
        $review->gameId = 11;
        $review->userId = 3;
        $review->review = 0;
        $review->descReview = "Bikin Jantungan";
        $review->save();

        // 45 Northgard
        $review = new Review();
        $review->gameId = 12;
        $review->userId = 5;
        $review->review = 1;
        $review->descReview = "Kerennlahhh";
        $review->save();

        // 46 PUBG Battlegrounds
        $review = new Review();
        $review->gameId = 13;
        $review->userId = 6;
        $review->review = 1;
        $review->descReview = "Grafiknya HD banget!";
        $review->save();

        //  47
        $review = new Review();
        $review->gameId = 13;
        $review->userId = 2;
        $review->review = 0;
        $review->descReview = "Kapasitas gamenya besar banget!";
        $review->save();

        //  48 Retrowave
        $review = new Review();
        $review->gameId = 14;
        $review->userId = 1;
        $review->review = 1;
        $review->descReview = "Seru balapannnya banyak fiturnya!";
        $review->save();

        // 49
        $review = new Review();
        $review->gameId = 14;
        $review->userId = 6;
        $review->review = 0;
        $review->descReview = "Grafiknya masih belum terlalu bagus!";
        $review->save();

        // 50 Rust
        $review = new Review();
        $review->gameId = 15;
        $review->userId = 3;
        $review->review = 0;
        $review->descReview = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente eveniet eius quasi laboriosam itaque, quae nobis velit cumque tenetur aspernatur iusto voluptatibus dolorum deserunt, aperiam reprehenderit officiis expedita, quibusdam unde!";
        $review->save();
    }
}
