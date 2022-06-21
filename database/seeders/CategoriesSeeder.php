<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $category = new Categories();
        $category->categoryName = "Fighting";
        $category->save();

        // 2
        $category = new Categories();
        $category->categoryName = "Shooter";
        $category->save();

        // 3
        $category = new Categories();
        $category->categoryName = "Sport & Racing";
        $category->save();

        // 4
        $category = new Categories();
        $category->categoryName = "Action RPG";
        $category->save();	 

        // 5
        $category = new Categories();
        $category->categoryName = "Adventure";
        $category->save();	
        
        // 6
        $category = new Categories();
        $category->categoryName = "Survival";
        $category->save();	

        // 7
        $category = new Categories();
        $category->categoryName = "Action Horror";
        $category->save();	

        // 8
        $category = new Categories();
        $category->categoryName = "Strategy";
        $category->save();	
    }
}
