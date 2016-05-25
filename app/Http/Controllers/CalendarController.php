<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\KhmerCalendar;
use Carbon\Carbon;

class CalendarController extends Controller {

	public function index(){
		return 'hi';
	}

	public function show($year, $month)
	{
		// return 'hi';
		// dd([$year, $month]);
		$from = Carbon::create($year, $month, 1)->startOfWeek()->addDay(-1);
		$to = Carbon::create($year, $month, 1)->startOfWeek()->addDay(-1)->addDay(41);
		// // dd([$from, $to]);
		$data = KhmerCalendar::whereBetween('date', [$from, $to])->get();
		// // dd($data);
		if ($month == 1) {
			$previous = ($year-1).'/'.'12';
		} else{
			$previous = $year.'/'.($month-1);
		}
		if ($month == 12) {
			$next = ($year+1).'/'.'1';
		} else {
			$next = $year.'/'.($month+1);
		}
		//
		return view('calendar.monthly', compact('data', 'year', 'month', 'next', 'previous'));
		// return 'hi';
	}

	public function postShow(Request $request){

		$year = $request->year;
		$month= $request->month;
		return redirect()->action('CalendarController@show', [$year, $month]);
	}


}
