<?php

use App\Header;
use Illuminate\Database\Seeder;

class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'title' => 'I AM KAMRUZZAMAN',
            'subtitle' => 'WEB DESIGNER & DEVELOPER',
            'facebook_link' => 'https://www.facebook.com',
            'skype_link' => 'https://www.skype.com',
            'instagram_link' => 'https://www.instagram.com',
            'github_link' => 'https://www.github.com',
            'bg_image' => 'default-bg.jpg',
        ]);
    }
}
