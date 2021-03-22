<?php

namespace Database\Seeders;

use App\Models\Logo;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_method = new PaymentMethod();
        $payment_method->image = 'payment-method.png';
        $payment_method->save();
    }
}
