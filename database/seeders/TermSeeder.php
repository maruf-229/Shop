<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $term = new Term();
        $term->description = 'Lorem  kkxvsdfsddshfuds';
        $term->save();
    }
}
