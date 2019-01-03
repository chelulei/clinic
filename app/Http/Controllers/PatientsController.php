<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class PatientsController extends Controller
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
        $patients= Patient::orderBy('name')->paginate($this->limit);
        $patientCount=Patient::count();
        return view('backend.patients.index',compact('patients','patientCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        //


        return view('backend.patients.create',compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PatientStoreRequest $request)
    {


        Patient::create($request->all());
       return redirect("/patients")->with("message", "New patient was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view("backend.patients.edit", compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PatientUpdateRequest $request, $id)
    {
        //
        $patient = patient::findOrFail ($id);

        if (Input::get ('password') == '') {

            $patient->update (Input::except ('password'));
        }
        else {
            $patient->update (Input::all ());
        }

        return redirect("/patients")->with("message", "patient was updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        patient::findOrFail($id)->delete();

        return redirect("/patients")->with("message", "patient was deleted successfully!");
    }
}
