<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_links')->insert([
            'twitter' => 'https://twitter.com/?lang=en',
            'facebook' => 'https://www.facebook.com/profile.php?id=100013618690358',
            'linkedin' => 'https://bd.linkedin.com/',
            'instagram' => '01799631258',
            'youtube' => 'https://www.youtube.com/',
        ]);
    }
}
