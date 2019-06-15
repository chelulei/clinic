<?php

namespace App\Http\Controllers;

use App\Dental;
use App\Patient;
use App\Teeth;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
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
        try {
        $patient = Patient::findOrFail($request->patient_id);

        $patient->teeths()->attach($request->teeth);

        Dental::create($request->all());

} catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();

        }
        return redirect()->route('backend.dental.index')->with('success', 'New Service created successfully');
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

 try {
        $dental = Dental::findOrFail($id);

        $patient_id = Dental::where('id', '=', $id)

            ->first(['patient_id']);

        $patient = Patient::findOrFail($patient_id )->first();

        $patient->teeths()->sync($request->input('teeth'));

        $dental->update($request->all());



   } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();

        }

        return redirect()->route('backend.dental.index')->with('success', 'Service was updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dental  $dental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {

               $dental= Dental::FindOrFail($id);

                 $dental->delete();



        } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();

        }
        return redirect()->route('backend.dental.index')->with('success', 'Service deleted successfully');

    }
}
