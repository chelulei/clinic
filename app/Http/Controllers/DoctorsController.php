<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Http\Requests;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    protected $limit = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doctors= Doctor::orderBy('name')->paginate($this->limit);
        $doctorCount=doctor::count();
        return view('backend.doctors.index',compact('doctors','doctorCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        //
        return view('backend.doctors.create',compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\DoctorStoreRequest $request)
    {
        //
        Doctor::create($request->all());

        return redirect("/doctors")->with("message", "New Doctor was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view("backend.doctors.edit", compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\DoctorUpdateRequest $request, $id)
    {
        //
        $doctor = doctor::findOrFail ($id);

        if (Input::get ('password') == '') {

            $doctor->update (Input::except ('password'));
        }
        else {
            $doctor->update (Input::all ());
        }

        return redirect("/doctors")->with("message", "doctor was updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Doctor::findOrFail($id)->delete();

        return redirect("/doctors")->with("message", "doctor was deleted successfully!");
    }
}
