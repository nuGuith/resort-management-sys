@extends('admin.layout.default')

@section('page-header')
    Admin <small>RESORT</small>
@endsection

@section('content')

	<table style="width: 100%">
        <td style="width: 40%">
            <div class="form-group">
                <label for="area-name" class="text-normal text-dark">Area Name:</label><br>
                <input id="area-name" type="text" class="form-control" name="area-name" value="" required="" autofocus=""><br>

                <label for="area-desc" class="text-normal text-dark">Area Description:</label>
                <textarea id="area-desc"class="form-control" name="area-desc" value="" required="" autofocus="">
                </textarea><br>

                <div align="right">
                    <a href="" class="btn cur-p btn-success">SAVE</a>
                    <a href="" class="btn cur-p btn-danger">CANCEL</a>
                </div>
            </div>
        </td>

        <td style="width: 5%"></td>

        <td>
            <div class="form-group">
                <label for="area-pic" class="text-normal text-dark">Add Picture:</label><br>
                <input id="area-pic" type="text" class="form-control" name="area-pic" value="" required="" autofocus=""><br>
            </div>
        </td>
    </table>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Area Name</th>
                    <th>Area Description</th>
                    <th style="width: 10%">Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn cur-p btn-info" data-toggle="modal" data-target="#modalViewImage">View Image</a></td>
                    <td>
                    	<a href="" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5"><i class="ti-pencil"></i></a>
                    	<a href="" class="td-n c-red-500 cH-blue-500 fsz-md p-5"><i class="ti-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        
        </table>
    </div>

    <!-- MODAL -->
   <div class="modal fade" id="modalViewImage" tabindex="-1" role="dialog" aria-labelledby="modalViewImageLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalViewImageLabel">Room</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

               <img src="{{ asset('images/house.jpg') }}">

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
            </div>
         </div>
      </div>
   </div>
   <!-- END OF MODAL -->

@endsection