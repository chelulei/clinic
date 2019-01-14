<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
class EmployeesController extends Controller
{


    protected $uploadPath;

    public function __construct()
    {
//        $this->middleware('permission:employee-list');
//        $this->middleware('permission:employee-create', ['only' => ['create','store']]);
//        $this->middleware('permission:employee-edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:employee-delete', ['only' => ['destroy']]);

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
        $employees= Employee::all();

        return view('backend.employees.index',compact('employees'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        //
        return view('backend.employees.create',compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\EmployeeStoreRequest $request)
    {
        //
        $data= $this->handleRequest($request);
        Employee::create($data);

        return redirect("/employees")->with("message", "New employee created successfully!");
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
        $employee = Employee::findOrFail($id);

        return view("backend.employees.edit", compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\EmployeeUpdateRequest $request, $id)
    {
        //

        $employee = Employee::findOrFail($id);

        $data=$this->handleRequest($request);

        $employee->update($data);

        return redirect("/employees")->with("message", "employee updated successfully!!");
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
        Employee::findOrFail($id)->delete();

        return redirect("/employees")->with("message", "employee deleted successfully!");
    }
}
