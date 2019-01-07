<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function index()
    {
        //
        $users= User::where('role', 2)->get();
        return view('backend.users.index',compact('users'));
    }


    public function dentists()
    {
        //
        $users= User::where('role', 3)->get();
        return view('backend.users.index',compact('users'));
    }
}
