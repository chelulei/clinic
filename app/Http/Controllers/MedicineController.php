<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use App\Inventory;
use Auth;
use DB;
use Session;
class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicines= Medicine::with('patient')->latest()->get();

        return view('backend.medicines.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Medicine $medicine)
    {//

        $user = Auth::user();
        return view('backend.medicines.create',compact('user','medicine'));
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
                'patient_id' =>'required',
                'med_id' =>'required',
                'quantity' =>'required',
        ]);
        //
     try{

            $med = new Medicine;
            $med->user_id = auth()->user()->id;
            $med->patient_id = $request->input('patient_id');
            $med->med_id = $request->input('med_id');
            $med->quantity = $request->input('quantity');
            $med->save();

            if ( $med->save())

            $quantity = Inventory::findOrFail($request->med_id);
            $quantity->quantity -= $request->quantity;
            $quantity->save();

         } catch (\Exception $e) {

            Session::flash('error', 'Some thing is wrong. Please try again');

        }
        return redirect("/inventories")->with('success', 'Record Saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
        $user = Auth::user();
        return view('backend.medicines.edit',compact('medicine','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'user_id' =>'required',
            'patient_id' =>'required',
            'med_id' =>'required',
            'quantity' =>'required',
        ]);
   try{

        $medicine->update($request->all());

      } catch (\Exception $e) {

           Session::flash('error', 'Some thing is wrong. Please try again');

        }

        return redirect("/medicines")->with('success', 'Record Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($d)
    {
        try{

       $medicine = Medicine::FindOrFail($d);

        $medicine->delete();


        } catch (\Exception $e) {

            Session::flash('error', 'Some thing is wrong. Please try again');

        }
        return redirect("/medicines")->with('success', 'Record Updated successfully');

    }
}
