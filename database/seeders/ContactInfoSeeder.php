<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_infos')->insert([
            'address' => ' 4/b, road-7, Block-c, Nobody housing, Mohammadpur Dhaka',
            'email' => 'mhmaruf229@gmail.com',
            'phone' => '01799631258',
        ]);
    }
}
