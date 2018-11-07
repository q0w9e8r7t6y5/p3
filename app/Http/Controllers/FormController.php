<?php

namespace App\Http\Controllers;

use Validator;
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
//    public function searchProcess(Request $request)
//    {
////        dump($_GET);
//
//        $request->validate([
//            'email' => 'required|email',
//            'firstname' => 'required|alpha',
//            'lastname' => 'required|alpha',
//            'phone' => 'required|digits:10',
//        ]);
//
////        if ($request->validate->passes()) {
////            return "SUCCESSFUL";
////            # Code to process the form will go here...
////        };
//    }
//}

    public function searchProcess(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|email',
//            'firstname' => 'required|alpha',
//            'lastname' => 'required|alpha',
//            'phone' => 'required|digits:10',
//        ]);

//        if ($validator->fails()) {
//            return redirect('welcome')
//                ->withErrors($validator)
//                ->withInput();
//        }

        // Store the blog post...
//    }

        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|digits:10',
        ]);

//        if ($validator->fails()) {
//            return view('welcome')->withErrors($validator); // <----- Send the validator here
//        } else {
//            return "Thank you!";
//        }
//        if ($errors == 0){
//            return redirect('/orderpage');
//        }
//        else {
//            break;
//        }
    }
}

