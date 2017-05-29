@section('navbar')
<div class="navbar-fixed">
    
        <nav class="black" role="navigation">
          <div class="container">
          <div class="nav-wrapper">
              <a href='/' class="brand-logo"><img class="responsive-img" style="margin-top: 10px;" src="{!! asset('img/logo.png') !!}"/></a>
              @if(!Auth::guest())
              <a href=# data-activates="mobile-demo" class="button-collapse"><i class="material-icons">{!!Auth::user()->name!!}</i></a>
               
                  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
              </ul> 
              <ul class="side-nav" id="mobile-demo">
                 <li><a href=# class="waves-effect waves-light btn">Profile</a></li> 
                <li><a href='{!!route("logout")!!}' class="waves-effect waves-light btn">Logout</a></li>
              </ul>
              @endif
              </div>
          </div>
        </nav>
      </div>
      <!--end of nav-->
@show      