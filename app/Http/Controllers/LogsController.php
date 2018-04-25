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
			$pic = new Log;
			$pictureID = $pic->setup($request);
			if ($pictureID === false)
				return back()->withInput()->withErrors(['Picture not found or invalid.']);
		}

		$requestInput = $request->except(['diveboard_picture', 'diveboard_picture_text']);
		$input = array_add($requestInput, 'picture_id', $pictureID);
		$input = array_add($input, 'ip', $request->ip());

		$log = Log::create(array_except($input, 'note_content'));

		if (isset($input['note_content']) && $input['note_content'] != null) {
			Note::create([
				'ip' => $input['ip'],
				'content' => $input['note_content'],
				'log_id' => $log->id
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
