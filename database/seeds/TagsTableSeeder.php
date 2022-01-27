<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = [
        'tag1', 'tag2', 'tag3', 'tag4', 'tag5'
      ];

      foreach ($tags as $tag) {
        
        $newTag = new Tag();
        $newTag->name = $tag;
        $newTag->save();

      }
    }
}
