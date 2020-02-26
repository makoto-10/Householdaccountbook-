<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseholdAccountbookController extends Controller
{
    public function index()
    {
        return view('HouseholdAccountbook.top');

    }
}
