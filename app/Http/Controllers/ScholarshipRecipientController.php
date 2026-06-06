<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipRecipientController extends Controller
{
    public function index()
    {
        return view('schoolarship.index');
    }
}
