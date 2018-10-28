<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('admin.schedule.index');
    }
}
