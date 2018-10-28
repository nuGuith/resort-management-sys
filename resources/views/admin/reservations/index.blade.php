@extends('layouts.master')

@section('page-header')
    Admin <small>RESERVATIONS</small>
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th style="width: 10%">Reservation</th>
                    <th>Status</th>
                    <th>Date & Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($reservations as $reservation)
                    <?php
                        $date=explode(' ',$reservation->start_datetime);
                        $time =  explode(':',$date[1]);
                        $edate=explode(' ',$reservation->end_datetime);
                        $etime =  explode(':',$edate[1]);
                    ?>
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation-> name }}</td>
                        <td><a href="{{ route(ADMIN . '.reservations.show', 1) }}" class="btn cur-p btn-info">View</a></td>
                        <td>{{ $reservation->status }}</td>
                        <td>{{ $reservation->start_datetime }} to {{ $reservation->end_datetime }}</td>
                        <td>
                            <a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                            <a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection