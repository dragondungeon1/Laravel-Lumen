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
            DB::table('dog_table')->insert([
           ['name'=> 'Harry',
           ],
            ['name'=>'Lola'
                ],
            ['name'=>'Gratje'

            ]
        ]);
    }
}
