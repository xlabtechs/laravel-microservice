<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
