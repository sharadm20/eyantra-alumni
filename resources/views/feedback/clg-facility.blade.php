<h4>College Facilitation</h4>

<form method="POST" action="{{route('clgfaq')}}">
<div class="section">
				<p> My college facilitates participation in e-Yantra activities</p>
									@if($errors->has('activity'))
										<p class="red-text">{!! $errors->first('activity') !!}</p>
									@endif
									<p>
											<input name="activity" type="radio" value="1" id="a_opt1" @if(old('activity') ==  1) checked="checked" @endif/>
											<label for="a_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="activity" type="radio" value="2" id="a_opt2" @if(old('activity') ==  2) checked="checked" @endif/>
											<label for="a_opt2">Agree</label>
										</p>
										<p>
											<input name="activity" type="radio" value="3" id="a_opt3" @if(old('activity') ==  3) checked="checked" @endif/>
											<label for="a_opt3">Neutral</label>
										</p>
										<p>
												<input name="activity" type="radio" value="4" id="a_opt4" @if(old('activity') ==  4) checked="checked" @endif/>
												<label for="a_opt4">Disagree</label>
										</p>
										<p>
												<input name="activity" type="radio" value="5" id="a_opt5" @if(old('activity') ==  5) checked="checked" @endif/>
												<label for="a_opt5">Strongly Disagree</label>
										</p>
									</div>

									<div class="section">
					<div class="input-field col s12">
						<textarea id="scenario" name="scenario" class="materialize-textarea">{{old('scenario')}}</textarea>
						<label for="scenario"> Support your view with a scenario you have faced</label>
						@if($errors->has('scenario'))
							<span class="red-text">{!! $errors->first('scenario') !!}</span>
						@endif
					</div>
				</div>
				<div class="row">
        <div class="input-field col s6">
          <select name="clg_facilitate[]" multiple>
          	
          <option value="" disabled selected>If your college facilitates, then how?</option>
          	
          	<option value="Out of hours access to facilities">Out of hours access to facilities</option>
          	<option value="Flexible dates for exams based on competition deadlines">Flexible dates for exams based on competition deadlines</option>
          	<option value="Financial help in sourcing components, etc.">Financial help in sourcing components, etc.</option>
          	<option value="Others">Others</option>
          	
          </select>
        </div>
        @if($errors->has('clg_facilitate'))
            <p class="red-text">{!! $errors->first('clg_facilitate') !!}</p>
          @endif
        </div>
        <p> Does your college have an e-Yantra Lab? </p>
									@if($errors->has('elsi_clg'))
										<p class="red-text">{!! $errors->first('elsi_clg') !!}</p>
									@endif
									<p>
											<input name="elsi_clg" type="radio" value="1" id="yes" @if(old('elsi_clg') ==  1) checked="checked" @endif/>
											<label for="yes">Yes</label>
										</p>
										<p>
											<input name="elsi_clg" type="radio" value="0" id="no" @if(old('activity') ==  0) checked="checked" @endif/>
											<label for="no">No</label>
										</p>

<blockquotes>If there is no lab or a lab is "being setup" then skip the rest of this section.</blockquotes>


		<div class="row">
        <div class="input-field col s6">
          <select name="lab_timing[]" multiple>
          	
          <option value="" disabled selected>Permitted timings for use of the lab?</option>
          	
          	<option value="Only a part of office hours">Only a part of office hours</option>
          	<option value="Office hours only">Office hours only</option>
          	<option value="Outside office hours with permission">Outside office hours with permission</option>
          	<option value="Weekends and public holidays">Weekends and public holidays</option>
          	
          </select>
        </div>
        @if($errors->has('lab_timing'))
            <p class="red-text">{!! $errors->first('lab_timing') !!}</p>
          @endif
        </div>

				<div class="section">
					<div class="input-field col s12">
						<textarea id="lab_incharge" name="lab_incharge" class="materialize-textarea">{{old('lab_incharge')}}</textarea>
						<label for="lab_incharge"> Name of faculty in charge of lab?</label>
						@if($errors->has('lab_incharge'))
							<span class="red-text">{!! $errors->first('lab_incharge') !!}</span>
						@endif
					</div>
				</div>
								<div class="section">
					<div class="input-field col s12">
						<textarea id="lab_about" name="lab_about" class="materialize-textarea">{{old('lab_about')}}</textarea>
						<label for="scenario"> Anything else you'd like to tell us about e-Yantra lab access?</label>
						@if($errors->has('lab_about'))
							<span class="red-text">{!! $errors->first('lab_about') !!}</span>
						@endif
					</div>
				</div>

<div class="row">
 				<button class="btn waves-effect waves-light" type="submit" name="facisave" id="facisave">Save
    			<i class="material-icons right">send</i>
  				</button>

  				</div>
</form>
