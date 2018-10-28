<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = DB::table('message_header as h')
            ->join('message as m', 'h.id', '=', 'm.header_id')
            ->where(['m.header_id' => 1])
            ->orderBy('m.id', 'asc')
            ->get();
        //dd($messages);
        return view('guest.messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = DB::table('message_header as h')
            ->join('message as m', 'h.id', 'm.header_id')
            ->where('h.from_id', $id)
            ->get();
            return response()->json(compact('message'));
    }
}
