<?php

namespace App\Http\Controllers;
use App\Models\sectiond;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Validator;
use Auth;


class SectiondController extends Controller
{
    public function storesectiond(Request $request)
    {

        $validatedData = $request->validate([
            'yes_agree' => ['required', 'string', 'max:255'],
            'yes_selfdeclaration' => ['required', 'string', 'max:1200'],
            
        ]);

        $user = Auth::user();
        $id = sectiond::create([
            'user_id' => $user->id,
            'yes_agree' => request('yes_agree'),
            'yes_selfdeclaration' => request('yes_selfdeclaration'),
            
        ]);

        //dd($request->all());
        // $sectionddata = new sectiond;
        // $sectionddata->yes_agree = $request->yes_agree;
        // $sectionddata->yes_selfdeclaration = $request->yes_selfdeclaration;
        // $sectionddata->save();
        return redirect()->back();
        

    }
}
