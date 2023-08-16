<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function downloadResume()
    {

        if (session('download')) {
            $file = public_path('pdfs/PedroLopes_Resume.pdf');
            return response()->download($file);
        }

        return view('thank-you');
    }
}
