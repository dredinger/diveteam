<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VolunteerContactRequest;

class VolunteerController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
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

    public function contact()
    {
        return view('volunteer.contact');
    }

    public function store(VolunteerContactRequest $request)
    {
        \Mail::send('emails.contact',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'position' => $request->get('position'),
                'user_message' => $request->get('message')
            ], function ($message) {
                $message->from('info@deepblueseafoundation.org');
                $message->to('daniel.redinger@gmail.com', 'Admin')->subject('Volunteer Contact Form');
            }
        );

        session()->flash('message', 'Thank you for contacting us!');

        return redirect(route('volunteer.contact'));
    }
    
}
