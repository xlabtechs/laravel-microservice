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
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => 'Category -'. $i,
                'description' => 'Category'. $i .' description',
            ]);
        }
    }
}
