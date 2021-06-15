<?php

namespace App\Http\Controllers;
use App\Models\sectionc;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Validator;
use Auth;

class SectioncController extends Controller
{
    public function storesectionc(Request $request)
    {

        $validatedData = $request->validate([
            'final_product' => ['required', 'string', 'max:255'],
            'about_idea' => ['required', 'string', 'max:1200'],
            'problem' => ['required', 'string', 'max:1200'],
            'solution' => ['required', 'string', 'max:1200'],
            'uniqueness' => ['required', 'string', 'max:1200'],
            'innovative' => ['required', 'string', 'max:1200'],
            'business_model' => ['required', 'string', 'max:1200'],
            'revenue_model' => ['required', 'string', 'max:1200'],
            'employment' => ['required', 'string', 'max:255'],
            'stage' => ['required', 'string', 'max:255'],

            'patent' => ['required', 'string', 'max:255'],
            //'patent_certf' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,

            'awards' => ['required', 'string', 'max:255'],
            'awards_describe' => ['required', 'string', 'max:255'],
            //'awards_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,

            'fund' => ['required', 'string', 'max:255'],
            'fund_describe'  => ['required', 'string', 'max:255'],
            //'fundings_certificate ' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,

            'incu'  => ['required', 'string', 'max:255'],
            'incu_dec'  => ['required', 'string', 'max:255'],
            'incu_period'  => ['required', 'string', 'max:255'],

            //'moa ' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            //'businessplan' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            //'financialproject' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            //'pitchdeck' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
            'websitelink'  => ['required', 'string', 'max:255'],
            'videolink'  => ['required', 'string', 'max:255'],
            //'othercrt' => 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048' ,
        ]);

        $user = Auth::user();
        $id = sectionc::create([
            'user_id' => $user->id,
            'final_product' => request('final_product'),
            'about_idea' => request('about_idea'),
            'problem' => request('problem'),
            'solution' => request('solution'),
            'uniqueness' => request('uniqueness'),
            'innovative' => request('innovative'),
            'business_model' => request('business_model'),
            'revenue_model' => request('revenue_model'),
            'employment' => request('employment'),
            'stage' => request('stage'),

            'patent' => request('patent'),

            'awards' => request('awards'),
            'awards_describe' => request('awards_describe'),

            'fund' => request('fund'),
            'fund_describe' => request('fund_describe'),           
            

            'incu' => request('incu'), 
            'incu_dec' => request('incu_dec'),           
            'incu_period' => request('incu_period'), 
            
            
            'websitelink' => request('websitelink'),           
            'videolink' => request('videolink'),           
            
        ]);

        //dd($request->all());
        // $sectioncdata = new sectionc;
        // $sectioncdata->final_product = $request->final_product;
        // $sectioncdata->about_idea = $request->about_idea;
        // $sectioncdata->problem = $request->problem;
        // $sectioncdata->solution = $request->solution;
        // $sectioncdata->uniqueness = $request->uniqueness;
        // $sectioncdata->innovative = $request->innovative;
        // $sectioncdata->business_model = $request->business_model;
        // $sectioncdata->revenue_model = $request->revenue_model;
        // $sectioncdata->employment = $request->employment;
        // $sectioncdata->stage = $request->stage;

        // $sectioncdata->patent = $request->patent;

        // $sectioncdata->awards = $request->awards;
        // $sectioncdata->awards_describe = $request->awards_describe;   

        // $sectioncdata->fund = $request->fund;
        // $sectioncdata->fund_describe = $request->fund_describe;

        // $sectioncdata->incu = $request->incu;
        // $sectioncdata->incu_dec = $request->incu_dec;
        // $sectioncdata->incu_period = $request->incu_period;
         
        // $sectioncdata->websitelink = $request->websitelink;
        // $sectioncdata->videolink = $request->videolink;



        if ($request->hasFile('patent_certf')) {
            $filename = $request->patent_certf->getClientOriginalName();
            //$imagePath1 = $request->patent_certf->storeAs('public/section_c/patent_certificate', $filename1);
            $imagePath = $request->file('patent_certf')->storeAs('section_c/patent_certificate/',$filename,'public');  
            //$id->patent_certf = $imagePath1;
            $id->patent_certf = '/storage/'.$imagePath;
            $id->save();
        }
           
        if ($request->hasFile('awards_certificate')) {
            $filename = $request->awards_certificate->getClientOriginalName();
            //$imagePath = $request->awards_certificate->storeAs('public/section_c/awards_certificate', $filename2);
            $imagePath = $request->file('awards_certificate')->storeAs('section_c/awards_certificate/',$filename,'public');  
            //$id->awards_certificate = $imagePath2;
            $id->awards_certificate = '/storage/'.$imagePath;
            $id->save();
        }
        if ($request->hasFile('fund_certificate')) {
            $filename = $request->fund_certificate->getClientOriginalName();
           // $imagePath = $request->fund_certificate->storeAs('public/section_c/fundings_certificate', $filename);
           $imagePath = $request->file('fund_certificate')->storeAs('section_c/fundings_certificate/',$filename,'public');  
            //$id->fund_certificate = $imagePath3;
            $id->fund_certificate = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('moa')) {
            $filename4 = $request->moa->getClientOriginalName();
           // $imagePath4 = $request->moa->storeAs('public/section_c/MOA', $filename4);
           $imagePath = $request->file('moa')->storeAs('section_c/MOA/',$filename,'public');  
            //$id->moa = $imagePath4;
            $id->moa = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('businessplan')) {
            $filename5 = $request->businessplan->getClientOriginalName();
           // $imagePath5 = $request->businessplan->storeAs('public/section_c/business_plan_template', $filename5);
           $imagePath = $request->file('businessplan')->storeAs('section_c/business_plan_template/',$filename,'public');  
           // $id->businessplan = $imagePath5;
           $id->businessplan = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('financialproject')) {
            $filename6 = $request->financialproject->getClientOriginalName();
            //$imagePath6 = $request->financialproject->storeAs('public/section_c/financial_project_sheet', $filename6);
           $imagePath = $request->file('financialproject')->storeAs('section_c/financial_project_sheet/',$filename,'public');  
            //$id->financialproject = $imagePath6;
           $id->financialproject = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('pitchdeck')) {
            $filename7 = $request->pitchdeck->getClientOriginalName();
            //$imagePath7 = $request->pitchdeck->storeAs('public/section_c/pitch_deck', $filename7);
           $imagePath = $request->file('pitchdeck')->storeAs('section_c/pitch_deck/',$filename,'public');  
            //$id->pitchdeck = $imagePath7;
           $id->pitchdeck = '/storage/'.$imagePath;
            $id->save();
        }

        if ($request->hasFile('othercrt')) {
            $filename8 = $request->othercrt->getClientOriginalName();
           // $imagePath8 = $request->othercrt->storeAs('public/section_c/other_crt', $filename8);
           $imagePath = $request->file('othercrt')->storeAs('section_c/other_crt/',$filename,'public');  
           // $id->othercrt = $imagePath8;
           $id->othercrt = '/storage/'.$imagePath;
            $id->save();
        }
      
        //$sectioncdata->save();
        return redirect()->back();
        

    }
}
