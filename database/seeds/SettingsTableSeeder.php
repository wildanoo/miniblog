<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            "site_name" => "Laravel's Blog",
            'address' => 'Jakarta, Indonesia',
            'contact_number' => '081283877539',
            'contact_email' => 'info@miniblogproject'
        ]);
        
    }
}
