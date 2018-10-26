@extends('admin.layout.default')

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
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="{{ url('/admin/view/reservation') }}" class="btn cur-p btn-info">View</a></td>
                    <td></td>
                    <td></td>
                    <td>
                    	<a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                    	<a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        
        </table>
    </div>

@endsection