<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Event;
class EventController extends Controller
{

    public function calender()
    {
        $events = [];
        $data = Event::all();
        if($data->count())
        {
            foreach ($data as $key => $value)
            {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.'+1 day'),
                    null,
                    // Add color
                    [
                        'color' => '#000000',
                        'textColor' => '#008000',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('backend.events.index', compact('calendar'));
    }

    public function createEvent(){

        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $event= new Event();
        $event->title=$request->get('title');
        $event->start_date=$request->get('start_date');
        $event->end_date=$request->get('end_date');
        $event->save();
        return redirect('event')->with('success', 'Event has been added');
      
    }


}