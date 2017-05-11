<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['volunteer']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = \DB::table('managers')->get();
        return view('contact.index', compact('managers'));
    }

    public function volunteer()
    {
        return view ('contact.volunteer');
    }
    
}
