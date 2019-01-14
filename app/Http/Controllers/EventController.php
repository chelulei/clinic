<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Event;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class EventController extends Controller
{

    public function index()
    {

        $working_hours = Event::all();
        return view('backend.events.index', compact('working_hours'));
    }

    public function create(){

        $user = Auth::user();

        return view('backend.events.create',compact('user'));
    }

    public function store(Request $request)
    {

        Event::create(Input::all());
        return redirect('/events')->with('success', 'Event has been added');
      
    }


}