<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
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
        $inventories= Inventory::all();
        return view('backend.inventory.index',compact('inventories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Inventory $inventory)
    {
        //
        $user = Auth::user();
        return view('backend.inventory.create',compact('inventory','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\InventoryStoreRequest $request)
    {
        //
        $data=$request->all();

         $request->user()->create($data);

        return redirect("/inventories")->with("message", "New Item created successfully!");
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
    public function update(Requests\InventoryStoreRequest $request, Inventory $inventory)
    {
        //
        $inventory->update($request->all());
        return redirect("/inventories")
            ->with("message", "Item  Updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect("/inventories")
            ->with('message','Item deleted successfully');
    }
}
