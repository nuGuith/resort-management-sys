@extends('layouts.master')

@section('page-header')
    Admin <small>PRICES</small>
@endsection

@section('content')
    <div class="mB-20">
        <a href="" class="btn btn-info" data-toggle="modal" data-target="#modalAdd">
            Add Reservation Type
        </a>
    </div>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reservation Type</th>
                    <th>Reservation Rate</th>
                    <th>Reservation Description</th>
                    <th>Inclusive Guests</th>
                    <th>Rate per Person</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($prices as $price)
                    <tr>
                        <td>{{ $price -> id }}</td> 
                        <td>{{ $price -> name }}</td>
                        <td>{{ $price -> reservation_rate }}</td>
                        <td>{{ $price -> description }}</td>
                        <td>{{ $price -> max_guest }}</td>
                        <td>{{ $price -> price_per_head }}</td>
                        <td>
                            <a onClick="editModal({{ $price->id }})" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                            <a onClick="deleteRow({{ $price->id }})" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

    <!-- MODAL EDIT PRICE-->
   <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalEditLabel">Edit Reservation Information</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>

            {!! Form::open(array('id' => 'editForm', 'url' => 'admin/m/prices', 'action' => 'PricesController@update', 'method' => 'PUT')) !!}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label><br>
                        <input id="reservation-type" type="text" class="form-control" name="reservation_type" value="" required="" autofocus=""><br>

                        <label for="reservation-rate" class="text-normal text-dark">Reservation Rate:</label><br>
                        <input id="reservation-rate" type="number" class="form-control" name="reservation_rate" value="" required="" autofocus=""><br>

                        <label for="reservation-desc" class="text-normal text-dark">Reservation Description:</label><br>
                        <textarea id="reservation-desc" class="form-control" name="reservation_desc" required="" autofocus=""></textarea><br>

                        <label for="rate-per-head" class="text-normal text-dark">Rate per Head:</label><br>
                        <input id="rate-per-head" type="number" class="form-control" name="rate_per_head" value="" required="" autofocus=""><br>

                        <label for="max-guest" class="text-normal text-dark">Inclusive Max. No. of Guests</label><br>
                        <input id="max-guest" type="number" class="form-control" name="max_guest" value="" required="" autofocus=""><br>

                        <div align="right">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn cur-p btn-success">SAVE</button>
                    <a href="" class="btn cur-p btn-danger" data-dismiss="modal">CANCEL</a>
                    <input type="hidden" id="price-id" name="price_id">
                </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->

    <!-- MODAL ADD PRICE-->
   <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalAddLabel">Reservation Information</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>

            {!! Form::open(array('id' => 'addForm', 'action' => 'PricesController@store', 'method' => 'POST')) !!}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="reservation-type" class="text-normal text-dark">Reservation Type:</label><br>
                        <input id="reservation-type" type="text" class="form-control" name="reservation_type" value="" required="" autofocus=""><br>

                        <label for="reservation-rate" class="text-normal text-dark">Reservation Rate:</label><br>
                        <input id="reservation-rate" type="number" class="form-control" name="reservation_rate" value="" required="" autofocus=""><br>

                        <label for="reservation-desc" class="text-normal text-dark">Reservation Description:</label><br>
                        <textarea id="reservation-desc" class="form-control" name="reservation_desc" required="" autofocus=""></textarea><br>

                        <label for="rate-per-head" class="text-normal text-dark">Rate per Head:</label><br>
                        <input id="rate-per-head" type="number" class="form-control" name="rate_per_head" value="" required="" autofocus=""><br>

                        <label for="max-guest" class="text-normal text-dark">Inclusive Max. No. of Guests</label><br>
                        <input id="max-guest" type="number" class="form-control" name="max_guest" value="" required="" autofocus=""><br>

                        <div align="right">
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn cur-p btn-success">SAVE</button>
                    <a href="" class="btn cur-p btn-danger" data-dismiss="modal">CANCEL</a>
                </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->

   <script>
        function editModal(id)
        {
            $.ajax({
                type: "GET",
                url: "/admin/m/prices/" + id + "/edit",
                dataType: "JSON",
                success:function(data)
                {
                    $("#reservation-type").val(data.price.name);
                    $("#reservation-rate").val(data.price.reservation_rate);
                    $("#reservation-desc").val(data.price.description);
                    $("#rate-per-head").val(data.price.price_per_head);
                    $("#max-guest").val(data.price.max_guest);
                    $("#price-id").val(id);
                }
            });
            $('#modalEdit').modal('show');
        }
        function deleteRow(id)
        {
            $.ajax({
                type: "GET",
                url: "/admin/m/prices/" + id + "/delete",
                success:function(data)
                {
                    location.reload(true);
                }
            });
        }
   </script>

@endsection