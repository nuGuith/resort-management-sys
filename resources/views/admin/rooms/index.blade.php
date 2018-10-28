@extends('layouts.master')

@section('page-header')
    Admin <small>ROOMS</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="" class="btn btn-info" data-toggle="modal" data-target="#modalAddRoom">
            Add New Room
        </a>
    </div>

	<div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Type</th>
                    <th>Room Rate</th>
                    <th style="width: 10%">Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room -> id }}</td>
                        <td>{{ $room -> room_name }}</td>
                        <td>{{ $room -> room_rate }}</td>
                        <td><a href="" class="btn cur-p btn-info" data-toggle="modal" data-target="#modalViewImage">View Image</a></td>
                        <td>
                        	<a onCLick="editModal({{ $room->id }})" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                        	<a onClick="deleteRow({{ $room->id }})" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

     <!-- MODAL FOR EDITING ROOM-->
     <div class="modal fade" id="modalEditRoom" tabindex="-1" role="dialog" aria-labelledby="modalEditRoomLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalEditRoomLabel">Edit Room Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            
            {!! Form::open(array('id' => 'editForm', 'url' => '/admin/m/rooms', 'action' => 'RoomsController@update', 'method' => 'PUT')) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room-type" class="text-normal text-dark">Room Type:</label><br>
                        <input id="room-type" type="text" class="form-control" name="room_type" value="" required="" autofocus=""><br>

                        <label for="room-rate" class="text-normal text-dark">Room Rate:</label><br>
                        <input id="room-rate" type="number" class="form-control" name="room_rate" value="" required="" autofocus=""><br>

                        <label for="room-desc" class="text-normal text-dark">Room Description:</label>
                        <textarea id="room-desc"class="form-control" name="room_desc" value="" required="" autofocus=""></textarea><br>
                    </div>

                    <div class="form-group">
                        <label for="room-pic" class="text-normal text-dark">Add Picture:</label><br>
                        <input id="room-pic" type="text" class="form-control" name="room_pic" value="" autofocus=""><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn cur-p btn-success">SAVE</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                    <input type="hidden" id="room-id" name="room_id">
                </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->

    <!-- MODAL FOR ADDING NEW ROOM-->
    <div class="modal fade" id="modalAddRoom" tabindex="-1" role="dialog" aria-labelledby="modalAddRoomLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalAddRoomLabel">Add New Room</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            
            {!! Form::open(array('id' => 'addForm', 'url' => 'admin/m/rooms', 'action' => 'RoomsController@store', 'method' => 'POST')) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room-type" class="text-normal text-dark">Room Type:</label><br>
                        <input id="room-type" type="text" class="form-control" name="room_type" value="" required="" autofocus=""><br>

                        <label for="room-rate" class="text-normal text-dark">Room Rate:</label><br>
                        <input id="room-rate" type="number" class="form-control" name="room_rate" value="" required="" autofocus=""><br>

                        <label for="room-desc" class="text-normal text-dark">Room Description:</label>
                        <textarea id="room-desc"class="form-control" name="room_desc" value="" required="" autofocus=""></textarea><br>
                    </div>

                    <div class="form-group">
                        <label for="room-pic" class="text-normal text-dark">Add Picture:</label><br>
                        <input id="room-pic" type="text" class="form-control" name="room_pic" value="" autofocus=""><br>
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

               <img src="{{ asset('images/room1.jpg') }}">

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->
   
   <script type="text/javascript" src="{{URL('js/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{URL('js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="{{URL('js/tether.min.js')}}"></script>
   <script type="text/javascript" src="{{URL('js/bootstrap.min.js')}}"></script>
   <script>
        function editModal(id)
        {
            $.ajax({
                type: "GET",
                url: "/admin/m/rooms/" + id + "/edit",
                dataType: "JSON",
                success:function(data)
                {
                    $("#room-type").val(data.room.room_name);
                    $("#room-rate").val(data.room.room_rate);
                    $("#room-desc").val(data.room.description);
                    $("#room-id").val(id);
                }
            });
            $('#modalEditRoom').modal('show');
        }

        function deleteRow(id)
        {
            $.ajax({
                type: "GET",
                url: "/admin/m/rooms/" + id + "/delete",
                success:function(data)
                {
                    location.reload(true);
                }
            });
        }
   </script>

@endsection