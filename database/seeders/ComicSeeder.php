<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        $comics = config('comics');

        foreach($comics as $Comic) {

            $newComic = new Comic();

            $newComic->title = $Comic['title'];
            $newComic->description = $Comic['description'];
            $newComic->thumb = $Comic['thumb'];
            $newComic->price = $Comic['price'];
            $newComic->series = $Comic['series'];
            $newComic->sale_date = $Comic['sale_date'];
            $newComic->type = $Comic['type'];
            $newComic->artists = implode(", ", $Comic['artists']);
            $newComic->writers = implode(", ", $Comic['writers']);

            $newComic->save();
        }

    }
}