@extends('layouts.master')

@section('page-header')
    Guest <small>NEW RESERVATION</small>
@endsection

@section('content')

    {!! Form::open(array('id' => 'addForm', 'action' => 'ReservationController@store', 'method' => 'POST')) !!}
        <table style="width: 100%">
            <td style="width: 40%">
                <div class="form-group">
                    <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label>
                    <select id="reservation-type" class="form-control" name="reservation_type" value="" required="" autofocus="">
                        <option>&nbsp;</option>
                        @foreach($rtype as $rtype)
                            <option value="{{ $rtype->id }}" data-rate="{{ $rtype->reservation_rate }}" data-max-guest="{{$rtype->max_guest}}" data-priceperhead="{{ $rtype->price_per_head }}">{{ $rtype->name }}</option>
                        @endforeach
                    </select>
                    <br>

                    <label for="rooms" class="text-normal text-dark">Rooms:</label>
                    <select multiple id="rooms" class="form-control select2" name="rooms[]" value="" required="" autofocus="">
                        <option>&nbsp;</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                        @endforeach
                    </select>
                    <br><br>

                    <label for="date-starts" class="text-normal text-dark">Date Starts:</label><br>
                    <input id="date-starts" type="date" class="form-control" name="date_starts" value="" required="" autofocus="" style="display: inline; width: 50%" min="{{ date('Y-m-d') }}">
                    <input id="time-starts" type="time" class="form-control" name="time_starts" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                    <label for="date-ends" class="text-normal text-dark">Date Ends:</label><br>
                    <input id="date-ends" type="date" class="form-control" name="date_ends" value="" required="" autofocus="" style="display: inline; width: 50%" min="{{ date('Y-m-d') }}">
                    <input id="time-ends" type="time" class="form-control" name="time_ends" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                    <label for="people" class="text-normal text-dark">Number of Guests (Max. <span id="max-guests"></span>): </label>
                    <input id="people" type="number" min="1" class="form-control" name="people" value="" required="" autofocus=""><br>

                    <label for="downpayment" class="text-normal text-dark">Downpayment:</label>
                    <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled=""><br>

                    <label for="amount" class="text-normal text-dark">Total Amount:</label>
                    <input id="amount" type="text" class="form-control" name="amount" value="0.00" required="" autofocus="" disabled="">
                    <input id="amount_" type="hidden" name="amount_"><br>

                    <label for="notes" class="text-normal text-dark">Notes:</label>
                    <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus=""></textarea><br>

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

@section('js')
    <script type="text/javascript" src="{{ URL('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('js/components.js') }}"></script>
    <script type="text/javascript" src="{{ URL('js/select2.min.js') }}"></script>

    <script>

    var total_amount = 0;
    var reservation_rate = 0;
    var max_guests = 0;
    var additional_guests = 0;
    var price_per_head = 0;

    $(document).ready(function(){
        var no_of_rooms = 0;
        $('#rooms').click(function(e){
            alert("ey");
        });
    });

    $('#reservation-type').on('change', function(){
        reservation_rate = parseFloat($(":selected", this).data('rate'));
        max_guests = $(":selected", this).data('max-guest');
        price_per_head = $(":selected", this).data('priceperhead');
        additional_guests = parseInt($('#people').val()) - max_guests;
        $('#max-guests').html(max_guests + ", Additional guests: PHP" + price_per_head + " per head.");
        compute();
    });

    $('#people').on("input change", function(){
        additional_guests = parseInt($(this).val()) - max_guests;
        compute();
    });

    function compute(){
        total_amount = parseFloat(2000);
        total_amount += parseFloat(reservation_rate);
        if(additional_guests > 0) total_amount += parseFloat(price_per_head) * parseFloat(additional_guests);
        total_amount = parseFloat(total_amount).toFixed(2);
        $('#amount').val("PHP " + total_amount);
        $('#amount_').val(total_amount);
    }

    </script>
    <script>
    $(document.body).on('change','#rooms', function(){
        alert('Change Happened');
    });
    </script>

@endsection

@endsection