<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{   
    // Property
    

    // Method
    public function show(){
        $buttons = [
            'Getting Started',
            'Download',
            'Documentation',
            'Browse Packages',
            'Issues',
            'GitHub'
        ];

        return view('info.index', compact('buttons'));
    }

}
