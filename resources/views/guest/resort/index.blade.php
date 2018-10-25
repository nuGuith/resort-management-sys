@extends('guest.layout.default')

@section('page-header')
    Guest <small>THE RESORT</small>
@endsection

@section('content')

   <table style="width: 90%">
   		<tr>
	        <td style="width: 45%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/resort/house.png') }}">
	            </div>
	        </td>
	        <td style="width: 45%">
	            <label id="house" class="text-normal text-dark" style="margin-left: 5%">
                    <em>
                        Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each.
                    </em>
                </label>
	        </td>
	    </tr>
	</table>

	<table>
		<tr>
			<td><img class="room-image" src="{{ asset('images/resort/sala1.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/dining.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/sala3.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/terrace.png') }}"></td>
		</tr>
	</table><br><br>

	<table>
   		<tr>
	        <td style="width: 45%">
	            <label id="pavillion" class="text-normal text-dark" style="margin-right: 5%">
                    <em>
                        Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each.
                    </em>
                </label>
	        </td>
	        <td style="width: 45%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/resort/pavillion.png') }}">
	            </div>
	        </td>
	    </tr>

   		<tr>
	        <td style="width: 45%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/resort/pool.png') }}">
	            </div>
	        </td>
	        <td style="width: 45%">
	            <label id="pool" class="text-normal text-dark" style="margin-left: 5%">
                    <em>
                        Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each.
                    </em>
                </label>
	        </td>
	    </tr>

	<table>
		<tr>
			<td><img class="room-image" src="{{ asset('images/resort/pav.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/pool1.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/pool2.png') }}"></td>
			<td style="width: 5%"></td>
			<td><img class="room-image" src="{{ asset('images/resort/pool3.png') }}"></td>
		</tr>
	</table><br><br>

	<table>
   		<tr>
	        <td style="width: 45%">
	            <label id="court" class="text-normal text-dark" style="margin-right: 5%">
                    <em>
                        Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each.
                    </em>
                </label>
	        </td>
	        <td style="width: 45%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/resort/court.png') }}">
	            </div>
	        </td>
	    </tr>

	    <tr>
	        <td style="width: 45%">
	            <div class="form-group">
	                <img class="room-image" src="{{ asset('images/resort/kubo.png') }}">
	            </div>
	        </td>
	        <td style="width: 45%">
	            <label id="kubo" class="text-normal text-dark" style="margin-left: 5%">
                    <em>
                        Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each. Each reservation comes with a free room. Additional rooms will cost 1,500php each.
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