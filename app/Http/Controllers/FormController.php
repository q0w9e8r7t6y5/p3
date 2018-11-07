<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function search()
    {
        return view('welcome');
    }

    /**
     * GET
     * /books/search-process
     * Process the form to search for a book
     */
    public function searchProcess(Request $request)
    {
//        dump($_GET);

        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|digits:10',
        ]);
        # Code to process the form will go here...
    }
}

