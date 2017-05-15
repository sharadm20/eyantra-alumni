 @extends('layouts.master')

@section('title', 'e-Yantra Login')
@section('content')  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="row">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      
      <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="action" id="signin">SignIn
    <i class="material-icons right">send</i>
  </button>
    
   
      <button class="btn waves-effect waves-light" type="submit" name="action" id="signup">SignUp
    <i class="material-icons right">send</i>
  </button>
    </div>
      </form>
    </div>

@endsection
  
        