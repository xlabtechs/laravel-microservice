<?php

use Database\traits\TruncateTable;
use Illuminate\Database\Seeder;
Use \App\Models\Category as Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Category::truncate();

        // And now, let's create a few categories in our database:
        Category::create([
			'name' => 'application/rss+xml',
			'description' => 'application/rss+xml description',
		]);
			
		Category::create([
			'name' => 'application/atom+xml',
			'description' => 'application/atom+xml description',
		]);
    }
}
