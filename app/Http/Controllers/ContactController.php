<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function (Request $request)
    {
       // validate contact request
       $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'message'    => 'required|string',
        ]);

        // check user input
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // send contact request
        Mail::to('ralph@thestartupgroup.net')->send(new SendContactRequest($request->email, $request->first_name, $request->last_name, $request->company, $request->message));

        return redirect()->back();
    }
}
