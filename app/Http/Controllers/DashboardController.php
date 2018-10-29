<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
//=======
use Auth;
//>>>>>>> e3bd6f6b4bb36427a125bd03a9dc913c4b56c3ea

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

    public function messages()
    {
        return view('guest.messages.index');
 }
// <<<<<<< HEAD
// ======
// >>>>>>> e3bd6f6b4bb36427a125bd03a9dc913c4b56c3ea
//   = 
    public function schedule()
    {
        if(Auth::user()->role === 10)
            return view('admin.schedule.index');
        else
            return view('guest.schedule.index');
    }
}
