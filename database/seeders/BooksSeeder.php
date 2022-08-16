<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "name" => "harry potter",
            "author" => "JK Rowling",
            "year" => "2000",
            "qty" => "10"
        ];

        Books::create($data);
    }
}
