<?php

use Illuminate\Database\Seeder;
use App\Models\Social;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create(['facebook' => 'https://www.facebook.com/Zona-relaxxx-128919851120095/',
    					'twitter' => 'https://www.facebook.com/Zona-relaxxx-128919851120095/']);
    }
}
