<?php

use Illuminate\Database\Seeder;
use App\KhmerCalendar;
use App\Event;

class EventCalendarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $dates = KhmerCalendar::all();
      $events = Event::all();

      foreach ($dates as $d) {
        foreach ($events as $event) {
          if ($event->is_lunar) {
            if ($d->khmer_months_id == $event->month && $d->khmer_day == $event->day) {
              $d->event()->attach($event->id);
            }
          } else {
            $month = $d->date->month;
            $day = $d->date->day;
            if ($month == $event->month && $day == $event->day) {
              $d->event()->attach($event->id);
            }
          }
        }
      }
    }
}
