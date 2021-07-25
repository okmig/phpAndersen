<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function showForm () {
        return view('form');
    }

    public function validateForm (Request $request) {
        $validation = $request->validate([
            'name' => 'required|min:1|max:100',
            'email' => 'required|email',
            'message' => 'max:1000'
        ]);
    }

    public function submitForm (Request $request) {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('form');
    }

    public function showData() {
        return view('form', ['data' => Contact::all()]);
    }
}
