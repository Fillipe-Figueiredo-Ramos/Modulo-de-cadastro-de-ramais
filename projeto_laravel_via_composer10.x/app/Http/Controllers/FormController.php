<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function RenderForm(Request $request) {
        
        return view('Form');
    }
}