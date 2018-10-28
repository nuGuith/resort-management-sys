<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 0)
            return view('guest.schedule.index');
        else
            return view('admin.schedule.index');
    }
}
