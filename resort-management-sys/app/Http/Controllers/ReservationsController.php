<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
        return view('admin.reservations.index');
    }

    public function create()
    {
        return view('admin.reservations.create');
    }
}
