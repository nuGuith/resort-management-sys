@extends('admin.layout.default')

@section('page-header')
    Admin <small>RESERVATION DETAILS</small>
@endsection

@section('content')

	<table style="width: 100%">
        <td style="width: 40%">
            <div class="form-group">
                <label for="customer-name" class="text-normal text-dark">Customer Name:</label><br>
                <input id="customer-name" type="text" class="form-control" name="customer-name" value="" required="" autofocus=""><br>

                <label for="contact-no" class="text-normal text-dark">Contact Number:</label><br>
                <input id="contact-no" type="text" class="form-control" name="contact-no" value="" required="" autofocus=""><br>

                <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label><br>
                <input id="reservation-type" type="text" class="form-control" name="reservation-type" value="" required="" autofocus=""><br>

                <label for="rooms" class="text-normal text-dark">Rooms:</label><br>
                <input id="rooms" type="text" class="form-control" name="rooms" value="" required="" autofocus=""><br>

                <label for="people" class="text-normal text-dark">Number of People:</label>
                <input id="people" type="number" class="form-control" name="people" value="" required="" autofocus=""><br>

                <label for="reservation-desc" class="text-normal text-dark">Reservation Description:</label><br>
                <textarea id="reservation-desc"class="form-control" name="reservation-desc" value="" required="" autofocus="">
                </textarea><br>
            </div>
        </td>

        <td style="width: 5%"></td>

        <td style="width: 40%">
        	<div class="form-group">
                <label for="date-starts" class="text-normal text-dark">Date Starts:</label><br>
                <input id="date-starts" type="date" class="form-control" name="date-starts" value="" required="" autofocus="" style="display: inline; width: 50%">
                <input id="time-starts" type="time" class="form-control" name="time-starts" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                <label for="date-ends" class="text-normal text-dark">Date Ends:</label><br>
                <input id="date-ends" type="date" class="form-control" name="date-ends" value="" required="" autofocus="" style="display: inline; width: 50%">
                <input id="time-ends" type="time" class="form-control" name="time-ends" value="" required="" autofocus="" style="display: inline; width: 49%"><br><br>

                <label for="amount" class="text-normal text-dark">Total Amount:</label><br>
                <input id="amount" type="text" class="form-control" name="amount" value="0.00php" required="" autofocus="" style="display: inline; width: 88%;">
                <a href="" class="btn cur-p btn-info" style="display: inline;">PAID</a><br><br>

                <label for="downpayment" class="text-normal text-dark">Downpayment:</label><br>
                <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled="" style="display: inline; width: 88%;">
                <a href="" class="btn cur-p btn-info" style="display: inline;">PAID</a><br><br>

                <label for="notes" class="text-normal text-dark">Notes:</label>
                <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus="">
                </textarea>

                <div align="center" style="margin-top: 12%">
                    <a href="" class="btn cur-p btn-success">SAVE</a>
                    <a href="" class="btn cur-p btn-danger">CANCEL</a>
                </div>
            </div>
        </td>

    </table>

@endsection