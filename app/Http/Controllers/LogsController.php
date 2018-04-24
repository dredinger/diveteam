<?php

namespace App\Http\Controllers;

use App\Log;
use App\Repositories\Logs;
use App\Http\Requests\LogRequest;
use App\Note;
use Carbon\Carbon;

class LogsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Logs $logs)
	{
		$logs = $logs->paged();
		return view('dso.logs.index', compact('logs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('dso.logs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(LogRequest $request)
	{
		$pictureID = null;
		if (isDay(2)) {
			if ($request->hasFile('diveboard_picture') && $request->file('diveboard_picture')->isValid()) {
				$pic = new Log;
				$pictureID = $pic->setup($request);
			} else {
				return back()->withInput()->withErrors(['picture' => 'No picture found!']);
			}
		}

		$masks = ($request->jumppack_masks == null) ? '0' : '1';
		$disinfectants = ($request->disinfectants == null) ? '0' : '1';
		$sd_checklist = ($request->sd_checklist == null) ? '0' : '1';
		$aed_third = ($request->aed_third == null) ? '0' : '1';
		$aed_second = ($request->aed_second == null) ? '0' : '1';

		$log = Log::create([
			'ip' => $request->ip(),
			'psi_res' => $request->psi_res,
			'psi_uts' => $request->psi_uts,
			'psi_sw' => $request->psi_sw,
			'psi_dr' => $request->psi_dr,
			'psi_bank' => $request->psi_bank,
			'jumppack_masks' => $masks,
			'disinfectants' => $disinfectants,
			'sd_checklist' => $sd_checklist,
			'aed_third' => $aed_third,
			'aed_second' => $aed_second,
			'psi_oxy_third' => $request->psi_oxy_third,
			'psi_oxy_second' => $request->psi_oxy_second,
			'compressor_hours' => $request->compressor_hours,
			'picture_id' => $pictureID
		]);
		if ($request->note_content) {
			Note::create([
				'ip' => $request->ip(),
				'content' => $request->note_content,
				'log_id' => $log
			]);
		}
		session()->flash('message', 'Your log has been saved.');
		return redirect()->route('dso.logs.view', $log);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if (!$log = Log::find($id))
			return redirect()->route('dso.logs')->with('error', 'Log does not exist!');
		else
			return view('dso.logs.show', compact('log'));
		}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$log = Log::findOrFail($id);

		return view('dso.logs.edit', compact('log'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(LogRequest $request, $id)
	{
		$log = Log::findOrFail($id);
		$input = $request->except('diveboard_picture_text');
		$log->update($input);

		session()->flash('message', 'Your log has been updated.');
		return redirect()->route('dso.logs.view', $log);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
