<?php

use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([

            ['name'=>'tess'],
            ['name'=>'bram'],
            ['name'=>'joop'],
            ['name'=>'ruben']

        ]);
    }
}
