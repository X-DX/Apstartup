<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sectionb;
use App\Models\User;
use DB;
use Validator;
use Auth;

class SectionbController extends Controller
{

    public function storesectionb(Request $request)
    {

        $validatedData = $request->validate([
            'dpiit_radiobox' => ['required', 'string', 'max:255'],
            'dpittno' => ['required','string', 'max:255'],
            //'dpittcr' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048'
            'nameentity' => ['required', 'string', 'max:255'],
            'legalentity' => ['required', 'string', 'max:255'],
            'cin' => ['required', 'string', 'max:255'],
            'incorporationdate' => ['required', 'string', 'max:255'],
            //'incorporationcertificate' =>  'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'pan' => ['required', 'string', 'max:255'],
            //'copypan' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            'gst' => ['required', 'string', 'max:255'],
            //'copygst' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            'aadhaar' => ['required', 'string', 'max:255'],
            // 'copyaadhaar' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',

            'roadd1' => ['required', 'string', 'max:255'],
            'roadd2' => ['string', 'max:255'],
            'rocity' => ['required', 'string', 'max:255'],
            'rodistrict' => ['required', 'string', 'max:255'],
            'rostate' => ['required', 'string', 'max:255'],
            'ropincode' => ['required', 'string', 'max:255'],


            'hoadd1' => ['required', 'string', 'max:255'],
            'hoadd2' => ['string', 'max:255'],
            'hocity' => ['required', 'string', 'max:255'],
            'hodistrict' => ['required', 'string', 'max:255'],
            'hostate' => ['required', 'string', 'max:255'],
            'hopincode' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],

            'nofounder' => ['required', 'string', 'max:255'],
            // 'sharecer' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048', 
            'noofemployees' => ['required', 'string', 'max:255'],
            // 'declaration' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048', 

            'checkbox_terms' => 'accepted',

        ]);
        //dd($request->all());
        $user = Auth::user();
        $id = sectionb::create([
            'user_id' => $user->id,
            'dpiit_radiobox' => request('dpiit_radiobox'),
            'dpittno' => request('dpittno'),
            'nameentity' => request('nameentity'),
            'legalentity' => request('legalentity'),
            'cin' => request('cin'),
            'incorporationdate' => request('incorporationdate'),
            'pan' => request('pan'),
            'gst' => request('gst'),
            'aadhaar' => request('aadhaar'),

            'roadd1' => request('roadd1'),
            'roadd2' => request('roadd2'),
            'rocity' => request('rocity'),
            'rodistrict' => request('rodistrict'),
            'rostate' => request('rostate'),
            'ropincode' => request('ropincode'),
            
            

            'hoadd1' => request('hoadd1'), 
            'hoadd2' => request('hoadd2'),           
            'hocity' => request('hocity'),           
            'hodistrict' => request('hodistrict'),           
            'hostate' => request('hostate'),           
            'hopincode' => request('hopincode'),           
            'sector' => request('sector'),           
            'industry' => request('industry'),
            
            'nofounder' => request('nofounder'),           
            'noofemployees' => request('noofemployees'),           
            
        ]);

        
        // $sectionbdata = new sectionb;
        // $sectionbdata = $user->id;
        // $sectionbdata->dpiit_radiobox = $request->dpiit_radiobox;
        // $sectionbdata->dpittno = $request->dpittno;
        // $sectionbdata->nameentity = $request->nameentity;
        // $sectionbdata->legalentity = $request->legalentity;
        // $sectionbdata->cin = $request->cin;
        // $sectionbdata->incorporationdate = $request->incorporationdate;
        // $sectionbdata->pan = $request->pan;
        // $sectionbdata->gst = $request->gst;
        // $sectionbdata->aadhaar = $request->aadhaar;

