<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'author' => 'Paolo Duzioni',
                'title' => 'Lorem Ipsum'
                
            ],
            [
                'author' => 'Lorenzo Balsano',
                'title' => 'Dolor Sit'
            ],
            [
                'author' => 'INPS',
                'title' => 'Amet bla bla'
            ],
        ];
        foreach ($books as $book) {
        $newBook = new Book();
        $newBook->fill($book);
        $newBook->save();
    }
        
    }
}
