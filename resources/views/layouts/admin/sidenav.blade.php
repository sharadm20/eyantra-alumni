
<nav class="grey darken-3">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      <a href="{{route('home')}}" class="brand-logo" target="_blank"><img class="responsive-img" style="margin-top: 10px;" src="{!! asset('img/logo.png') !!}"/></a>
      <ul class="side-nav grey darken-2" id="mobile-demo">
        <li class="sidenav-header teal">
          <div class="row">
            <div class="col s4">
                <img src="https://gravatar.com/avatar/961997eb7fd5c22b3e12fb3c8ca14e11?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <h5 >{{Auth::user()->name}}</h5>
            </div>
          </div>
        </li>
        <li class="white"><a href="{{route('viewprofile')}}" class="waves-effect waves-blue">Profile</a></li>
        <li class="white"><a href="{{route('viewalumni')}}" class="waves-effect waves-blue">e-Yantra Alumni</a></li>
        <li class="white"><a href="#" class="waves-effect waves-blue">Employee's</a></li>
        <li class="white"><a href="{{route('response')}}" class="waves-effect waves-blue">Response</a></li>
        <li class="white"><div class="divider"></div></li>
        <li class="white"><a href="{{route('logout')}}" class="waves-effect waves-blue">Log Out<span class="new badge right yellow darken-3"></span></a></li>
        <li class="sidenav-footer blue">
          <div class="row">  
            <div class="social-icons">
            </div>
          </div>
        </li>
      </ul>
      
    </div>
  </nav>



      