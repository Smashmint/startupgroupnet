<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function (Request $request)
    {
        // process form

        return redirect()->to('contact');
    }
}
