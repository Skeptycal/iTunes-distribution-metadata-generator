<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>iTunes distribution metadata generator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap.min.css')}}">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="{{asset('assets/vendor/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

        <script src="{{asset('assets/vendor/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('home')}}">iTunes distribution metadata generator</a>
            </div>
            <div class="navbar-collapse collapse">

            </div><!--/.navbar-collapse -->
          </div>
        </div>





        @yield('body')





    <div class="container">

      <hr>

      <footer>
<!--        <p>&copy; Company 2014</p>-->
      </footer>

    </div> <!-- /container -->
        <script src="{{asset('assets/vendor/js/jquery.min.js')}}"></script>

        <script>window.jQuery || document.write('<script src="{{asset('assets/vendor/js/jquery-1.11.1.min.js')}}"><\/script>')</script>

        <script src="{{asset('assets/vendor/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/vendor/js/handlebars-v2.0.0.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
