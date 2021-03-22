<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privacy_policy = new PrivacyPolicy();
        $privacy_policy->description = 'Lorem  kkxvsdfsddshfuds';
        $privacy_policy->save();
    }
}
