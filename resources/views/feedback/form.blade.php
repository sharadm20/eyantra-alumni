<form>
{!! csrf_field() !!}


      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate" value="{{Auth::user()->name}}" disabled="true">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="email" id="icon_prefix" type="text" class="validate" value="{{Auth::user()->email}}" disabled="true">
          <label for="name">Email</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">contacts</i>
          <input name="phone_no" id="icon_prefix" type="text" class="validate" value="{{old('phone_no')}}" >
          <label for="name">Phone No.</label>
        </div>
        </div>
        @if($errors->has('phone_no'))
            <p class="red-text">{!! $errors->first('phone_no') !!}</p>
          @endif

          <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">subject</i>
          <input name="college" id="icon_prefix" type="text" class="validate" value="{{old('collge')}}" >
          <label for="name">College Name</label>
        </div>
        </div>
        @if($errors->has('college'))
            <p class="red-text">{!! $errors->first('college') !!}</p>
          @endif

           <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
          <input name="address" id="icon_prefix" type="text" class="validate" value="{{old('address')}}" >
          <label for="name">Address</label>
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
      		<option value="Andaman and Nicobar Island">Andaman and Nicobar Island</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman And Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujrat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Puducherry">Puducherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
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
          <select name="disciplines">
          	<!-- <option value="B.E.">B.E.</option>
          	<option value="B Tech.">B.Tech.</option>
          	<option value="B.Sc.">B.Sc.</option>
          	<option value="M.E.">M.E.</option>
          	<option value="M.Tech.">M.Tech.</option>
          	<option value="Pursuing undergraduate degree">Yet to complete my undergraduate degree</option>
          	<option value="Pursuing Masters Degree">Pursuing Masters Degree</option>
          	<option value="Others">Others</option> -->
          	@foreach($disciplines as $discipline)
          	<option value="{{$discipline->discipline_name}}">{{$discipline->discipline_name}}</option>	
          	@endforeach
          </select>
        </div>
        </div>
        @if($errors->has('disciplines'))
            <p class="red-text">{!! $errors->first('disciplines') !!}</p>
          @endif
          <div class="row">
          <div class="input-field col s6">
          <select name="departments">
          	@foreach($departments as $department)
          	<option value="{{$department->name}}">{{$department->name}}</option>
          	@endforeach
          </select>
          <div class="divider">
          	 <blockquotes>We'd like to know how e-Yantra has touched you.</blockquotes>
          </div>
			<div class="section">
				<p><strong>Q1.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
			<div class="section">
				<p><strong>Q2.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
			
			<div class="section">
				<p><strong>Q3.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>

				<div class="section">
				<p><strong>Q4.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>

				<div class="section">
				<p><strong>Q5.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q6.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q7.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q8.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q9.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q10.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q11.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q12.</strong> Improved technical skills</p>
									@if($errors->has('que1'))
										<p class="red-text">{!! $errors->first('que1') !!}</p>
									@endif
									<p>
											<input name="que1" type="radio" value="1" id="q1_opt1" @if(old('que1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="2" id="q1_opt2" @if(old('que1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="que1" type="radio" value="3" id="q1_opt3" @if(old('que1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="que1" type="radio" value="4" id="q1_opt4" @if(old('que1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="que1" type="radio" value="5" id="q1_opt5" @if(old('que1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="que13" name="que13" class="materialize-textarea">{{old('que13')}}</textarea>
						<label for="que18_comment"><strong>Q13.</strong> Can you give us an example of an instance of any of the above?</label>
						@if($errors->has('que18_comment'))
							<span class="red-text">{!! $errors->first('que18_comment') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="que18_comment" name="que18_comment" class="materialize-textarea">{{old('que18_comment')}}</textarea>
						<label for="que18_comment"><strong>Q14.</strong> What impact did e-Yantra have on your life?</label>
						@if($errors->has('que18_comment'))
							<span class="red-text">{!! $errors->first('que18_comment') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="que18_comment" name="que18_comment" class="materialize-textarea">{{old('que18_comment')}}</textarea>
						<label for="que18_comment"><strong>Q15.</strong> What were the problems you faced during e-Yantra competitions and how might they be improved?</label>
						@if($errors->has('que18_comment'))
							<span class="red-text">{!! $errors->first('que18_comment') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="que18_comment" name="que18_comment" class="materialize-textarea">{{old('que18_comment')}}</textarea>
						<label for="que18_comment"><strong>Q16.</strong> Suggestions for how else e-Yantra might have improved your experience?</label>
						@if($errors->has('que18_comment'))
							<span class="red-text">{!! $errors->first('que18_comment') !!}</span>
						@endif
					</div>
				</div>
				<div class="row">
 				<button class="btn waves-effect waves-light" type="submit" name="fdbcksave" id="fdbcksave">Save
    			<i class="material-icons right">send</i>
  				</button>

  				</div>

</form>