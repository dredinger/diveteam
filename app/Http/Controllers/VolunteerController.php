<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'assistant', 'guide', 'diver']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('volunteer.index');
    }

    public function assistant()
    {
        return view('volunteer.assistant');
    }

    public function guide()
    {
        return view('volunteer.guide');
    }

    public function diver()
    {
        return view('volunteer.diver');
    }
    
}
