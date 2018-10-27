<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

use App\Prices; //name ng model

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = DB::table('reservation_type')
            ->where('isDeleted', 0)
            ->get();
        return view ('admin.reservation_rates.index', compact('prices'));
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
        Prices::create
        ([
            'name' => trim($request->reservation_type),
            'reservation_rate' => trim($request->reservation_rate),
            'description' => trim($request->reservation_desc),
        ]);

        DB::commit();
        
        return redirect('/admin/m/prices');
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
        $price = Prices::findOrFail($id);
        return response()->json(compact('price'));
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
        DB::table('reservation_type')
            ->where('id', $request->price_id)
            ->update(['name'=>$request->reservation_type, 'reservation_rate'=>$request->reservation_rate, 'description'=>$request->reservation_desc]);
            return redirect('/admin/m/prices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('reservation_type')
            ->where('id', $id)
            ->update(['isDeleted' => 1]);
    }
}

