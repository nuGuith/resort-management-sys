@extends('layouts.master')

@section('page-header')
    Admin <small>RESORT</small>
@endsection

@section('content')

	<div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Area Name</th>
                    <th>Area Description</th>
                    <!-- <th style="width: 10%">Picture</th>
                    <th>Actions</th> -->
                </tr>
            </thead>
            
            <tbody>
                @foreach($areas as $area)
                    <tr>
                        <td>{{ $area -> id }}</td>
                        <td>{{ $area -> area_name }}</td>
                        <td>{{ $area -> description }}</td>
                        <!-- <td><a href="" class="btn cur-p btn-info" data-toggle="modal" data-target="#modalViewImage">View Image</a></td>
                        <td>
                        	<a onClick="editModal({{ $area->id }})" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                            <a onClick="deleteRow({{ $area->id }})" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                        </td> -->
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection