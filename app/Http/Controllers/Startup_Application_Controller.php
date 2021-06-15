<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Model\Application;
use App\Models\sectionb;
use Illuminate\Http\Request;

use PDF;

class Startup_Application_Controller extends Controller
{
    public function index()
    {
        $user_data = User::all();
        return view('Admin/Startup_Application/User_Startup_Application',compact('user_data'));
    }

    public function show_user_details()
    {
        $user_data = User::all();
        return view('Admin/Startup_Application/users_details',compact('user_data'));
    }
}
