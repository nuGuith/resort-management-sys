@extends('layouts.plain')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <div class="container">
         <div class="peer" id="top">
            <div class="row" style="margin-bottom:40px;">
              <div class="col-lg-3" style="margin-bottom:20px;">
                <img src="{{ asset('images/resort-logo2.png') }}">
              </div>
              <div class="col-lg-4"></div>
              <div class="col-lg-3" style="margin-top:20px; margin-right:-40px;">
                <h4>
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcarinas-place.herokuapp.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" data-layout="button" data-size="large" data-mobile-iframe="true" style="border: 1px solid #2196F3; border-radius:4px; padding:5px;">
                    <span class="icon-holder">
                      <i class="c-blue-500 ti-facebook"></i>
                    </span>
                    <span class="title">Share us on Facebook!</span>
                  </a>
                </h4>
              </div>
              <div class="col-lg-2" style="margin-top:20px;">
              <h4>
                <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="fb-xfbml-parse-ignore" data-layout="button" data-size="large" data-mobile-iframe="true" style="border: 1px solid #2196F3; border-radius:4px; padding:5px;" data-show-count="false">
                  <span class="icon-holder">
                    <i class="c-lightblue-500 ti-twitter-alt"></i>
                  </span>
                  <span class="title">Tweet.</span>
                </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </h4>
              </div>
            <div>
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
               <img id="image-message" style="width:60%; height:auto;" src="{{ asset('images/resort/message.png') }}">
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

        <script>
          //Facebook
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1996791573701166&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          
          //Twitter
            window.twttr = (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
              if (d.getElementById(id)) return t;
              js = d.createElement(s);
              js.id = id;
              js.src = "https://platform.twitter.com/widgets.js";
              fjs.parentNode.insertBefore(js, fjs);

              t._e = [];
              t.ready = function(f) {
                t._e.push(f);
              };

              return t;
            }(document, "script", "twitter-wjs"));
        </script>

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