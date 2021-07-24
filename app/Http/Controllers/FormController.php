<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
