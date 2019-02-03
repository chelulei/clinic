<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ActivateController extends Controller
{
    //
    public function activate($id)
    {
        $user = User::findorFail($id);
        $user->status = 1;
        $user->save();

        if ($user) {

        return redirect()->route('backend.users.index')
        ->with('message', 'User Activated successfully');
        }else{

        return redirect()->route('backend.users.index')

            ->with('message','Something went wrong');

        }

    }

    public function deactivate($id)
    {

        $user = User::findorFail($id);
        $user->status = 0;
        $user->save();

        if ($user) {

        return redirect()->route('backend.users.index')
        ->with('message','User has been temporarily deactivated');
        }else{
        return redirect()->route('backend.users.index')

        ->with('message','Something went wrong try again');

        }

    }

}
