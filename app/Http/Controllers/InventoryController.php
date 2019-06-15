<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Validator;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $inventories= Inventory::latest()->get();
        return view('backend.inventory.index',compact('inventories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


           if ($request->isMethod('get'))

            return view('backend.inventory.form');

        else {

            $rules = [
                'name' => 'required',
                'quantity' => 'required',
                'body' => 'required'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails())

                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);

              $input = $request->all();
             $request->user()->inventories()->create($input);

            return response()->json([
                'fail' => false,
                'redirect_url' => url('inventorie'),
                 'message' =>'New Drug created successfully!'
            ]);


        }


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
        return view('backend.inventories.show',compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
        $user = Auth::user();
        return view('backend.inventory.edit',compact('inventory','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

     if ($request->isMethod('get'))

            return view('backend.inventory.form', ['inventory' => Inventory::find($id)]);

        else {
            $rules = [
                 'name' => 'required',
                'quantity' => 'required',
                'body' => 'required'
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);

            $inventory = Inventory::find($id);
            $inventory->update($request->all());

            return response()->json([
                'fail' => false,
                 'message' =>'Drug  Updated successfully!!',
                 'redirect_url' => url('inventorie')
            ]);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try{

      $inventory=Inventory::FindOrFail($id);

        $inventory->delete();

         } catch (\Exception $e) {

             Session::flash('error', 'Some thing is wrong. Please try again');

        }
       return back()->with('success', 'Drug deleted successfully!');

    }
}
