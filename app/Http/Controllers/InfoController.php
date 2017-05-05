<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info.index');
    }

    public function trainer()
    {
        $trainers = Trainer::with('availability')
            ->trainers()
            ->orderBy('trainers.name','ASC')
            ->get();

        $days = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ];

        return view('info.trainers', compact('trainers', 'days'));
    }

    public function feeds()
    {
        
    }

}
