<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::all();

        $data = [
            'users' => $users
        ]; 
            
        $pdf = Pdf::loadView('exports.employeeList', $data);
     
        return $pdf->download('cocosor.pdf');
    }
}
