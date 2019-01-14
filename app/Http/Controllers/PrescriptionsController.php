<?php

namespace App\Http\Controllers;

use App\Prescription;
use Illuminate\Http\Request;
use App\Http\Requests;
class PrescriptionsController extends Controller
{
    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath =public_path('img');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prescriptions= Prescription::with('patient')->get();

        return view('backend.prescriptions.index',compact('prescriptions'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Prescription $prescription)
    {
        //
        return view('backend.prescriptions.create',compact('prescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PrescriptStoreRequest $request)
    {
        //
        $data= $this->handleRequest($request);
        prescription::create($data);

        return redirect("/prescriptions")->with("message", "New prescription created successfully!");
    }

    private function handleRequest($request){

        $data = $request->all();

        if($request->hasFile('image')){

            $image = $request->file('image');

            $fileName = $image->getClientOriginalName();

            $destination = $this->uploadPath;

            $image->move($destination,$fileName);

            $data['image'] =  $fileName;

        }
        return $data;
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
        $prescription = prescription::findOrFail($id);

        return view("backend.prescriptions.edit", compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PrescriptUpdateRequest $request, $id)
    {
        //

        $prescription = Prescription::findOrFail($id);

        $data=$this->handleRequest($request);

        $prescription->update($data);

        return redirect("/prescriptions")->with("message", "prescription updated successfully!!");
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
        Prescription::findOrFail($id)->delete();

        return redirect("/prescriptions")->with("message", "prescription deleted successfully!");
    }
}
