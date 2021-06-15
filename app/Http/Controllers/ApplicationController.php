<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Validator;
use Auth;

class ApplicationController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user->set == 0) {
            return view('user.registration-page', [
                'user' => $user,
            ]);
        } else {
            return view('user_dashboard.user_dashboard', [
                'user' => $user,
            ]);
        }
    }


    public function dashboard()
    {
        $user = Auth::user();
        if ($user->set == 0) {
            return view('user.registration-page', [
                'user' => $user,
            ]);
        } else {
            return view('user_dashboard.user_dashboard', [
                'user' => $user,
            ]);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'domain' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'logo' => ['max:10000|mimes:jpg,png,jpeg,PNG'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'photo'  => ['max:10000|mimes:jpg,png,jpeg,PNG'],
            'address' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            //'city' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string'],
            'webpage' => ['string', 'max:255'],

        ]);
        //dd($request->all());

        $user = Auth::user();
        $id = Application::create([
            'user_id' => $user->id,
            'domain' => request('domain'),
            'company_name' => request('company_name'),
            'logo' => request('logo'),
            'phone' => request('phone'),
            'gender' => request('gender'),
            'dob' => request('dob'),
            'occupation' => request('occupation'),
            'photo' => request('photo'),
            'address' => request('address'),
            'country' => request('country'),
            'state' => request('state'),
            'district' => request('district'),
            'webpage' => request('webpage'),
            'app_id' => "AR/STARTUP/REG/",
            'set' => 1,

        ]);
        
        if ($request->hasFile('logo')) {
            $filename = $request->logo->getClientOriginalName();
            //$imagePath = $request->logo->storeAs('public/User_Details/Company_logo', $filename);
            $imagePath = $request->file('logo')->storeAs('User_Details/Company_logo/',$filename,'public');  
            $id->logo = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('photo')) {
            $filename = $request->photo->getClientOriginalName();
            //$imagePath = $request->photo->storeAs('public/User_Details/User_Photo', $filename);
            $imagePath = $request->file('photo')->storeAs('User_Details/User_Photo/',$filename,'public');
            $id->photo ='/storage/'.$imagePath;
            $id->save();
        }

        $idd = (string)$id->app_id . (string)$id->id;
        $id->update([
            'app_id' => $idd,

        ]);
        $user->update([
            'set' => 1,
        ]);
        Auth::logout();
        return view('user.login', [
            'success' => 'Registered Successfully!!! Your Registration no. is ' . $idd
        ]);
    }


    public function show(Application $application)
    {
        //
    }


    public function edit(Application $application)
    {
        //
    }


    public function update(Request $request, Application $application)
    {
        //
    }


    public function destroy(Application $application)
    {
        //
    }
}
