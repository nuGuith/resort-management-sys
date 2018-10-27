<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
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
        if(auth()->user()->role() == 10)
            return view('admin.schedule.index');
        if(auth()->user()->role() == 0)
            return view('guest.schedule.index');
    }
}
