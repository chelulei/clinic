<?php
namespace App\Http\Controllers;
use App\Timeslot;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class TimeslotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = Auth::user();
        $slots= Timeslot::all();
        return view('backend.timeslots.index',compact('slots','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Timeslot $slot)
    {
        //
        $user = Auth::user();

        return view('backend.timeslots.create',compact('slot','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\SlotStoreRequest $request)
    {
        //
        $data = $request->all();
        Timeslot::create($data);

        return redirect("/slots")->with("message", "New time slot created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timeslot  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function show(Timeslot $timeslot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timeslot  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slot = Timeslot::findOrFail($id);
        $user = Auth::user();
        return view("backend.timeslots.edit", compact('user','slot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timeslot  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\SlotUpdateRequest $request, $id)
    {
        //
        $slot = Timeslot::findOrFail($id);
        $slot->update($request->all());
        return redirect("/slots")->with("message", "Time slot updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timeslot  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Timeslot::findOrFail($id)->delete();

        return redirect("/slots")->with("message", "time slot deleted successfully!");
    }
}
