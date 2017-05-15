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
    </head>

    <body>
      <!--header navigation-->
      <div class="navbar-fixed">
        <nav class="black" role="navigation">
          <div class="container">
              <a href=# class="brand-logo"><img class="responsive-img" style="margin-top: 10px;" src="{!! asset('img/logo.png') !!}"/></a>
              <a href=# data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- <li><a href="" class="waves-effect waves-light btn">Register</a></li> -->
                <!--<li><a href=# class="waves-effect waves-light btn">Login</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                 <li><a href="" class="waves-effect waves-light btn">Register</a></li> 
                <li><a href=# class="waves-effect waves-light btn">Login</a></li>-->
              </ul>
          </div>
        </nav>
      </div>
      <!--end of nav-->
      <div class="top"></div>
      @yield('content')
      <!--footer-->
      <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="card-panel teal center-align">
                  <span class="white-text">
                    e-Yantra is a project sponsored by MHRD through the National Mission on Education through ICT (NMEICT)
                  </span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Our Address:</h5>
                    <address class="grey-text text-lighten-4">
                      ERTS Lab,<br/>
                      first floor, KReSIT Building, CSE Dept<br/>
                      IIT Bombay, Powai<br/>
                      Mumbai-400074, Maharashtra.<br/>
                      Email us at: <a href="mailto:helpdesk@e-yantra.org">helpdesk@e-yantra.org</a>
                    </address>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Connect:</h5>
                <a href="https://twitter.com/eyantra_iitb" target="_blank" class="btn-floating btn-large waves-effect waves-light light-blue">t</a>
                <a href="https://plus.google.com/u/0/115192232830737300162/posts" target="_blank" class="btn-floating btn-large waves-effect waves-light red">g+</a>
                <a href="https://www.facebook.com/eyantra" target="_blank" class="btn-floating btn-large waves-effect waves-light blue accent-4">f</a>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container center-align">
              Copyright © {!!date('Y')!!} <a href="http://e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved.
            </div>
          </div>
      </footer>
      <!--end of footer-->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{!! asset('cssfw/js/materialize.min.js') !!}"></script>
      @yield('addscriptlnk')
      <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
            @yield('readyscript')
        })
      </script>
      @yield('userscript')
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64862983-1', 'auto');
          ga('send', 'pageview');
      </script>
      <script>
        /*!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1079482072135990');
        fbq('track', "PageView");*/

      </script>
      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1729245240668724');
        fbq('track', "CompleteRegistration");
      </script>
      <noscript>
          <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1729245240668724&ev=PageView&noscript=1"
        />
      </noscript>
      <!-- End Facebook Pixel Code -->
    </body>
  </html>
