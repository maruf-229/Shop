<?php

namespace Database\Seeders;

use App\Models\BannerTo;
use Illuminate\Database\Seeder;

class BannerToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner_to = new BannerTo();
        $banner_to->image = 'x/category-1.jpg';
        $banner_to->save();

        $banner_to = new BannerTo();
        $banner_to->image = 'x/category-2.jpg';
        $banner_to->save();

    }
}
