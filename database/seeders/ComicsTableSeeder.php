<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        $newComic = new Comics();
        $newComic->title = $comics['title'];
        $newComic->description = $comics['description'];
        $newComic->price = $comics['price'];
        $newComic->series = $comics['series'];
        $newComic->sale_date = $comics['sale_date'];
        $newComic->type = $comics['type'];


        dd($comics);
    }
}
