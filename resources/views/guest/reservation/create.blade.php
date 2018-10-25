@extends('guest.layout.default')

@section('page-header')
    Guest <small>NEW RESERVATION</small>
@endsection

@section('content')
    <table style="width: 100%">
        <td style="width: 40%">
            <div class="form-group">
                <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label>
                <select id="reservation-type" class="form-control" name="reservation-type" value="" required="" autofocus="">
                    <option></option>
                    <option>Event</option>
                    <option>Stay-In</option>
                    <option>Pool Reservation</option>
                </select><br>

                <label for="rooms" class="text-normal text-dark">Rooms:</label>
                <select multiple="" id="rooms" class="form-control" name="rooms" value="" required="" autofocus="">
                    <option> </option>
                    <option>Room 1</option>
                    <option>Room 2</option>
                    <option>Room 3</option>
                    <option>Room 4</option>
                </select>
                <br>

                <label for="date-starts" class="text-normal text-dark">Date Starts:</label><br>
                <input id="date-starts" type="date" class="form-control" name="date-starts" value="" required="" autofocus="" style="display: inline; width: 50%">
                <input id="time-starts" type="time" class="form-control" name="time-starts" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                <label for="date-ends" class="text-normal text-dark">Date Ends:</label><br>
                <input id="date-ends" type="date" class="form-control" name="date-ends" value="" required="" autofocus="" style="display: inline; width: 50%">
                <input id="time-ends" type="time" class="form-control" name="time-ends" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                <label for="people" class="text-normal text-dark">Number of People:</label>
                <input id="people" type="number" class="form-control" name="people" value="" required="" autofocus=""><br>

                <label for="amount" class="text-normal text-dark">Total Amount:</label>
                <input id="amount" type="text" class="form-control" name="amount" value="0.00php" required="" autofocus=""><br>

                <label for="downpayment" class="text-normal text-dark">Downpayment:</label>
                <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled=""><br>

                <label for="notes" class="text-normal text-dark">Notes:</label>
                <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus="">
                </textarea><br>

                <div align="right">
                    <a href="" class="btn cur-p btn-success">Reserve</a>
                    <a href="{{ url('/guest/reservation') }}" class="btn cur-p btn-danger">Cancel</a>
                </div>
            </div>
        </td>

        <td style="width: 5%"></td>

        <td>
            <div class="form-group">
                <img src="{{ asset('images/room2.png') }}"><br><br>

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

@endsection