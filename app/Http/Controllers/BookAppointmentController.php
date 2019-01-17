<?php

namespace App\Http\Controllers;

use App\BookAppointment;
use Illuminate\Http\Request;
use App\Notifications\PatientNotify;
use Auth;
class BookAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required',
            'email' => 'required',
            'dop' => 'required',
            'date' => 'required',
            'message' => 'required',
        ]);

        // Create patient
        $patient = $request->all();

        /*notification*/
        $admin = User::first();
        $admin->notify(new PatientNotify($patient));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookAppointment  $bookAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(BookAppointment $bookAppointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookAppointment  $bookAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(BookAppointment $bookAppointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookAppointment  $bookAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookAppointment $bookAppointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookAppointment  $bookAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAppointment $bookAppointment)
    {
        //
    }
}
