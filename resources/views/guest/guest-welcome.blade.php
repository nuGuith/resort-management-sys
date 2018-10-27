@extends('layouts.plain')

@section('content')
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

   <body>
      <div class="container">

         <div class="peer" id="top">
               <img src="{{ asset('images/resort-logo2.png') }}">
         </div>

         <div id="container-bg">

            <div style="margin-right: 4%" align="right">
               <a href="login" class="btn btn-link">Login</a>
               <a>|</a>
               <a href="/register" class="btn btn-link">Create new account</a>
            </div>

            <div style="margin-right: 5%; margin-left: 5%">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
               <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                     <li data-target="#myCarousel" data-slide-to="4"></li>
                  </ol>

               <!-- Wrapper for slides -->
                  <div class="carousel-inner" style="height: auto;">
                     <div class="item active">
                        <img id="slider" src="{{ asset('images/resort/pic1.png') }}" alt="pic1" style="width:100%;">
                     </div>

                     <div class="item">
                       <img id="slider" src="{{ asset('images/resort/pic2.png') }}" alt="pic2" style="width:100%;">
                     </div>
                
                     <div class="item">
                       <img id="slider" src="{{ asset('images/resort/pic3.png') }}" alt="pic3" style="width:100%;">
                     </div>

                     <div class="item">
                       <img id="slider" src="{{ asset('images/resort/pic4.png') }}" alt="pic4" style="width:100%;">
                     </div>
                
                     <div class="item">
                       <img id="slider" src="{{ asset('images/resort/pic5.png') }}" alt="pic5" style="width:100%;">
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

            <div class="peer" style="" align="center">
               <img id="image-message" src="{{ asset('images/resort/message.png') }}">
            </div>

            <div class="peer">
               <div>
                  <img id="image-vector" src="{{ asset('images/resort/house-vector.png') }}">
                  <img id="image-vector" src="{{ asset('images/resort/pool-vector.png') }}">
                  <img id="image-vector" src="{{ asset('images/resort/pav-vector.png') }}">
                  <label id="text-vector" class="text-normal text-dark">
                     House that can this and that. House that can this and that. House that can this and that.
                  </label>
                  <label id="text-vector" class="text-normal text-dark">
                     Pool that can this and that. Pool that can this and that. Pool that can this and that.
                  </label>
                  <label id="text-vector" class="text-normal text-dark">
                     Pavilion that can this and that. Pavilion that can this and that. Pavilion that can this and that.
                  </label>
               </div>
            </div>
         </div>
      </div>
   </body>

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

   <!-- STYLE -->
   <style type="text/css">
      body
      {
         background-image: url("{{ asset('images/background7.jpg') }}");
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
      }

      #myCarousel
      {
         margin-bottom: 5%;
      }

      #top
      {
         margin-bottom: 1%;
         margin-top: 2%;
      }

      #image-vector
      {
         width: 20%;
         margin-left: 10%
      }

      #text-vector
      {
         width: 20%;
         margin-left: 10%;
         margin-bottom: 5%;
         text-align: center;
         font-style: italic;
      }

      #container-bg
      {
         background-image: url("{{ asset('images/resort/bg-color1.png') }}");
         border-radius: 20px;
      }
   </style>

</html>
@endsection