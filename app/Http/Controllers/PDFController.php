<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
       // dd(request()->all());
        $data = [
            'title' => 'Welcome to StartUp Arunnachal Pradesh',
            'date' => date('m/d/Y')            
        ];
          
        $pdf = PDF::loadView('Admin/Startup_Application/users_details', $data);
    
        return $pdf->download('ApStartup.pdf');
    }
}
