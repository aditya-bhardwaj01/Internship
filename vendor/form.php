<form id="membership_apply_form" name="membership_apply_form">
										  <div class="row">
											   <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_name">Business Name<small>*</small></label>
												  <input id="form_bus" name="form_bus" type="text" placeholder="Company Name" required="" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123) || (event.charCode > 48 &amp;&amp; event.charCode < 57) || (event.charCode ==32))" onchange="Validcmpname()">
												</div>
											  </div>
											  <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_phone">Website URL <small>*</small></label>
												  <input id="form_url" name="form_url" required="" class="form-control" type="text" placeholder="www.yourdomain.com" onchange="ValidURL()">
												</div>
											  </div>
											</div>
											<div class="row">               
											   <div class="col-sm-6">
												 <div class="form-group">
												  <label for="form_post">Stage<small>*</small></label>
										<select required="" id="form_stage" name="form_stage" class="form-control" onchange="validate_stage()">
										<option value="">Please select Stage</option>
													<option value="Idea">Idea</option>
													<option value="Prototype">Prototype</option>
													<option value="Ready to Launch">Ready to Launch</option>
													<option value="Already Launched">Already Launched</option>
												  </select>
												</div>
											  </div>
											  <div class="col-sm-6">
													<div class="form-group">
										<label for="form_post">Industry<small>*</small></label>
										<select id="form_industry" name="form_industry" required="" class="form-control" onchange="validate_industry()">
											<option value="">Select Industry</option>
														<option value="Agriculture, Forestry, Fishing">Agriculture, Forestry, Fishing</option>
														<option value="Arts and Entertainment">Arts and Entertainment</option>
														<option value="Chemical/Process">Chemical/Process</option>
														<option value="Construction">Construction</option>
														<option value="Education &amp; Training">Education &amp; Training</option>
														<option value="Finance/Insurance">Finance/Insurance</option>
														<option value="Healthcare">Healthcare</option>
														<option value="Human Resource">Human Resource</option>
														<option value="Information Services and Technology">Information Services and Technology</option>           
														<option value="Law Enforcement">Law Enforcement</option>
														<option value="Hospitality">Hospitality</option>
														<option value="Manufacturing">Manufacturing</option>
											<option value="Media &amp; Advertisement">Media &amp; Advertisement</option>
														<option value="Mining, Oil &amp; Gas">Mining, Oil &amp; Gas</option>
														<option value="Non-Profit">Non-Profit</option>
														<option value="Pharmaceuticals">Pharmaceuticals</option>
														<option value="Real Estate">Real Estate</option>						
														<option value="Recruitment">Recruitment</option>
														<option value="Retail">Retail</option>
														<option value="Rural Development">Rural Development</option>
														<option value="Telecommuncations">Telecommuncations</option>
												<option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
														<option value="Transportation/Warehousing">Transportation/Warehousing</option>
														<option value="Utilities - Water/Power">Utilities - Water/Power</option>
												  </select>
											  </div>
											  </div>
											</div>
											
											<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
												  <label for="form_name">Business Location<small>*</small></label>
												  <input id="form_loc" name="form_loc" type="loc" placeholder="City, State" required="" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123) || (event.charCode > 48 &amp;&amp; event.charCode < 57) || (event.charCode ==32))" onchange="Validloc()">
												</div>
											  </div>
											  <div class="col-md-6">
											   <div class="form-group">
											  <label for="form_attachment">Upload Company Profile</label>
											  <input id="form_profile" name="form_profile" required="" class="file" type="file" multiple="" data-show-upload="false" onchange="ValidateSingleInputProfile(this);">
											  <small>Maximum upload file size: 12 MB</small>
											</div>
											</div>
											</div>
											   <h3 class="text-theme-colored mt-0 pt-5">Services Your are Interested In</h3>
										<div class="checkbox-group required">	   
										<div class="row">
										
										<div class="col-md-6">
											<label class="checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" name="service[]" value="Co-working Space">
															Co-working Space</label>
										</div>
										
										<div class="col-md-6">
														<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="service[]" value="Business Activites Updates">
											  Business Activites Updates  </label>
										  </div>
												  
										  </div>
										  <div class="row">
										  <div class="col-md-6">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="service[]" value="Consultation/Guidance">
												Consultation/Guidance </label>
										  </div>
											 <div class="col-md-6">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox1" name="service[]" value="Networking Opportunities">
												Networking Opportunities </label>
										  </div>
										 </div>
										</div> 
										 <h3 class="text-theme-colored mt-0 pt-5">Contact Person Details</h3>
										  <div class="row">
											  <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_name">Name <small>*</small></label>
												  <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control" onkeypress="return ((event.charCode > 64 &amp;&amp; event.charCode < 91) || (event.charCode > 96 &amp;&amp; event.charCode < 123))">
												</div>
											  </div>
											  <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_email">Email <small>*</small></label>
												  <input id="form_email" name="form_email" required="" class="form-control" type="email" placeholder="Enter Email" onchange="validateForm();">
												</div>
											  </div>
											</div>
										 <div class="row">               
											   <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_phone">Mobile <small>*</small></label>
												  <input id="form_phone" name="form_phone" required="" class="form-control" type="phone" placeholder="Enter Mobile no" onkeypress="return event.charCode > 47 &amp;&amp; event.charCode < 58;" pattern="[0-9]{10}">
												</div>
											  </div>
											  <div class="col-sm-6">
												<div class="form-group">
												  <label for="form_post">Role<small>*</small></label>
													<select required="" id="form_post" name="form_post" class="form-control" onchange="validate_role()">
													<option value="">Select Role</option>
													<option value="Managing Director">Managing Director</option>
													<option value="Director">Director</option>
													<option value="CEO">CEO</option>
													<option value="Employee">Employee</option>
												   </select>
												</div>
											  </div>
											</div>
											
											<div class="row">
													<div class="form-group">
													<div class="checkbox">
													<label>
													<input type="checkbox" required="">
														<a href="">I have read Terms &amp; Conditions</a></label>
													</div>
												</div>
										  </div>	
											<button class="btn btn-primary btn-cart mb-2"><i class="w-icon-cart"></i><span> Submit</span></button>										  
									 </form></div> 
									 </div>
