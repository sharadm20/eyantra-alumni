
<!-- <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('opdetails')}}" class="breadcrumb active">Details</a>
        <a href="{{route('opclgfaq')}}" class="breadcrumb">College Facilitation</a>
        <a href="{{route('opfeedback')}}" class="breadcrumb">Impact of e-Yantra</a>
      </div>
    </div>
  </nav> -->
 <!--  <nav class="breadcrumb">
  <a class="breadcrumb-item active" href="{{route('opdetails')}}">Details</a>
  <a class="breadcrumb-item" href="{{route('opclgfaq')}}">Collge Facilitation</a>
  <a class="breadcrumb-item" href="{{route('opfeedback')}}">Impact of e-Yantra</a>
  
</nav> -->
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="{{route('opdetails')}}">1</a></li>
    <li class="waves-effect"><a href="{{route('opclgfaq')}}">2</a></li>
    <li class="waves-effect"><a href="{{route('opfeedback')}}">3</a></li>
   
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>