<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function downloadResume()
    {
        $file = public_path('pdfs/PedroLopes_Resume.pdf');
        return response()->download($file);
    }
}
