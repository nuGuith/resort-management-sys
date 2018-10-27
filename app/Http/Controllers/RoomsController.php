<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

use App\Rooms; //name ng model

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = DB::table('room')
            ->where('isDeleted', 0)
            ->get();
        return view ('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        Rooms::create
        ([
            'room_name' => trim($request->room_type),
            'room_rate' => trim($request->room_rate),
            'description' => trim($request->room_desc),
            'image' => trim($request->room_pic),
        ]);

        DB::commit();

        return redirect('/admin/m/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Rooms::findOrFail($id);
        return response()->json(compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('room')
            ->where('id', $request->room_id)
            ->update(['room_name'=>$request->room_type, 'room_rate'=>$request->room_rate, 'description'=>$request->room_desc]);
            return redirect('/admin/m/rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('room')
            ->where('id', $id)
            ->update(['isDeleted' => 1]);
    }
}

