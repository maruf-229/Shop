<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner();
        $banner->title = 'Some text goes here that describes the image';
        $banner->description = 'See how your users experience your website in realtime or view  trends to see any changes in performance over time.';
        $banner->image = 'x/slider-1.jpg';
        $banner->save();

        $banner = new Banner();
        $banner->title = 'Some text goes here that describes the image';
        $banner->description = 'See how your users experience your website in realtime or view  trends to see any changes in performance over time.';
        $banner->image = 'x/slider-2.jpg';
        $banner->save();

        $banner = new Banner();
        $banner->title = 'Some text goes here that describes the image';
        $banner->description = 'See how your users experience your website in realtime or view  trends to see any changes in performance over time.';
        $banner->image = 'x/slider-3.jpg';
        $banner->save();
    }
}
