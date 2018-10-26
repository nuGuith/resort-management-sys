<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('guest.reservation.index');
    }

    public function create()
    {
        return view('guest.reservation.create');
    }
}
