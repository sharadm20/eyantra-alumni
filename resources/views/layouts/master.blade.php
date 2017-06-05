<!DOCTYPE html>
  <html>
    <head>
      <title>@yield('title')</title>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       
      <link type="text/css" rel="stylesheet" href="{!! asset('cssfw/css/materialize.min.css') !!}"  media="screen,projection"/>
     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <style>
        html{
          font-size: 18px;
        }
        
        @yield('userstyle')
      </style>
       @yield('headscript')
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
 
    </head>

    <body>
      <!--header navigation-->
      
      <div class="top"></div>
      @yield('content')
      <!--footer-->
     
    </body>
  </html>
