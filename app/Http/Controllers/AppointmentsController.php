<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $working_hours = Appointment::all();
//        return view('backend.appointments.index', compact('working_hours'));

        $appointments = Appointment::all();
        return view('backend.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Appointment $appointment)
    {
        //
        $user = Auth::user();

        return view('backend.appointments.create',compact('user','appointment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Appointment::create(Input::all());
        return redirect('/appointments')->with('success', 'A has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $appointment = Appointment::findOrFail($id);
        $user = Auth::user();
        return view("backend.appointments.edit", compact('appointment','user'));
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

        $event = Appointment::findOrFail($id);

        $event->update($request->all());

        return redirect("/appointments")->with("message", "Appointment updated successfully!!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Appointment::findOrFail($id)->delete();

        return redirect("/appointments")->with("message", "Appointment deleted successfully!");
    }

    public function save()
    {
        //

    }
    
}
