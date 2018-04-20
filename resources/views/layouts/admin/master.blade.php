<!DOCTYPE html>
  <html>
    <head>
      <title>@yield('title')</title>
      <!--Import Google Icon Font-->
      <!--Import materialize.css-->     
      <link type="text/css" rel="stylesheet" href="{!! asset('cssfw/css/materialize.min.css') !!}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{asset('bower_resources/izitoast/dist/css/iziToast.min.css')}}" media="screen,projection"/> 
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"  media="screen,projection"/>
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
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="bower_resources/izitoast/dist/js/iziToast.min.js"></script>
      <script type="text/javascript" src="{{asset('bower_resources/chart.js/dist/Chart.js')}}"></script>
 
    </head>

    <body>
      <!--header navigation-->   
      
      @yield('content')
      <!--footer-->
     @stack('script')
    <script>
  $(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  // START OPEN
  $('.button-collapse').sideNav('hide');
});
</script>
    </body>
  </html>
