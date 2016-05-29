<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\KhmerCalendar;
use Carbon\Carbon;

class CalendarController extends Controller {

	public function index(){
		$today = Carbon::today();
		return redirect()->action('CalendarController@show', [$today->year, $today->month]);
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
		//sak
		$sak = ["អដ្ឋ​ស័ក", "នព្វស័ក", "សំរឹទ្ធិស័ក", "ឯកស័ក", "ទស័កោ", "តស័ក្រី", "ចតស័ក្វា", "បញ្ចស័ក", "ឆស័ក", "សបស័ក្ត"];


		return view('calendar.monthly', compact('data', 'year', 'month', 'next', 'previous', 'sak'));
		// return 'hi';
	}

	public function postShow(Request $request){

		$year = $request->year;
		$month= $request->month;
		return redirect()->action('CalendarController@show', [$year, $month]);
	}


}
