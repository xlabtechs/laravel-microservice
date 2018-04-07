<?php

use Database\traits\TruncateTable;
use Illuminate\Database\Seeder;
Use \App\Models\Tag as Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Tag::truncate();

        // And now, let's create a few Tags in our database:
        Tag::create([
			'name' => 'jQuery',
		]);
			
		Tag::create([
			'name' => 'php',
		]);
    }
}
