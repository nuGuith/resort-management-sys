@extends('layouts.master')

@section('page-header')
    Guest <small>RESERVATION</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.reservation.create') }}" class="btn btn-info">
        	New Reservation
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reservation Type</th>
                    <th>Number of Rooms</th>
                    <th>Status</th>
                    <th>Date & Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($reservations as $reservation)
                    
                    <tr>
                        <td>{{ $reservation -> r_id }}</td>
                        <td>{{ $reservation -> r_name }}</td>
                        <td>{{ $reservation -> no_of_rooms }}</td>
                        <td>{{ $reservation -> status }}</td>
                        <td>{{ date('F d, Y h:iA', strtotime($reservation->start_datetime)) }} to {{date('F d, Y h:iA', strtotime($reservation->end_datetime)) }}</td>
                        <td>
                            <a href="{{ route(ADMIN . '.reservation.show', $reservation->r_id) }}" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                            <a onClick="deleteRow({{ $reservation->r_id }})" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                        </td>
                @endforeach
                    </tr>
            </tbody>
        </table>
    </div>

    <!-- MODAL FOR ADDING NEW ROOM-->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalAddRoomLabel" aria-hidden="true">
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

@section('js')
    <script type="text/javascript" src="{{ URL('js/jquery.min.js') }}"></script>
    <script>
        function deleteRow(id)
        {
            $.ajax({
                type: "get",
                url: "/guest/reservation/" + id + "/delete",
                success:function(data)
                {
                    location.reload(true);
                }
            });
        }
   </script>

@endsection
@endsection