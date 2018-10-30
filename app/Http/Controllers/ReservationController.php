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
        $reservations = DB::table('reservation as rv')
            ->join('users as u', 'rv.customer_id', '=', 'u.id')
            ->join('reservation_type as rt', 'rv.reservation_type_id', '=', 'rt.id')
            ->where(['rv.isDeleted' => 0, 'u.id' => auth()->user()->id])
            ->select('rv.id as r_id', 'rt.name as r_name', 'rv.*', 'u.*')
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

    public function show($id)
    {
        $reservations = DB::table('reservation')
            ->rightJoin('users', 'reservation.customer_id', '=', 'users.id')
            ->join('reservation_type', 'reservation_type.id', '=', 'reservation.reservation_type_id')
            ->where(['reservation.id' => $id, 'reservation.isDeleted' => 0])
            ->select('reservation_type.name as rtype', 'users.*', 'reservation.*')
            ->first();
        
        return view('guest.reservation.show', compact('reservations'));
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
            'total_amount_due' => trim($request->amount_),
            'note' => trim($request->notes),
        ]);

        DB::commit();

        //dd($request->all());
        
        return redirect('/guest/reservation');
    }

    public function destroy($id)
    {
        DB::table('reservation')
            ->where('id', $id)
            ->update(['isDeleted' => 1]);
    }
}
