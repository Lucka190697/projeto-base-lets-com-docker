<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'isbn' => 1234567891234,
                'title' => 'Crisis on Infinite Earths',
                'author' => 'Marv Wolfman',
                'giver' => 'Barry Allen',
                'entryDate' => '2020-08-03 21:30:00',

                'user_id' => 1,
            ]
        ]);
    }
}
