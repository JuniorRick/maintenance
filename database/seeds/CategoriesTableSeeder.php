<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = array(
        array('name' => "Printer"),
        array('name' => "Monitor"),
        array('name' => "System block"),

      );

      DB::table('categories')->insert($categories);


      $section = array(
        array('name' => "Diagnostic Functional"),
        array('name' => "Radiologie si Tomografie Compiterizata"),
        array('name' => "Rezonanta Magnetica si Nucleara"),
        array('name' => "Laborator (et. 8)"),

      );

      DB::table('sections')->insert($section);
    }
}
