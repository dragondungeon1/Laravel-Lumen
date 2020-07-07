<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = DB::table('owners')->get()->first();
        DB::table('dogs')->insert([

            [
                'name'=>'Gijs',
                'owner'=>$owner->firstname,
                'description'=>'Just a normal dog',
                'race'=>'Jack russel',
                'age'=>'6',
                'allergies'=>'none',
                'owners_id'=> $owner->id,
                'created_at'=>
            ],

            [
                'name'=>'Jan',
                'owner'=>$owner->firstname,
                'description'=>'He has the flu',
                'race'=>'Labradoodle',
                'age'=>'4',
                'allergies'=>'nuts',
                'owners_id'=> $owner->id
            ],

        ]);
    }
}
