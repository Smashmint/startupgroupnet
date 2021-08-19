<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPageController extends Controller
{
    public function newandco()
    {
        return view('pages.companies.newandco');
    }
}
