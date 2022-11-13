<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'first_address'   => '4321 California St,',
            'second_address'  => 'San Francisco, CA 12345',
            'opening_hours_1' => 'Mon-Thurs: 10:00 AM - 11:00 PM',
            'opening_hours_2' => 'Fri-Sun: 11:00 AM - 02:00 AM',
            'contact_phone'   => '+1 123 456 1234',
            'contact_email'   => 'info@company.com',
        ]);
    }
}
