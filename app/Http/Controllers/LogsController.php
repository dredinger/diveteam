<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dso.logs.index');
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
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'psi_res' => 'required|digits:4',
        //     'psi_uts' => 'required|digits:4',
        //     'psi_sw' => 'required|digits:4',
        //     'psi_dr' => 'required|digits:4',
        //     'psi_bank' => 'required|digits:4',
        //     'psi_oxy_third' => 'required|digits:4',
        //     'psi_oxy_second' => 'required|digits:4',
        // ]);

        if (isDay(4)) {
            $this->validate($request, [
                'compressor_hours' => 'required|digits:4'
            ]);
        }
        if (isDay(5) && $request->hasFile('diveboard_picture') && $request->file('diveboard_picture')->isValid()) {
            $this->validate($request, [
                'diveboard_picture' => 'required|image'
            ]);
        } else {
            dd('error!');
        }

        $log = new Log;
        $log->setup($request);

        // $this->log->create($request);

        session()->flash('message', 'Your log has been saved.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
