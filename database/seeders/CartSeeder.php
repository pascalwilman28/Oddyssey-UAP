<?php

namespace Database\Seeders;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 Apex Legends (Featured) -> 4
        $review = new Cart();
        $review->gameId = 1;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 2
        $review = new Cart();
        $review->gameId = 1;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 3
        $review = new Cart();
        $review->gameId = 1;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 4
        $review = new Cart();
        $review->gameId = 1;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 5 Citizen Sleeper
        $review = new Cart();
        $review->gameId = 2;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 6
        $review = new Cart();
        $review->gameId = 2;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 7
        $review = new Cart();
        $review->gameId = 2;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 8 Counter-Strike Global Offensive (Featured) -> 6
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 9
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 10
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 11
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 12
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 13
        $review = new Cart();
        $review->gameId = 3;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 14 Dinosaur Fossil Hunter
        $review = new Cart();
        $review->gameId = 4;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 15
        $review = new Cart();
        $review->gameId = 4;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 16
        $review = new Cart();
        $review->gameId = 4;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 17 Dota 2 (Featured) -> 5
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 18
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 19
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 20
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 21
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 22
        $review = new Cart();
        $review->gameId = 5;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 23 Dread Hunger
        $review = new Cart();
        $review->gameId = 6;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 24
        $review = new Cart();
        $review->gameId = 6;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 25 Elden Ring (Featured) -> 5
        $review = new Cart();
        $review->gameId = 7;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 26
        $review = new Cart();
        $review->gameId = 7;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();
        
        // 27
        $review = new Cart();
        $review->gameId = 7;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 28
        $review = new Cart();
        $review->gameId = 7;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 29
        $review = new Cart();
        $review->gameId = 7;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 30 Grand Theft Auto V (Featured) -> 6
        $review = new Cart();
        $review->gameId = 8;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 31
        $review = new Cart();
        $review->gameId = 8;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 32
        $review = new Cart();
        $review->gameId = 8;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 33
        $review = new Cart();
        $review->gameId = 8;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 34
        $review = new Cart();
        $review->gameId = 8;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 35 Lost Ark
        $review = new Cart();
        $review->gameId = 9;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 36
        $review = new Cart();
        $review->gameId = 9;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 37 MIR4 (Featured) -> 5
        $review = new Cart();
        $review->gameId = 10;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();
        
        // 38
        $review = new Cart();
        $review->gameId = 10;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 39
        $review = new Cart();
        $review->gameId = 10;
        $review->userId = 4;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 40
        $review = new Cart();
        $review->gameId = 10;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 41
        $review = new Cart();
        $review->gameId = 10;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 42 Nightmare of Decay
        $review = new Cart();
        $review->gameId = 11;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 43
        $review = new Cart();
        $review->gameId = 11;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 44
        $review = new Cart();
        $review->gameId = 11;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 45 Northgard
        $review = new Cart();
        $review->gameId = 12;
        $review->userId = 5;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 46 PUBG Battlegrounds
        $review = new Cart();
        $review->gameId = 13;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        //  47
        $review = new Cart();
        $review->gameId = 13;
        $review->userId = 2;
        $review->purchased_at = Carbon::now();
        $review->save();

        //  48 Retrowave
        $review = new Cart();
        $review->gameId = 14;
        $review->userId = 1;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 49
        $review = new Cart();
        $review->gameId = 14;
        $review->userId = 6;
        $review->purchased_at = Carbon::now();
        $review->save();

        // 50 Rust
        $review = new Cart();
        $review->gameId = 15;
        $review->userId = 3;
        $review->purchased_at = Carbon::now();
        $review->save();

        //51 Cart Testing
        $review = new Cart();
        $review->gameId = 15;
        $review->userId = 1;
        $review->save();

        $review = new Cart();
        $review->gameId = 12;
        $review->userId = 1;
        $review->save();
    }
}
