<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - at least as a child.',
        	'price' => 10
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://bestfantasybooks.com/blog/wp-content/uploads/2013/02/lotr.png',
        	'title' => 'The Lord of the Rings',
        	'description' => 'Better than the movies..',
        	'price' => 20
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://litreactor.com/sites/default/files/images/books/game-of-thrones-book.jpg',
        	'title' => 'Game of Thrones',
        	'description' => 'The real fight between the kingdoms.',
        	'price' => 15
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/01/16/17/the-girl-on-the-train.jpg',
        	'title' => 'The girl on the train',
        	'description' => 'The real thriller out there.',
        	'price' => 12
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'http://s3.amazonaws.com/agatha-christie-cms-production/hcuk-paperback/And-Then-There-Were-None.JPG',
        	'title' => 'And then there were none',
        	'description' => 'The best of its time.',
        	'price' => 30
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/e/e7/NeedfulThingsBookCover.JPG',
        	'title' => 'Needful Things',
        	'description' => 'Another thriller from the best seller Stephen king.',
        	'price' => 17
        	]);
        $product->save();
    }
}
