<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class ProfileController extends Controller
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
    public function edit(Request $request, User $user){

// user
        $viewData = [
            'user' => $user,
        ];
        // render view with data
        return view('backend.account.password',$viewData);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user){

        if (!(Hash::check($request->get('current-password'), $user->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

         $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
         $user->password = Hash::make($request->get('new-password'));

        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");;


    }
}
