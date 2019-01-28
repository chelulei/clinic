<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
class RecordsController extends Controller
{
    //
    public function details($id)
    {
        //
        $prescriptions = Patient::with('prescriptions')->find($id)->prescriptions;
        $patient = Patient::select('name')
            ->where('id','=',$id)->first();
        return view('backend.prescriptions.records',compact('patient','prescriptions'));
    }

}