        // $sectionbdata->roadd1 = $request->roadd1;
        // $sectionbdata->roadd2 = $request->roadd2;
        // $sectionbdata->rocity = $request->rocity;
        // $sectionbdata->rodistrict = $request->rodistrict;
        // $sectionbdata->rostate = $request->rostate;
        // $sectionbdata->ropincode = $request->ropincode;


        // $sectionbdata->hoadd1 = $request->hoadd1;
        // $sectionbdata->hoadd2 = $request->hoadd2;
        // $sectionbdata->hocity = $request->hocity;
        // $sectionbdata->hodistrict = $request->hodistrict;
        // $sectionbdata->hostate = $request->hostate;
        // $sectionbdata->hopincode = $request->hopincode;
        // $sectionbdata->sector = $request->sector;
        // $sectionbdata->industry = $request->industry;

        // $sectionbdata->nofounder = $request->nofounder;
        // $sectionbdata->noofemployees = $request->noofemployees;

        

        if ($request->hasFile('dpittcr')) {
            $filename = $request->dpittcr->getClientOriginalName();
            //$imagePath = $request->dpittcr->storeAs('public/section_b/DPIIT_certificate', $filename);
            $imagePath = $request->file('dpittcr')->storeAs('section_b/DPIIT_certificate/',$filename,'public');  
            //$id->dpittcr = $imagePath;
            $id->dpittcr = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('incorporationcertificate')) {
            $filename2 = $request->incorporationcertificate->getClientOriginalName();
            //$imagePath2 = $request->incorporationcertificate->storeAs('public/section_b/Incorporation', $filename2);
            $imagePath = $request->file('incorporationcertificate')->storeAs('section_b/Incorporation/',$filename,'public');  
            //$id->incorporationcertificate = $imagePath2;
            $id->dpittcr = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('copypan')) {
            $filename3 = $request->copypan->getClientOriginalName();
            //$imagePath3 = $request->copypan->storeAs('public/section_b/Copy_of_Pan', $filename3);
            $imagePath = $request->file('copypan')->storeAs('section_b/Copy_of_Pan/',$filename,'public');  
            //$id->copypan = $imagePath3;
            $id->copypan = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('copygst')) {
            $filename4 = $request->copygst->getClientOriginalName();
            //$imagePath4 = $request->copygst->storeAs('public/section_b/Copy_of_GST', $filename4);
            $imagePath = $request->file('copygst')->storeAs('section_b/Copy_of_GST/',$filename,'public');  
            //$id->copygst = $imagePath4;
            $id->copygst = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('copyaadhaar')) {
            $filename5 = $request->copyaadhaar->getClientOriginalName();
            //$imagePath5 = $request->copyaadhaar->storeAs('public/section_b/Copy_of_Aadhar', $filename5);
            $imagePath = $request->file('copyaadhaar')->storeAs('section_b/Copy_of_Aadhar/',$filename,'public');  
            //$id->copyaadhaar = $imagePath5;
            $id->copyaadhaar = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('sharecer')) {
            $filename5 = $request->sharecer->getClientOriginalName();
            //$imagePath5 = $request->sharecer->storeAs('public/section_b/Share_Holding_Certificate', $filename5);
            //$id->sharecer = $imagePath5;
            $imagePath = $request->file('sharecer')->storeAs('section_b/Share_Holding_Certificate/',$filename,'public');
            $id->sharecer = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('declaration')) {
            $filename5 = $request->declaration->getClientOriginalName();
           // $imagePath5 = $request->declaration->storeAs('public/section_b/Copy_of_declaration', $filename5);
            //$id->declaration = $imagePath5;
            $imagePath = $request->file('declaration')->storeAs('section_b/Copy_of_declaration/',$filename,'public');
            $id->declaration = '/storage/'.$imagePath;
            $id->save();
        }


       // $sectionbdata->save();
        return redirect()->back();
        // return view('user_dashboard.apply_for_recognition', [
        //     'success' => 'Section B Data Successfully Save!!! ' ,
        //     'user' => $user,
        // ]);
    }
}
