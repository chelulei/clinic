<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfile;
use App\User;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user = Auth::user();
        return view('backend.account.index',compact('user'));

}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateProfile $request, User $user){
        $data = $request->all();
        $user->update($data);
        return redirect(route('backend.account.password', ['user' => $user]))
            ->with('message', 'Your profile has been updated successfully.');


    }
}
