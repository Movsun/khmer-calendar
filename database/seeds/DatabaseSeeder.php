<?php

use Illuminate\Database\Seeder;
// use database\seeds\KhmerYearsTableSeeder;
// use database\seeds\KhmerMonthsTableSeeder;
// use database\seeds\khmerCalendarsTableSeeder;
// use database\seeds\EventsTableSeeder;
// use database\seeds\EventKhmerCalendarsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KhmerYearsTableSeeder::class);
        $this->call(KhmerMonthsTableSeeder::class);
        $this->call(khmerCalendarsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventKhmerCalendarsTableSeeder::class);
    }
}
