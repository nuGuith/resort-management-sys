<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Carina's Place</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>

   <body background="images/background.jpg">
      <div class="container">
         <div class="form-group">
            <h2>Carina's Place</h2>
         </div>

         <!-- <div class="form-group">  
            <label for="email" style="display: inline;" for="name">Email</label>
            <input style="display: inline; width: 30%" id="email" type="text" class="form-control" name="email" value="" required="" autofocus=""><br><br>

            <label for="pass">Password</label>
            <input style="display: inline; width: 30%" id="pass" type="text" class="form-control" name="pass" value="" required="" autofocus="">

         </div> -->
         <div class="peer" style="margin-bottom: 20px;" align="right">
            <!-- <a href="{{ url('/guest/schedule') }}"><button class="btn btn-primary">Login</button></a>
            <a class="btn btn-link" href="http://127.0.0.1:8000/password/reset">Forgot Your Password?</a> -->
            <a href="/login" class="btn btn-link" data-toggle="modal" >Login</a>
            <a href="/register" class="btn btn-link">Create new account</a>
         </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
          
         <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

         <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: auto;">
               <div class="item active">
                  <img src="{{ asset('images/pool-crop.jpg') }}" alt="Los Angeles" style="width:100%;">
               </div>

               <div class="item">
                 <img src="{{ asset('images/house-crop.jpg') }}" alt="Chicago" style="width:100%;">
               </div>
          
               <div class="item">
                 <img src="{{ asset('images/pav-crop.jpg') }}" alt="New york" style="width:100%;">
               </div>
            </div>

         <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </body>

   <style type="text/css">
      body {background-image: url("{{ asset('images/background.jpg') }}");}
   </style>

   <!-- MODAL -->
   <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modalLoginLabel">Login</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

               <div class="form-group">
                  <label for="email" style="display: inline;" for="name">Email</label>
                  <input style="display: inline;" id="email" type="text" class="form-control" name="email" value="" required="" autofocus=""><br><br>

                  <label for="pass">Password</label>
                  <input style="display: inline;" id="pass" type="text" class="form-control" name="pass" value="" required="" autofocus=""><br><br>
               </div>

               <div class="form-group" align="center">
                  <a class="btn btn-link" href="http://127.0.0.1:8000/password/reset">Forgot Your Password?</a>
               </div>

            </div>
            <div class="modal-footer">
               <a href="{{ url('/guest/schedule') }}"><button class="btn btn-primary">Login</button></a>
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
         </div>
      </div>
   </div>

</html>
