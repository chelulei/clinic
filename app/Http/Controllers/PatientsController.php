<?php
namespace App\Http\Controllers;
use App\Patient;
use App\History;
use App\Immunization;
use App\Http\Requests;
use Auth;
use Session;
class PatientsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients= Patient::orderBy('id', 'desc')->get();
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
        $user = Auth::user();
        $histories=History::all();
        $immunizations=Immunization::all();
        return view('backend.patients.create',compact('patient','histories',
            'immunizations','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Requests\PatientStoreRequest $request)
    {
        //

         try {

        $data= $this->handleRequest($request);
        $patient = Patient::create($data);
        $patient->histories()->attach($request->histo);

        $patient->immunizations()->attach($request->immun);


         } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();
        }

        return redirect("/patients")->with('success','New patient was created successfully!');
    }

     private function handleRequest($request){
         $data = $request->all();
         if($request->hasFile('image')){
             $image = $request->file('image');

             $filenameWithExt = $image->getClientOriginalName();

             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

             $extension = $image->getClientOriginalExtension();

             $fileNameToStore = $filename . '_' . time() . '.' . $extension;

             $destination = $this->uploadPath;

             $image->move($destination,$fileNameToStore);


             $data['image'] = $fileNameToStore;
         }
         return $data;
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
        $histories = History::all();
        $immunizations = Immunization::all();

        return view("backend.patients.show",

            compact('patient','histories','immunizations'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $user = Auth::user();
         Patient::with('histories','immunizations');

        $histories = History::all();
        $immunizations = Immunization::all();
        return view("backend.patients.edit",
            compact('patient','histories','immunizations','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PatientUpdateRequest $request, Patient $patient)
    {
        //
        // $patient = Patient::findOrFail($id);
        try {

        $data=$this->handleRequest($request);
        $patient->update($data);
        $patient->histories()->sync($request->histo);
        $patient->immunizations()->sync($request->immun);

         } catch (\Exception $e) {

              Session::flash("Something wen't wrong! Please try again")->error();
        }


        return redirect("/patients")->with('success','Patient was updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try {

         $patient=Patient::FindOrFail($id);

         $patient->delete();

          } catch (\Exception $e) {

              Session::flash("Something wen't wrong! Please try again")->error();

        }

        return redirect("/patients")->with('success','Patient was deleted successfully!');
    }
}

