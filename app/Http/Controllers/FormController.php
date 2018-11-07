<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function searchProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|digits:10',
        ]);

        return redirect()->action('OrderController@index');
    }
}

