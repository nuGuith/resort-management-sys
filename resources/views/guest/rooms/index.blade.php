@extends('admin.default')

@section('page-header')
    Guest <small>ROOMS</small>
@endsection

@section('content')

	<div class="mB-20"> 
        <a href="{{ url('/admin/viewrooms') }}" class="btn btn-info">
        	VIEW ROOMS
        </a>
    </div>

   <table>
   		<tr>
	        <td style="width: 40%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/room1.png') }}"><br><br>
	            </div>
	        </td>
	        <td style="width: 50%">
	            <label id="room1" class="text-normal text-dark" style="margin-left: 5%">
                    <em>
						ROOM 1
					</em>
                </label>
	        </td>
	    </tr>
	    <tr>
	        <td style="width: 40%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/room2.png') }}"><br><br>
	            </div>
	        </td>
	        <td style="width: 50%">
	            <label id="room2" class="text-normal text-dark" style="margin-left: 5%">
					<em>
						ROOM 2
					</em>
                </label>
	        </td>
	    </tr>
	    <tr>
	        <td style="width: 40%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/room3.png') }}"><br><br>
	            </div>
	        </td>
	        <td style="width: 50%">
	            <label id="room3" class="text-normal text-dark" style="margin-left: 5%">
					<em>
						ROOM 3
					</em>
                </label>
	        </td>
	    </tr>
	    <tr>
	        <td style="width: 40%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/room4.png') }}"><br><br>
	            </div>
	        </td>
	        <td style="width: 50%">
	            <label id="room4" class="text-normal text-dark" style="margin-left: 5%">
					<em>
						ROOM 4
					</em>
                </label>
	        </td>
	    </tr>
   </table>

   <style type="text/css">
   		.room-image
   		{
   			border-radius: 8px;
   			box-shadow: 10px 10px 5px grey;
   		}
   </style>

@endsection