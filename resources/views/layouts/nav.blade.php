@section('nav')
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  
  <li><a href="{{route('viewprofile')}}">Profile</a></li>
  <li class="divider"></li>
  <li><a href="{!!route('logout')!!}">Logout</a></li>
</ul>
<nav class="grey darken-3">
  <div class="nav-wrapper">
    <a href="{!!route('home')!!}" class="brand-logo"><a href="{!!route('home')!!}" class="brand-logo"><img class="responsive-img" style="margin-top: 10px;" src="{!! asset('img/logo.png') !!}"/></a></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{!!route('home')!!}">Home</a></li>
      <!-- <li><a href="badges.html">Components</a></li> -->
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{!!Auth::user()->name!!}<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
@show