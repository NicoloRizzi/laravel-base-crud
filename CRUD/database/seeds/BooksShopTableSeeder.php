<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\BookShop;
class BooksShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 5;
        for ($i = 0; $i < $records ; $i++) {
            $newBookshop = new BookShop;
            $newBookshop->bookshop = $faker->name();
            $newBookshop->telephone = $faker->e164PhoneNumber();
            $newBookshop->save();
        }
    }
}
