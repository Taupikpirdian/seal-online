<?php

use Illuminate\Database\Seeder;
use App\Category;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id   = 1;
        $category->name = 'Berita';
        $category->save();

        $category = new Category();
        $category->id   = 2;
        $category->name = 'Acara';
        $category->save();

        $category = new Category();
        $category->id   = 3;
        $category->name = 'Info';
        $category->save();

        $category = new Category();
        $category->id   = 4;
        $category->name = 'Game Up';
        $category->save();
    }
}
