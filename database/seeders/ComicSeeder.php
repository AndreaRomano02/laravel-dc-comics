<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $comics = config('comics');


    foreach ($comics as $comic) {

      $comic['artists'] = implode(',', $comic['artists']);
      $comic['writers'] = implode(',', $comic['writers']);

      $new_comic = new Comic();
      $new_comic->fill($comic);
      $new_comic->save();
    }
  }
}
