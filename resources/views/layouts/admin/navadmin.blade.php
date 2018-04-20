<ul id="dropdown1" class="dropdown-content">
  
  <li><a href="{{route('response')}}">Responses</a></li>
  <li class="divider"></li>
  <li><a href="{!!route('logout')!!}">Logout</a></li>
</ul>
      <ul id="slide-out" class="side-nav">
        
        <li class="bold"><a href="{!!route('usrdtls')!!}" class="waves-effect waves-purple">User Detail</a></li>
        <li class="bold"><a href="{!!route('viewprofile')!!}" class="waves-effect waves-teal">My Profile</a></li>
        <li class="bold"><a href="{!!route('logout')!!}" class="waves-effect waves-teal">Logout</a></li>
      </ul>
<nav class="grey darken-3">
  <div class="nav-wrapper">
  <a href="#!" data-activates="slide-out" class="button-collapse"><i class="material-icons left">menu</i></a>
    <a href="{!!route('land')!!}" class="brand-logo"><img class="responsive-img" style="margin-top: 10px;" src="{!! asset('img/logo.png') !!}"/></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{!!route('land')!!}">Home</a></li>
      <!-- <li><a href="badges.html">Components</a></li> -->
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{!!Auth::user()->name!!}<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>