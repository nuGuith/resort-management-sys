<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function view()
    {
        $areas = DB::table('area')
            ->where('isDeleted', 0)
            ->get();
        return view ('guest.resort.view', compact('areas'));
    }

    public function rooms()
    {
        return view('guest.rooms.index');
    }

    public function viewrooms()
    {
        $rooms = DB::table('room')
            ->where('isDeleted', 0)
            ->get();
        return view ('guest.rooms.viewrooms', compact('rooms'));
    }

    public function schedule()
    {
        return view('guest.schedule.index');
    }
}
