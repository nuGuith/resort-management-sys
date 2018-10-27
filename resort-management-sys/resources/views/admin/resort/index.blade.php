@extends('layouts.master')

@section('page-header')
    Admin <small>RESORT</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="" class="btn btn-info" data-toggle="modal" data-target="#modalAddArea">
            Add New Area
        </a>
    </div>

	<div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Area Name</th>
                    <th>Area Description</th>
                    <th style="width: 10%">Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($areas as $area)
                    <tr>
                        <td>{{ $area -> id }}</td>
                        <td>{{ $area -> area_name }}</td>
                        <td>{{ $area -> description }}</td>
                        <td><a href="" class="btn cur-p btn-info" data-toggle="modal" data-target="#modalViewImage">View Image</a></td>
                        <td>
                        	<a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                        	<a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5" data-id="{{ $area -> id}}"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

    <!-- MODAL FOR ADDING AREA -->
        <div class="modal fade" id="modalAddArea" tabindex="-1" role="dialog" aria-labelledby="modalAddAreaLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
             <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="modalVAddAreaLabel">Add New Area</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                {!! Form::open(array('id' => 'addForm', 'url' => '/admin/resort', 'action' => 'ResortController@store', 'method' => 'POST')) !!}
                    <div class="modal-body">

                       <div class="form-group">
                            <label for="area-name" class="text-normal text-dark">Area Name:</label><br>
                            <input id="area-name" type="text" class="form-control" name="area_name" value="" required="" autofocus=""><br>

                            <label for="area-desc" class="text-normal text-dark">Area Description:</label>
                            <textarea id="area-desc"class="form-control" name="area_desc" value="" required="" autofocus=""></textarea><br>

                            <label for="area-pic" class="text-normal text-dark">Add Picture:</label><br>
                            <input id="area-pic" type="text" class="form-control" name="area_pic" value="" autofocus=""><br>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn cur-p btn-success">SAVE</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                    </div>
                {!! Form::close() !!}
             </div>
          </div>
       </div>
    <!-- END OF MODAL -->

    <!-- MODAL FOR IMAGE VIEWING -->
    <div class="modal fade" id="modalViewImage" tabindex="-1" role="dialog" aria-labelledby="modalViewImageLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalViewImageLabel">Room</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

               <img src="{{ asset('images/house.jpg') }}">

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->

@endsection