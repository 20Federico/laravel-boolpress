<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = [
        'cat1', 'cat2', 'cat3', 'cat4', 'cat5', 'none'
      ];

      foreach ($categories as $category) {
        
        $newCategory = new Category();
        $newCategory->name = $category;
        $newCategory->save();

      }
    }
}
