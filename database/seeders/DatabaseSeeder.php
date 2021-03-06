<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ContactInfoSeeder::class,
            BannerSeeder::class,
            LogoSeeder::class,
            SocialLinkSeeder::class,
            PaymentMethodSeeder::class,
            PrivacyPolicySeeder::class,
            TermSeeder::class,
            BannerToSeeder::class,
        ]);
    }
}
