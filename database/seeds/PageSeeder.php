<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $page = new Page();
        $page->title = 'title';
        $page->message = $faker->company;

        $page->save();
    }
}
