@extends('layouts.master')

@section('page-header')
    Guest <small>NEW RESERVATION</small>
@endsection

@section('content')

    {!! Form::open(array('id' => 'addForm', 'url' => 'admin/reservation', 'action' => 'ReservationController@store', 'method' => 'POST')) !!}
        <table style="width: 100%">
            <td style="width: 40%">
                <div class="form-group">
                    <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label>
                    <select id="reservation-type" class="form-control" name="reservation_type" value="" required="" autofocus="">
                    
                    <option>&nbsp;</option>
                    @foreach($rtype as $rt)
                        <option value="{{ $rt -> id }}">{{ $rt -> name }}</option>
                    @endforeach
                    </select><br>

                    <label for="rooms" class="text-normal text-dark">Rooms:</label>
                    <select multiple="" id="rooms" class="form-control select2" name="rooms[]" value="" required="" autofocus="">
                        <option>&nbsp;</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room -> id }}">{{ $room -> room_name }}</option>
                        @endforeach
                    </select>
                    <br>

                    <label for="date-starts" class="text-normal text-dark">Date Starts:</label><br>
                    <input id="date-starts" type="date" class="form-control" name="date_starts" value="" required="" autofocus="" style="display: inline; width: 50%">
                    <input id="time-starts" type="time" class="form-control" name="time_starts" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                    <label for="date-ends" class="text-normal text-dark">Date Ends:</label><br>
                    <input id="date-ends" type="date" class="form-control" name="date_ends" value="" required="" autofocus="" style="display: inline; width: 50%">
                    <input id="time-ends" type="time" class="form-control" name="time_ends" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                    <label for="people" class="text-normal text-dark">Number of People:</label>
                    <input id="people" type="number" class="form-control" name="people" value="" required="" autofocus=""><br>

                    <label for="amount" class="text-normal text-dark">Total Amount:</label>
                    <input id="amount" type="text" class="form-control" name="amount" value="0.00" required="" autofocus="" disabled=""><br>

                    <label for="downpayment" class="text-normal text-dark">Downpayment:</label>
                    <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled=""><br>

                    <label for="notes" class="text-normal text-dark">Notes:</label>
                    <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus="">
                    </textarea><br>

                    <div align="right">
                        <button class="btn cur-p btn-success">RESERVE</button>
                        <a href="{{ url('/guest/reservation') }}" class="btn cur-p btn-danger">CANCEL</a>
                        <input type="hidden" id="reservation-id" name="reservation_id">
                    </div>
                </div>
            </td>

            <td style="width: 5%"></td>

            <td>
                <div class="form-group">
                    <!-- <img src="{{ asset('images/room2.png') }}"><br><br> -->

                    <label for="reservation-type" class="text-normal text-dark"><strong>Reservation Types</strong></label><br>

                    <label for="event-reservation" class="text-normal text-dark">Event</label><br>
                    <label id="event-reservation" class="text-normal text-dark" style="margin-left: 5%">
                        <em>
                            Regular Rate - 25,000php<br>
                            Maximum Guests - 30 persons<br>
                            Additional Guest - 350/head
                        </em>
                    </label><br>

                    <label for="stay-in-reservation" class="text-normal text-dark">Stay-In</label><br>
                    <label id="stay-in-reservation" class="text-normal text-dark" style="margin-left: 5%">
                        <em>
                            Regular Rate - 15,000php<br>
                            Maximum Guests - 15 persons<br>
                            Additional Guest - 250/head
                        </em>
                    </label><br>
                    
                    <label for="pool-reservation" class="text-normal text-dark">Pool</label><br>
                    <label id="pool-reservation" class="text-normal text-dark" style="margin-left: 5%">
                        <em>
                            Regular Rate - 6,000php<br>
                            Maximum Guests - 15 persons<br>
                            Additional Guest - 200/head
                        </em>
                    </label><br>

                    <label for="policies-reservation" class="text-normal text-dark"><strong>Reservation Policies</strong></label><br>
                    <label id="policies-reservation" class="text-normal text-dark" style="margin-left: 5%">
                        <em>
                            Each reservation comes with a free room. Additional rooms will cost 1,500php each.
                        </em>
                    </label><br><br>
                </div>
            </td>
        </table>
    {!! Form::close() !!}

@endsection