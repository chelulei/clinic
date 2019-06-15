<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Session;
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

        $appointments = Appointment::latest()->get();
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

         $this->validate($request, [
                 'patient_id'=>'required',
                 'date' => 'required',
                 'time' => 'required'
        ]);

        try {

             $input = $request->all();
             $request->user()->appointments()->create($input);

        } catch (\Exception $e) {

           Session::flash("Something wen't wrong! Please try again");

        }

            return redirect()->route('backend.appointments.index')
            ->with('success','Appointment has been added successfully');


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
    public function edit(Appointment $appointment)
    {
        //
        // $appointment = Appointment::findOrFail($id);
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
    public function update(Request $request, Appointment $appointment)
    {
        //

        // $event = Appointment::findOrFail($id);
       try {
           $appointment->update($request->all());

        } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again");

        }

       return redirect()->route('backend.appointments.index')
       ->with('success','Appointment has been Updated successfully');
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
        try {

        $appointment=Appointment::FindOrFail($id);

        $appointment->delete();

       } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again");

        }

         return redirect()->route('backend.appointments.index')
         ->with('success', 'Service deleted successfully');

    }

}
