<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'email'=>'julius@gmail.com',
                'phone'=> '0682100128',
                'firstname'=>'Julius',
                'lastname'=>'Caesar',
                'adress'=>'Vulcanusstraat',
                'postalcode'=>'2314BL',
                'residence'=>'Leiden',
            ],


        ]);
    }
}
