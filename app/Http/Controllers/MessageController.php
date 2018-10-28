<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $header = DB::table('message_header as h')
            ->join('message as m', 'h.id', '=', 'm.header_id')
            ->where(['m.user_id' => $id])
            ->first();
        if(is_null($header)){
            $header = new Message;
            $header->header_id = 0;
        }
        $messages = DB::table('message_header as h')
            ->join('message as m', 'h.id', '=', 'm.header_id')
            ->where(['m.header_id' => $header->header_id])
            ->orderBy('m.id', 'asc')
            ->get();
        $header_id = $header->header_id;
        return view('guest.messages.index', compact('messages', 'header_id'));
    }

    public function show($id)
    {
        $message = DB::table('message_header as h')
            ->join('message as m', 'h.id', 'm.header_id')
            ->where('h.from_id', $id)
            ->get();
        return response()->json(compact('message'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        DB::table('message')->insert(
            ['header_id' => $request->header_id, 'content' => $request->message, 'user_id' => $id]
        );
    }
}
