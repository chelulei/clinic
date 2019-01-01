<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
    protected $limit = 5;
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
        $users= User::orderBy('name')->paginate($this->limit);
        $userCount=User::count();
        return view('backend.users.index',compact('users','userCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
        return view('backend.users.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStoreRequest $request)
    {
        //
        $data= $this->handleRequest($request);

        User::create($data);

        return redirect("/users")->with("message", "New user was created successfully!");
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
//       dd (config('custom.default_user_id'));
        $user = User::findOrFail($id);
        return view("backend.users.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserUpdateRequest $request, $id)
    {
        //
        $user = User::findOrFail ($id);
        if (Input::get ('password') == '') {
            $user->update (Input::except ('password'));
        }
        else {
            $user->update (Input::all ());
        }

        return redirect("/users")->with("message", "User was updated successfully!!");
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
        User::findOrFail($id)->delete();

        return redirect("/users")->with("message", "User was deleted successfully!");
    }
}
