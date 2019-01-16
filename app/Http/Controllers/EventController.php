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

    public function create(Event $event){

        $user = Auth::user();

        return view('backend.events.create',compact('user','event'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        Event::create(Input::all());

        return redirect('/events')->with('success', 'Event has been added');
      
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
        $event = Event::findOrFail($id);
        $user = Auth::user();
        return view("backend.events.edit", compact('event','user'));
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

        $event = Event::findOrFail($id);

        $event->update($request->all());

        return redirect("/events")->with("message", "event updated successfully!!");
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
        Event::findOrFail($id)->delete();

        return redirect("/events")->with("message", "event deleted successfully!");
    }


}