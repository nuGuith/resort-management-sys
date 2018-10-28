<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->role === 10)
            return view('admin.dashboard.index');
        else
            return view('admin.schedule.index');
    }

    public function welcome()
    {
        return view('guest.guest-welcome');
    }

    public function resort()
    {
        return view('guest.resort.index');
    }

    public function rooms()
    {
        return view('guest.rooms.index');
    }

    public function messages()
    {
        return view('guest.messages.index');
    }

    public function schedule()
    {
        if(Auth::user()->role === 10)
            return view('admin.schedule.index');
        else
            return view('guest.schedule.index');
    }
}
