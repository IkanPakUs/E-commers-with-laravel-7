<!doctype html>
<html lang="en">
  <head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>@yield('title')</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{!! asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{!! asset('assets/style/util.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! asset('assets/style/main.css') !!}">
      <!--===============================================================================================-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
    


    <!-- content -->
    @yield('content')






    <div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/animsition/js/animsition.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/bootstrap/js/popper.js') !!}"></script>
    <script src="{!! asset('assets/js/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/select2/select2.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/daterangepicker/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/js/vendor/daterangepicker/daterangepicker.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/vendor/countdowntime/countdowntime.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('assets/js/js/main.js') !!}"></script>
        
    </body>
</html>
        