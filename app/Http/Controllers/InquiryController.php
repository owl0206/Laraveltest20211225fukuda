<?php

namespace App\Http\Controllers;

use App\Models\inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, inquiry::$rules);
        $form = $request->all();
        inquiry::create($form);
        return view('/thanks');
    }
    public function thanks()
    {
        return view('/thanks');
    }
}
