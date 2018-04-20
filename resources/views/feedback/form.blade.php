<form action="{{route('details')}}">
{!! csrf_field() !!}

	<h4>Profile</h4>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i><br>
          <p>{{Auth::user()->name}}</p>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i><br>
          <p>{{Auth::user()->email}}</p>
          </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">contacts</i>
          <input name="phone" id="icon_prefix" type="text" class="validate" value="{{old('phone')}}" >
          <label for="phone">Phone No.</label>
        </div>
        </div>
        @if($errors->has('phone'))
            <p class="red-text">{!! $errors->first('phone') !!}</p>
          @endif

          <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">subject</i>
          <input name="college_name" id="icon_prefix" type="text" class="validate" value="{{old('college_name')}}" >
          <label for="college_name">College Name</label>
        </div>
        </div>
        @if($errors->has('college_name'))
            <p class="red-text">{!! $errors->first('college_name') !!}</p>
          @endif

           <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
          <input name="address" id="icon_prefix" type="text" class="validate" value="{{old('address')}}" >
          <label for="address">Address</label>
        </div>
        </div>
        @if($errors->has('address'))
            <p class="red-text">{!! $errors->first('address') !!}</p>
          @endif

           <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">my_location</i>
          <select name="state">
      		<option value="" disabled selected>State/Union Territory</option>
      		@foreach($states as $state)
      		<option value="{{$state->state_name}}">{{$state->state_name}}</option>
      		@endforeach
    		</select>
    <label>Select State/Union Territories</label>
        </div>
        </div>
        @if($errors->has('state'))
            <p class="red-text">{!! $errors->first('state') !!}</p>
          @endif

           <div class="row">
        <div class="input-field col s6">
          <input name="pincode" id="icon_prefix" type="text" class="validate" value="{{old('pincode')}}" >
          <label for="name">Pin Code</label>
        </div>
        </div>
        @if($errors->has('pincode'))
            <p class="red-text">{!! $errors->first('pincode') !!}</p>
          @endif

          <div class="row">
        <div class="input-field col s6">
          <select name="discipline">
          	
          	<option value="" disabled selected>Select Discipline</option>
          	@foreach($disciplines as $discipline)
          	<option value="{{$discipline->discipline_name}}">{{$discipline->discipline_name}}</option>	
          	@endforeach
          </select>
        </div>
        
        @if($errors->has('discipline'))
            <p class="red-text">{!! $errors->first('discipline') !!}</p>
          @endif
          </div>
          <div class="row">
          <div class="input-field col s6">
          <select name="department">
          <option value="" disabled selected>Select Department</option>
          	@foreach($departments as $department)
          	<option value="{{$department->name}}">{{$department->name}}</option>
          	@endforeach
          </select>
          </div>
          @if($errors->has('department'))
            <p class="red-text">{!! $errors->first('department') !!}</p>
          @endif
          </div>
			
			<div class="row">
        <div class="input-field col s6">
          <select name="eyrc[]" multiple>
          	
          <option value="" disabled selected>Have you participated in the e-Yantra Robotics Competition (eYRC)?</option>
          	
          	
          	<option value="2012">eYRC-2012</option>
          	<option value="2013">eYRC-2013</option>
          	<option value="2014">eYRC-2014</option>
          	<option value="2015">eYRC-2015</option>
          	<option value="2016">eYRC-2016</option>

          	
          	
          </select>
        </div>
        
        </div>

        <div class="row">
        <div class="input-field col s6">
          <select name="eyic[]" multiple>
          	
          <option value="" disabled selected>Have you participated in the e-Yantra Ideas Competition (eYIC)?</option>
          	
          	
          	
          	<option value="2014">eYIC-2014</option>
          	<option value="2015">eYIC-2015</option>
          	<option value="2016">eYIC-2016</option>
          	<option value="2017">eYIC-2017</option>

          	
          	
          </select>
        </div>
        
        </div>

        <h4>Employment Details</h4>

        <p class="red-text">If not employed please ignore</p>
        <div class="row">
          <div class="input-field col s6">
          <select name="emp_field">
          <option value="" disabled selected>Select Area of Field You are Employed</option>
          	@foreach($departments as $department)
          	<option value="{{$department->name}}">{{$department->name}}</option>
          	@endforeach
          </select>
          </div>
           
          </div>
          			<div class="section">
					<div class="input-field col s12">
						<textarea id="emp_organization" name="emp_organization" class="materialize-textarea">{{old('emp_organization')}}</textarea>
						<label for="emp_organization">Name of organization which has employed you</label>
						
					</div>
				</div>
							<div class="section">
					<div class="input-field col s12">
						<textarea id="designation" name="designation" class="materialize-textarea">{{old('designation')}}</textarea>
						<label for="designation">Designation you are posted at.</label>
						
					</div>
				</div>
							<div class="section">
					<div class="input-field col s12">
						<textarea id="salary" name="salary" class="materialize-textarea">{{old('salary')}}</textarea>
						<label for="salary">Annual Salary Offered</label>
						
					</div>
				</div>

			<div class="row">
 				<button class="btn waves-effect waves-light" type="submit" name="dtlsave" id="dtlsave">Save
    			<i class="material-icons right">send</i>
  				</button>

  				</div>
			</form>

          
          