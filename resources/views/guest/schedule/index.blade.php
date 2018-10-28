@extends('admin.default')

@section('page-header')
    @if(auth()->user()->role === 0)
        Guest <small>SCHEDULE</small>
    @elseif(auth()->user()->role === 10)
        Admin <small>SCHEDULE</small>
    @endif
@endsection

@section('content')

   	<div class="col-md-12">
        <div id='full-calendar'></div>
    </div>

@endsection