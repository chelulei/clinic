<?php

namespace App\Http\Controllers;

use App\Dental;
use App\Patient;
use App\Teeth;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
class DentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dentals= Dental::with('patient')->get();

        $user = Auth::user();

        return view('backend.dental.index',compact('dentals','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dental $dental)
    {
        //
        $user = Auth::user();
        $teeth = Teeth::pluck('name','id')->all();
        return view('backend.dental.create',compact('teeth','dental','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\DentalStoreRequest $request)
    {
        //
        $patient = Patient::findOrFail($request->patient_id);

        $patient->teeths()->attach($request->teeth);

        Dental::create($request->all());

        return redirect("/dental")->with("message", "New Service created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dental  $dental
     * @return \Illuminate\Http\Response
     */
    public function show(Dental $dental)
    {
        //
        return view('backend.dental.show',compact('dental',$dental));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dental  $dental
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dental = Dental::findOrFail($id);
        $user = Auth::user();

        $patient_id = Dental::where('id', '=', $id)
            ->first(['patient_id']);

        $patient = Patient::findOrFail($patient_id )->first();

        $pTeeths = $patient->teeths->pluck('id');

        $teeths = Teeth::pluck('name', 'id');

        return view('backend.dental.edit',compact('dental','user','pTeeths','teeths'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dental  $dental
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\DentalUpdateRequest $request, $id)
    {
        //


        $dental = Dental::findOrFail($id);

        $patient_id = Dental::where('id', '=', $id)

            ->first(['patient_id']);

        $patient = Patient::findOrFail($patient_id )->first();

        $patient->teeths()->sync($request->input('teeth'));

        $dental->update($request->all());

        return redirect("/dental")->with("message", "Patient was updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dental  $dental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dental $dental)
    {
        //
        $dental->delete();
        return redirect()->route('backend.dental.index')
            ->with('message','Service deleted successfully');
    }
}
