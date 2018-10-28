<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

use App\Reservations;

class ReservationsController extends Controller
{
    public function index()
    {
        $reservations = DB::table('reservation')
            ->join('users', 'users.id', '=', 'reservation.customer_id')
            ->where('isDeleted', 0)
            ->get();

        return view('admin.reservations.index', compact('reservations'));
    }

    public function show($id)
    {
        $reservations = DB::table('reservation')
            ->join('users', 'users.id', '=', 'reservation.customer_id')
            // ->join('reservation_type', 'reservation_type.id', '=', 'reservation.reservation_type_id')
            ->where(['reservation.id'=>$id], 'isDeleted', 0)
            ->first();

        return view('admin.reservations.show', compact('reservations'));
    }
}
