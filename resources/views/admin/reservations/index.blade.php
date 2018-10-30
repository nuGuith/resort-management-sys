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
                        $date = explode(' ',$reservation->start_datetime);
                        $time = explode(':',$date[1]);
                        $edate = explode(' ',$reservation->end_datetime);
                        $etime = explode(':',$edate[1]);
                    ?>
                    <tr>
                        <td>{{ $reservation-> r_id }}</td>
                        <td>{{ $reservation-> name }}</td>
                        <td><a href="{{ route(ADMIN . '.reservations.show', $reservation->r_id) }}" class="btn cur-p btn-info">View</a></td>
                        <td>{{ $reservation->status }}</td>
                        <td>{{ date('F d, Y h:iA', strtotime($reservation->start_datetime)) }} to {{ date('F d, Y h:iA', strtotime($reservation->end_datetime)) }}</td>
                        <td>
                            <a href="" class="btn cur-p btn-danger"><i class="c-white-500 ti-trash"></i> Decline</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection