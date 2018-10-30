@extends('layouts.master')

@section('page-header')
    Guest <small>RESERVATION DETAILS</small>
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
                    <br>
                    <label for="date-starts" class="text-normal text-dark">Start Date:</label><br>
                    <input id="date-starts" type="text" class="form-control" name="date-starts" value="{{ date('F d, Y h:iA', strtotime($reservations->start_datetime)) }}" required="" autofocus="" style="display: inline;" disabled=""><br><br>

                    <label for="date-ends" class="text-normal text-dark">End Date:</label><br>
                    <input id="date-ends" type="text" class="form-control" name="date-ends" value="{{ date('F d, Y h:iA', strtotime($reservations->end_datetime)) }}" required="" autofocus="" style="display: inline;" disabled=""><br><br>

                    <div class="row">
                        <div class="col-md-5">
                            <label for="amount" class="text-normal text-dark">Total Amount Due:</label><br>
                            <input id="amount" type="number" class="form-control" name="amount" value="{{ ($reservations->total_amount_due) }}" required="" autofocus="" disabled style="display: inline; width: 88%;">
                        </div>
                        <div class="col-md-7">
                            <label for="amount" class="text-normal text-dark">Total Amount Paid:</label><br>
                            <div style="display:flex;">
                                <input id="amount" type="number" class="form-control" name="amount" value="{{ ($reservations->total_payment) }}" required="" autofocus="" style="display: inline; width: 88%; flex:1;" min="1" {{ $reservations->total_amount_due === $reservations->total_payment ? 'disabled' : ''}}>
                                <button class="btn cur-p btn-info" style="display: inline;" {{ $reservations->total_amount_due === $reservations->total_payment ? 'disabled' : ''}}>SET</button>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-5">
                            <label for="downpayment" class="text-normal text-dark">Downpayment: (Status - <b><span id="down_stat">@if(is_null($reservations->downpayment_ref_no)) Unpaid @else Paid @endif</span></b>)</label><br>
                            <input id="downpayment" type="text" class="form-control" name="downpayment" value="2000.00php" required="" autofocus="" disabled="" style="display: inline; width: 88%;">
                        </div>
                        <div class="col-md-7">
                            <label for="amount" class="text-normal text-dark">Downpayment Ref#:</label><br>
                            <div style="display:flex;">
                                <input id="ref-no" type="number" class="form-control" name="ref_no" value="{{$reservations->downpayment_ref_no}}" required="" autofocus="" style="display: inline; width: 88%; flex:1;" min="1" {{ is_null($reservations->downpayment_ref_no) ? '' : 'disabled'}}>
                                <button id="btnDownpayment" class="btn cur-p btn-info" style="display: inline;" {{ is_null($reservations->downpayment_ref_no) ? '' : 'disabled'}}>SET</button>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <label for="notes" class="text-normal text-dark">Notes:</label>
                    <textarea id="notes"class="form-control" name="notes" value="" required="" autofocus="" disabled="">{{ $reservations->note }}</textarea>

                    <div align="center" style="margin-top: 12%">
                        @if ($reservations->status == "COMPLETED")
                        <button class="btn cur-p btn-success" disabled> PAYMENT COMPLETE. </button>
                        @elseif ($reservations->status == "ACCEPTED")
                        <button class="btn cur-p btn-success" disabled> SUBMIT </button>
                        @else
                        <button class="btn cur-p btn-success"> SUBMIT </button>
                        @endif
                        <a href="" class="btn cur-p btn-danger">CANCEL</a>
                    </div>
                </div>
            </td>
    </table>
@section('js')
<script type="text/javascript" src="{{ URL('js/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
    $('#btnDownpayment').on("click", function(){
        if($("#ref-no").val() == '' || $("#ref-no").val() == null)
            alert("Please input your Downpayment Ref# first.");
        else
            $('#down_stat').html("&#10004; Paid");
    });
});
</script>
@endsection

@endsection