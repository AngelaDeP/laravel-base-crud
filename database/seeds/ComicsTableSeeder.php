<?php

use Illuminate\Database\Seeder;
use App\Comic;

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

        foreach ($comics as $comic) {

            $format = new Comic();

            $format->title = $comic['title'];
            $format->description = $comic['description'];
            $format->thumb = $comic['thumb'];
            $format->price = $comic['price'];
            $format->series = $comic['series'];
            $format->sale_date = $comic['sale_date'];
            $format->type = $comic['type'];

            $format->save();

        }
    }
}
