<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    //  موقع ای که فقط یک متد داشته باشه میتونیم اینجوری ینویسیم\
    //  باید اسم متد همین باشه  invoke
    public function __invoke()
    {
        return view('contact');
    }

    // public function index()
    // {
    //     return view('contact');
    // } 
}
