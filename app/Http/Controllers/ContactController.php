<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function contact () {
    return view('contact');
  }

  public function store (Request $request) {
    $formFields = $request->validate([
      "name" => "required|max:20|min:5",
      "email" => "required|email",
      "subject" => "min:1|max:100",
      "body" => "required|min:5|max:200"
    ]);
    
    \App\Models\Contact::create($formFields);

    return redirect('/contact')->with('message', 'Message sent successfuly!');
  }
}
