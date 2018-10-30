@extends('layouts.master')

@section('page-header')
    Admin <small>RESERVATION DETAILS</small>
@endsection

@section('content')

    <table style="width: 100%">
            <td style="width: 40%">
                <div class="form-group">
                    <label for="customer-name" class="text-normal text-dark">Customer Name:</label><br>
                    <input id="customer-name" type="text" class="form-control" name="customer-name" value="{{ $reservations->name }}" required="" autofocus="" disabled=""><br>

                    <label for="contact-no" class="text-normal text-dark">Contact Number:</label><br>
                    <input id="contact-no" type="text" class="form-control" name="contact-no" value="{{ $reservations->contact_no }}" required="" autofocus="" disabled=""><br>

                    <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label><br>
                    <input id="reservation-type" type="text" class="form-control" name="reservation-type" value="{{ $reservations->rtype }}" required="" autofocus="" disabled=""><br>

                    <label for="rooms" class="text-normal text-dark">Rooms:</label><br>
                    <input id="rooms" type="text" class="form-control" name="rooms" value="{{ $reservations->no_of_rooms }}" required="" autofocus="" disabled=""><br>

                    <label for="people" class="text-normal text-dark">Number of Guests:</label>
                    <input id="people" type="number" class="form-control" name="people" value="{{ $reservations->no_of_guests }}" required="" autofocus="" disabled=""><br>

                    <label for="reservation-desc" class="text-normal text-dark">Reservation Description:</label><br>
                    <textarea id="reservation-desc"class="form-control" name="reservation-desc" value="" required="" autofocus="" disabled="">{{ $reservations->description }}</textarea><br>
                </div>
            </td>

            <td style="width: 5%"></td>

            <td style="width: 40%">
                <div class="form-group">
                    <label for="date-starts" class="text-normal text-dark">Date Starts:</label><br>
                    <input id="date-starts" type="text" class="form-control" name="date-starts" value="{{ $reservations->start_datetime }}" required="" autofocus="" style="display: inline;" disabled=""><br><br>

                    <label for="date-ends" class="text-normal text-dark">Date Ends:</label><br>
                    <input id="date-ends" type="text" class="form-control" name="date-ends" value="{{ $reservations->end_datetime }}" required="" autofocus="" style="display: inline;" disabled=""><br><br>

                    <label for="amount" class="text-normal text-dark">Total Amount:</label><br>
                    <input id="amount" type="number" class="form-control" name="amount" value="{{ $reservations->total_amount_due }}" required="" autofocus="" style="display: inline; width: 88%;">
                    <a href="" class="btn cur-p btn-info" style="display: inline;">PAID</a><br><br>

                    <label for="downpayment" class="text-normal text-dark">Downpayment:</label><br>
                    <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled="" style="display: inline; width: 88%;">
                    <a href="" class="btn cur-p btn-info" style="display: inline;">PAID</a><br><br>

                    <label for="notes" class="text-normal text-dark">Notes:</label>
                    <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus="" disabled="">{{ $reservations->note }}</textarea>

                    <div align="center" style="margin-top: 12%">
                        <a href="" class="btn cur-p btn-success">SAVE</a>
                        <a href="" class="btn cur-p btn-danger">CANCEL</a>
                    </div>
                </div>
            </td>
    </table>

@endsection