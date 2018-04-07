<?php

use Database\traits\TruncateTable;
use Illuminate\Database\Seeder;
Use \App\Models\Link as Link;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Link::truncate();

        // And now, let's create a few links in our database:
        Link::create([
			'category_id' => 1,
			'name'=>'Laravel PHP Framework 1',
			'url'=> 'http://laravel.com',
			'description'=> 'Laravel is a modern and powerful PHP framework with elegant syntax for rapid application development and prototyping.  Laravel makes use of the best packages available in the PHP community to provide a fantastic development environment for users of all skill levels.',
		]);
		
		 Link::create([
			'category_id' => 1,
			'name'=>'Laravel PHP Framework 2',
			'url'=> 'http://laravel.com',
			'description'=> 'Laravel is a modern and powerful PHP framework with elegant syntax for rapid application development and prototyping.  Laravel makes use of the best packages available in the PHP community to provide a fantastic development environment for users of all skill levels.',
		]);
		
		 Link::create([
			'category_id' => 1,
			'name'=>'Laravel PHP Framework 3',
			'url'=> 'http://laravel.com',
			'description'=> 'Laravel is a modern and powerful PHP framework with elegant syntax for rapid application development and prototyping.  Laravel makes use of the best packages available in the PHP community to provide a fantastic development environment for users of all skill levels.',
		]);
		
		 Link::create([
			'category_id' => 2,
			'name'=>'Laravel PHP Framework 4',
			'url'=> 'http://laravel.com',
			'description'=> 'Laravel is a modern and powerful PHP framework with elegant syntax for rapid application development and prototyping.  Laravel makes use of the best packages available in the PHP community to provide a fantastic development environment for users of all skill levels.',
		]);
    }
}
