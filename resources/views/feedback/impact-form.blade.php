<h4>Impact of e-Yantra</h4>
          <div class="divider">
          	 
          </div>
          <form action="{{route('feedback')}}">
			<div class="section">
			<p>We'd like to know how e-Yantra has touched you.</p>
				<p><strong>Q1.</strong> Improved technical skills</p>
									@if($errors->has('q1'))
										<p class="red-text">{!! $errors->first('q1') !!}</p>
									@endif
									<p>
											<input name="q1" type="radio" value="1" id="q1_opt1" @if(old('q1') ==  1) checked="checked" @endif/>
											<label for="q1_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q1" type="radio" value="2" id="q1_opt2" @if(old('q1') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="q1" type="radio" value="3" id="q1_opt3" @if(old('q1') ==  3) checked="checked" @endif/>
											<label for="q1_opt3">Neutral</label>
										</p>
										<p>
												<input name="q1" type="radio" value="4" id="q1_opt4" @if(old('q1') ==  4) checked="checked" @endif/>
												<label for="q1_opt4">Disagree</label>
										</p>
										<p>
												<input name="q1" type="radio" value="5" id="q1_opt5" @if(old('q1') ==  5) checked="checked" @endif/>
												<label for="q1_opt5">Strongly Disagree</label>
										</p>
									</div>
			<div class="section">
				<p><strong>Q2.</strong> Changed my approach to problem solving</p>
									@if($errors->has('q2'))
										<p class="red-text">{!! $errors->first('q2') !!}</p>
									@endif
									<p>
											<input name="q2" type="radio" value="1" id="q2_opt1" @if(old('q2') ==  1) checked="checked" @endif/>
											<label for="q2_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q2" type="radio" value="2" id="q2_opt2" @if(old('q2') ==  2) checked="checked" @endif/>
											<label for="q2_opt2">Agree</label>
										</p>
										<p>
											<input name="q2" type="radio" value="3" id="q2_opt3" @if(old('q2') ==  3) checked="checked" @endif/>
											<label for="q2_opt3">Neutral</label>
										</p>
										<p>
												<input name="q2" type="radio" value="4" id="q2_opt4" @if(old('q2') ==  4) checked="checked" @endif/>
												<label for="q2_opt4">Disagree</label>
										</p>
										<p>
												<input name="q2" type="radio" value="5" id="q2_opt5" @if(old('q2') ==  5) checked="checked" @endif/>
												<label for="q2_opt5">Strongly Disagree</label>
										</p>
									</div>
			
			<div class="section">
				<p><strong>Q3.</strong> Help improve presentation skills</p>
									@if($errors->has('q3'))
										<p class="red-text">{!! $errors->first('q3') !!}</p>
									@endif
									<p>
											<input name="q3" type="radio" value="1" id="q3_opt1" @if(old('q3') ==  1) checked="checked" @endif/>
											<label for="q3_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q3" type="radio" value="2" id="q1_opt2" @if(old('q3') ==  2) checked="checked" @endif/>
											<label for="q3_opt2">Agree</label>
										</p>
										<p>
											<input name="q3" type="radio" value="3" id="q1_opt3" @if(old('q3') ==  3) checked="checked" @endif/>
											<label for="q3_opt3">Neutral</label>
										</p>
										<p>
												<input name="q3" type="radio" value="4" id="q1_opt4" @if(old('q3') ==  4) checked="checked" @endif/>
												<label for="q3_opt4">Disagree</label>
										</p>
										<p>
												<input name="q3" type="radio" value="5" id="q1_opt5" @if(old('q3') ==  5) checked="checked" @endif/>
												<label for="q3_opt5">Strongly Disagree</label>
										</p>
									</div>

				<div class="section">
				<p><strong>Q4.</strong> Improved technical skills</p>
									@if($errors->has('q4'))
										<p class="red-text">{!! $errors->first('q4') !!}</p>
									@endif
									<p>
											<input name="q4" type="radio" value="1" id="q4_opt1" @if(old('q4') ==  1) checked="checked" @endif/>
											<label for="q4_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q4" type="radio" value="2" id="q4_opt2" @if(old('q4') ==  2) checked="checked" @endif/>
											<label for="q4_opt2">Agree</label>
										</p>
										<p>
											<input name="q4" type="radio" value="3" id="q4_opt3" @if(old('q4') ==  3) checked="checked" @endif/>
											<label for="q4_opt3">Neutral</label>
										</p>
										<p>
												<input name="q4" type="radio" value="4" id="q4_opt4" @if(old('q4') ==  4) checked="checked" @endif/>
												<label for="q4_opt4">Disagree</label>
										</p>
										<p>
												<input name="q4" type="radio" value="5" id="q4_opt5" @if(old('q4') ==  5) checked="checked" @endif/>
												<label for="q4_opt5">Strongly Disagree</label>
										</p>
									</div>

				<div class="section">
				<p><strong>Q5.</strong> Improved my ability to work in a team</p>
									@if($errors->has('q5'))
										<p class="red-text">{!! $errors->first('q5') !!}</p>
									@endif
									<p>
											<input name="q5" type="radio" value="1" id="q5_opt1" @if(old('q5') ==  1) checked="checked" @endif/>
											<label for="q5_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q5" type="radio" value="2" id="q5_opt2" @if(old('q5') ==  2) checked="checked" @endif/>
											<label for="q5_opt2">Agree</label>
										</p>
										<p>
											<input name="q5" type="radio" value="3" id="q5_opt3" @if(old('q5') ==  3) checked="checked" @endif/>
											<label for="q5_opt3">Neutral</label>
										</p>
										<p>
												<input name="q5" type="radio" value="4" id="q5_opt4" @if(old('q5') ==  4) checked="checked" @endif/>
												<label for="q5_opt4">Disagree</label>
										</p>
										<p>
												<input name="q5" type="radio" value="5" id="q5_opt5" @if(old('q5') ==  5) checked="checked" @endif/>
												<label for="q5_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q6.</strong> Encouraged innovative and creative thinking</p>
									@if($errors->has('q6'))
										<p class="red-text">{!! $errors->first('q6') !!}</p>
									@endif
									<p>
											<input name="q6" type="radio" value="1" id="q6_opt1" @if(old('q6') ==  1) checked="checked" @endif/>
											<label for="q6_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q6" type="radio" value="2" id="q6_opt2" @if(old('q6') ==  2) checked="checked" @endif/>
											<label for="q6_opt2">Agree</label>
										</p>
										<p>
											<input name="q6" type="radio" value="3" id="q6_opt3" @if(old('q6') ==  3) checked="checked" @endif/>
											<label for="q6_opt3">Neutral</label>
										</p>
										<p>
												<input name="q6" type="radio" value="4" id="q6_opt4" @if(old('q6') ==  4) checked="checked" @endif/>
												<label for="q6_opt4">Disagree</label>
										</p>
										<p>
												<input name="q6" type="radio" value="5" id="q6_opt5" @if(old('q6') ==  5) checked="checked" @endif/>
												<label for="q6_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q7.</strong> Given an oppurtunity to work on new technology</p>
									@if($errors->has('q7'))
										<p class="red-text">{!! $errors->first('q7') !!}</p>
									@endif
									<p>
											<input name="q7" type="radio" value="1" id="q7_opt1" @if(old('q7') ==  1) checked="checked" @endif/>
											<label for="q7_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q7" type="radio" value="2" id="q7_opt2" @if(old('q7') ==  2) checked="checked" @endif/>
											<label for="q1_opt2">Agree</label>
										</p>
										<p>
											<input name="q7" type="radio" value="3" id="q7_opt3" @if(old('q7') ==  3) checked="checked" @endif/>
											<label for="q7_opt3">Neutral</label>
										</p>
										<p>
												<input name="q7" type="radio" value="4" id="q7_opt4" @if(old('q7') ==  4) checked="checked" @endif/>
												<label for="q7_opt4">Disagree</label>
										</p>
										<p>
												<input name="q7" type="radio" value="5" id="q7_opt5" @if(old('q7') ==  5) checked="checked" @endif/>
												<label for="q7_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q8.</strong> Tasks and problem statement given were challenging</p>
									@if($errors->has('q8'))
										<p class="red-text">{!! $errors->first('q8') !!}</p>
									@endif
									<p>
											<input name="q8" type="radio" value="1" id="q8_opt1" @if(old('q8') ==  1) checked="checked" @endif/>
											<label for="q8_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q8" type="radio" value="2" id="q8_opt2" @if(old('q8') ==  2) checked="checked" @endif/>
											<label for="q8_opt2">Agree</label>
										</p>
										<p>
											<input name="q8" type="radio" value="3" id="q8_opt3" @if(old('q8') ==  3) checked="checked" @endif/>
											<label for="q8_opt3">Neutral</label>
										</p>
										<p>
												<input name="q8" type="radio" value="4" id="q8_opt4" @if(old('q8') ==  4) checked="checked" @endif/>
												<label for="q8_opt4">Disagree</label>
										</p>
										<p>
												<input name="q8" type="radio" value="5" id="q8_opt5" @if(old('q8') ==  5) checked="checked" @endif/>
												<label for="q8_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q9.</strong> Inculcated a habit of thinking outside the box</p>
									@if($errors->has('q9'))
										<p class="red-text">{!! $errors->first('q9') !!}</p>
									@endif
									<p>
											<input name="q9" type="radio" value="1" id="q9_opt1" @if(old('q9') ==  1) checked="checked" @endif/>
											<label for="q9_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q9" type="radio" value="2" id="q9_opt2" @if(old('q9') ==  2) checked="checked" @endif/>
											<label for="q9_opt2">Agree</label>
										</p>
										<p>
											<input name="q9" type="radio" value="3" id="q9_opt3" @if(old('q9') ==  3) checked="checked" @endif/>
											<label for="q9_opt3">Neutral</label>
										</p>
										<p>
												<input name="q9" type="radio" value="4" id="q9_opt4" @if(old('q9') ==  4) checked="checked" @endif/>
												<label for="q9_opt4">Disagree</label>
										</p>
										<p>
												<input name="q9" type="radio" value="5" id="q9_opt5" @if(old('q9') ==  5) checked="checked" @endif/>
												<label for="q9_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q10.</strong> Improved self confidence and self-esteem</p>
									@if($errors->has('q10'))
										<p class="red-text">{!! $errors->first('q10') !!}</p>
									@endif
									<p>
											<input name="q10" type="radio" value="1" id="q10_opt1" @if(old('q10') ==  1) checked="checked" @endif/>
											<label for="q10_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q10" type="radio" value="2" id="q10_opt2" @if(old('q10') ==  2) checked="checked" @endif/>
											<label for="q10_opt2">Agree</label>
										</p>
										<p>
											<input name="q10" type="radio" value="3" id="q10_opt3" @if(old('q10') ==  3) checked="checked" @endif/>
											<label for="q10_opt3">Neutral</label>
										</p>
										<p>
												<input name="q10" type="radio" value="4" id="q10_opt4" @if(old('q10') ==  4) checked="checked" @endif/>
												<label for="q10_opt4">Disagree</label>
										</p>
										<p>
												<input name="q10" type="radio" value="5" id="q10_opt5" @if(old('q10') ==  5) checked="checked" @endif/>
												<label for="q10_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q11.</strong> The engagement with e-Yantra team was encouraging and helpful</p>
									@if($errors->has('q11'))
										<p class="red-text">{!! $errors->first('q11') !!}</p>
									@endif
									<p>
											<input name="q11" type="radio" value="1" id="q11_opt1" @if(old('q11') ==  1) checked="checked" @endif/>
											<label for="q11_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q11" type="radio" value="2" id="q11_opt2" @if(old('q11') ==  2) checked="checked" @endif/>
											<label for="q11_opt2">Agree</label>
										</p>
										<p>
											<input name="q11" type="radio" value="3" id="q11_opt3" @if(old('q11') ==  3) checked="checked" @endif/>
											<label for="q11_opt3">Neutral</label>
										</p>
										<p>
												<input name="q11" type="radio" value="4" id="q11_opt4" @if(old('q11') ==  4) checked="checked" @endif/>
												<label for="q11_opt4">Disagree</label>
										</p>
										<p>
												<input name="q11" type="radio" value="5" id="q11_opt5" @if(old('q11') ==  5) checked="checked" @endif/>
												<label for="q11_opt5">Strongly Disagree</label>
										</p>
									</div>
									<div class="section">
				<p><strong>Q12.</strong> Given me a positive attitude towards solving problems</p>
									@if($errors->has('q12'))
										<p class="red-text">{!! $errors->first('q12') !!}</p>
									@endif
									<p>
											<input name="q12" type="radio" value="1" id="q12_opt1" @if(old('q12') ==  1) checked="checked" @endif/>
											<label for="q12_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q12" type="radio" value="2" id="q12_opt2" @if(old('q12') ==  2) checked="checked" @endif/>
											<label for="q12_opt2">Agree</label>
										</p>
										<p>
											<input name="q12" type="radio" value="3" id="q12_opt3" @if(old('q12') ==  3) checked="checked" @endif/>
											<label for="q12_opt3">Neutral</label>
										</p>
										<p>
												<input name="q12" type="radio" value="4" id="q12_opt4" @if(old('q12') ==  4) checked="checked" @endif/>
												<label for="q12_opt4">Disagree</label>
										</p>
										<p>
												<input name="q12" type="radio" value="5" id="q12_opt5" @if(old('q12') ==  5) checked="checked" @endif/>
												<label for="q12_opt5">Strongly Disagree</label>
										</p>
									</div>
														<div class="section">
				<p><strong>Q13.</strong> Helped in assigning priorities</p>
									@if($errors->has('q13'))
										<p class="red-text">{!! $errors->first('q13') !!}</p>
									@endif
									<p>
											<input name="q13" type="radio" value="1" id="q13_opt1" @if(old('q13') ==  1) checked="checked" @endif/>
											<label for="q13_opt1">Strongly Agree</label>
										</p>
										<p>
											<input name="q13" type="radio" value="2" id="q13_opt2" @if(old('q13') ==  2) checked="checked" @endif/>
											<label for="q13_opt2">Agree</label>
										</p>
										<p>
											<input name="q13" type="radio" value="3" id="q13_opt3" @if(old('q13') ==  3) checked="checked" @endif/>
											<label for="q13_opt3">Neutral</label>
										</p>
										<p>
												<input name="q13" type="radio" value="4" id="q13_opt4" @if(old('q13') ==  4) checked="checked" @endif/>
												<label for="q13_opt4">Disagree</label>
										</p>
										<p>
												<input name="q13" type="radio" value="5" id="q13_opt5" @if(old('q13') ==  5) checked="checked" @endif/>
												<label for="q13_opt5">Strongly Disagree</label>
										</p>
									</div>
				
				<div class="section">
					<div class="input-field col s12">
						<textarea id="q14" name="q14" class="materialize-textarea">{{old('q14')}}</textarea>
						<label for="q14"><strong>Q14.</strong> Can you give us an example of an instance of any of the above?</label>
						@if($errors->has('q14'))
							<span class="red-text">{!! $errors->first('q14') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="q15" name="q15" class="materialize-textarea">{{old('q15')}}</textarea>
						<label for="q15"><strong>Q15.</strong> What impact did e-Yantra have on your life?</label>
						@if($errors->has('q15'))
							<span class="red-text">{!! $errors->first('q15') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="q15" name="q16" class="materialize-textarea">{{old('q16')}}</textarea>
						<label for="q15"><strong>Q16.</strong> What were the problems you faced during e-Yantra competitions and how might they be improved?</label>
						@if($errors->has('q16'))
							<span class="red-text">{!! $errors->first('q16') !!}</span>
						@endif
					</div>
				</div>
				<div class="section">
					<div class="input-field col s12">
						<textarea id="q17" name="q17" class="materialize-textarea">{{old('q17')}}</textarea>
						<label for="q17"><strong>Q17.</strong> Suggestions for how else e-Yantra might have improved your experience?</label>
						@if($errors->has('q17'))
							<span class="red-text">{!! $errors->first('q17') !!}</span>
						@endif
					</div>
				</div>
				<div class="row">
 				<button class="btn waves-effect waves-light" type="submit" name="fdbcksave" id="fdbcksave">Save
    			<i class="material-icons right">send</i>
  				</button>

  				</div>

</form>