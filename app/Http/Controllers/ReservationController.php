<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

use App\Reservations;
use App\RoomReservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = DB::table('reservation')
            ->where('customer_id', auth()->user()->id)
            ->where('isDeleted', 0)
            ->get();

        return view('guest.reservation.index', compact('reservations'));
    }

    public function create()
    {
        $rtype = DB::table('reservation_type')
            ->where('isDeleted', 0)
            ->get();

        $rooms = DB::table('room')
            ->where('isDeleted', 0)
            ->get();
        
        return view('guest.reservation.create', compact('rtype', 'rooms'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        Reservations::create
        ([
            'customer_id' =>auth()->user()->id,
            'reservation_type_id' => trim($request->reservation_type),
            'no_of_rooms' => 4,
            'status' => 'PENDING',
            'start_datetime' => $request->date_starts.' '.$request->time_starts,
            'end_datetime' => $request->date_ends.' '.$request->time_ends,
            'no_of_guests' => trim($request->people),
            'total_amount_due' => trim($request->amount),
            'note' => trim($request->notes),
        ]);

        DB::commit();

        //dd($request->all());
        
        return redirect('/admin/reservation');
    }

    public function destroy($id)
    {
        DB::table('reservation')
            ->where('id', $id)
            ->update(['isDeleted' => 1]);
    }
}
