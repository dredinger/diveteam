<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Logs;
use Carbon\Carbon;

class DsoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Logs $logs)
	{
		$logs = $logs->lastFive();

		return view('dso.index', compact('logs'));
	}

	public function search(Request $request)
	{
		if (!$request->search)
			return redirect(route('dso.home'));

		$input = $request->search;
		$format = 'Y-m-d';

		$queryLogs = DB::table('logs')->orderBy('created_at', 'desc');
		$queryNotes = DB::table('notes')->orderBy('created_at', 'desc');

		if (str_is('today', $input))
			$date = Carbon::now()->endOfDay()->setTimezone('America/Denver')->format('Y-m-d');
		else if (str_is('yesterday', $input))
			$date = Carbon::yesterday()->endOfDay()->setTimezone('America/Denver')->format('Y-m-d');
		else
			$date = Carbon::parse($input)->endOfDay()->setTimezone('America/Denver')->format('Y-m-d');

		$queryLogs->whereDate('created_at', $date);
		$queryNotes->whereDate('created_at', $date);
		
		$notes = $queryNotes->get();
		$logs = $queryLogs->get();

		// dd($logs);

		return view('dso.search', compact('logs', 'notes', 'date'));
	}

}