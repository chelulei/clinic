<?php
namespace App\Http\Controllers;
use App\Appointment;
use App\Patient;
use App\Event;
use App\Prescription;
use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    //


    public function index(){

        return view('pages.index');

    }
    public function about(){

        return view('pages.about');

    }
    public function contact(){

        return view('pages.contact');

    }
    public function doctor(){

        return view('doctor');

    }
    public function admin(){

        return view('admin');

    }
    public function dentists(){

        return view('dentists');

    }



    public function countAll(){

        $appointmentCount = Appointment::where("user_id" ,Auth::user()->id)->count();
        $prescriptionCount = Prescription::where("user_id" ,Auth::user()->id)->count();
        $patientCount = Patient::where("user_id" ,Auth::user()->id)->count();
        $eventCount = Event::where("user_id" ,Auth::user()->id)->count();

        $countAll = array(

            'appointmentCount' => $appointmentCount,
            'prescriptionCount' => $prescriptionCount,
            'patientCount' => $patientCount,
            'eventCountCount' => $eventCount
        );

        return (object)$countAll;

    }

    function getCount()
    {
        return response()->json($this->countAll());
    }


}
