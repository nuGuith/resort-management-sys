<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

use App\Resort; //name ng model

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = DB::table('area')
            ->where('isDeleted', 0)
            ->get();
        return view ('admin.resort.index', compact('areas'));
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
        Resort::create
        ([
            'area_name' => trim($request->area_name),
            'description' => trim($request->area_desc),
            'image' => trim($request->area_pic),
        ]);

        DB::commit();

        return redirect('/admin/m/resort');
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
        $area = Resort::findOrFail($id);
        return response()->json(compact('area'));
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
        DB::table('area')
            ->where('id', $request->area_id)
            ->update(['area_name'=>$request->area_name, 'description'=>$request->area_desc]);
            return redirect('/admin/m/resort');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('area')
            ->where('id', $id)
            ->update(['isDeleted' => 1]);
    }
}

