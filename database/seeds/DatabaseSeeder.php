<?php

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
        $this->call(AboutTableSeeder::class);
        $this->call(HeaderTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
    }
}
