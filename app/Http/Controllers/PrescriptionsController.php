<?php
namespace App\Http\Controllers;
use App\Prescription;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        return view('backend.prescriptions.index',compact('prescriptions','user'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Prescription $prescription)
    {
        //
         $user = Auth::user();
        return view('backend.prescriptions.create',compact('prescription','user'));
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
   try{

        $data= $this->handleRequest($request);
        Prescription::create($data);

    } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();

        }

        return redirect("/prescriptions")->with('success','New prescription created successfully!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
        return view('backend.prescriptions.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        //
        $user = Auth::user();
        return view('backend.prescriptions.edit',compact('prescription','user',$prescription));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PrescriptUpdateRequest $request, Prescription $prescription)
    {
        //

        // $prescription = Prescription::findOrFail($id);
 try {
        $data=$this->handleRequest($request);

        $prescription->update($data);

       } catch (\Exception $e) {

            Session::flash("Something wen't wrong! Please try again")->error();

        }

        return redirect("/prescriptions")->with('success','Mesprescription updated successfully!sage!');
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

 try {
       $prescription=Prescription::FindOrFail($id);

       $prescription->delete();

    } catch (\Exception $e) {
            Session::flash("Something wen't wrong! Please try again")->error();

        }

        return redirect("/prescriptions")->with('success','Prescription deleted successfully!');
    }
}
