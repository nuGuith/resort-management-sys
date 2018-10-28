@extends('layouts.master')

@section('page-header')
    <div id="heading">
        Admin / <small>SALES OUTLOOK</small> <big>(</big><span id="range" style="font-size:1em; color:gray;"></span><big>)</big>
    </div>
@endsection

@section('content')

    <link rel="stylesheet" type="text/css" href="{{URL('css/daterangepicker.css')}}" />
    
    <div class="bgc-white bd bdrs-3 p-20 mB-20 col-lg-4">
        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
            <i class="fa fa-calendar"></i>&nbsp;
            <span></span> <i class="fa fa-caret-down"></i>
        </div>
    </div>

	<div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%" border=1>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Reservation ID</th>
                    <th>Reservation Type</th>
                    <th>Date</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($sales as $s)
                <tr>
                    <td>{{date('M', strtotime($s->updated_at))}}</td>
                    <td>{{$s->id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{date('F d, Y h:iA', strtotime($s->start_datetime))}} to {{date('F d, Y h:iA', strtotime($s->end_datetime))}}</td>
                    <td>{{$s->total_payment}}</td>
                </tr>
            @endforeach
            </tbody>
        
        </table>
    </div>
    
    <div class="mB-40">
        <a id="btnPrint" target="_blank" class="btn btn-info" style="width:10em; color:white;">
            Print
        </a>
    </div>

    <script type="text/javascript" src="{{URL('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{URL('js/daterangepicker.js')}}"></script>

    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#range').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });

        $('#btnPrint').on('click', function(){
            var divToPrint=document.getElementById("dataTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        });
    </script>

@endsection