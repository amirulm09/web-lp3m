<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeeklyController extends Controller
{
    public function viewWeekly (Request $request)
    {
        return view('app.weekly');
    }
}
