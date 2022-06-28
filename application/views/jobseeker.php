 <div class="main-wrapper" style="margin: 50px">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form action="<?php echo base_url();?>Client/jobseeker" method="post" enctype="multipart/form-data">
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="assets/img/profile.jpg" >
                                    <div class="fileupload btn">
                                        <span class="btn-text">upload photo</span>
                                        <input class="upload"name="photo" type="file">
                                        <small><?php echo form_error('photo');?></small>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">First Name</label>
                                                <input type="text" class="form-control floating" name="first_name" >
                                                <small><?php echo form_error('first_name');?></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input type="text" class="form-control floating" name="last_name" >
                                                <small><?php echo form_error('last_name');?></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Birth Date</label>
                                                <div class="cal-icon">
                                                    <input name="birth_date" class="form-control floating datetimepicker" type="text" >
                                                    <small><?php echo form_error('birth_date');?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label name="gender" class="focus-label">Gendar</label>
                                                <select class="select form-control floating">
                                                    <option value="male selected">Male</option>
                                                    <option  value="female">Female</option>
                                                </select>
                                                <small><?php echo form_error('gender');?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Address</label>
                                    <input name="address" type="text" class="form-control floating" >
                                    <small><?php echo form_error('address');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">District</label>
                                    <input name="district" type="text" class="form-control floating" >
                                    <small><?php echo form_error('district');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">County</label>
                                    <input name="county" type="text" class="form-control floating" >
                                    <small><?php echo form_error('county');?></small>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Phone Number</label>
                                    <input name="phone_number" type="text" class="form-control floating" >
                                    <small><?php echo form_error('phone_number');?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Highest academic qualification</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Institution</label>
                                    <input name="institution" type="text" class="form-control floating" >
                                    <small><?php echo form_error('institution');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Sector</label>
                                    <input name="sector" type="text" class="form-control floating" >
                                    <small><?php echo form_error('sector');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Starting Date</label>
									<div class="cal-icon">
										<input name="starting_date" type="text" class="form-control floating datetimepicker" >
                                        <small><?php echo form_error('starting_Date');?></small>
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Complete Date</label>
									<div class="cal-icon">
										<input name="complete_date" type="text" class="form-control floating datetimepicker" >
                                        <small><?php echo form_error('complete_date');?></small>
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Degree</label>
                                    <input name="degree" type="text" class="form-control floating" >
                                    <small><?php echo form_error('degree');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Grade</label>
                                    <input name="grade" type="text" class="form-control floating" >
                                    <small><?php echo form_error('grade');?></small>
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                            <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Institute</a>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Experience Informations</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Company Name</label>
                                    <input name="company_name" type="text" class="form-control floating" >
                                    <small><?php echo form_error('company_name');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Location</label>
                                    <input name="location" type="text" class="form-control floating" >
                                    <small><?php echo form_error('location');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Job Position</label>
                                    <input name="job_position" type="text" class="form-control floating" >
                                    <small><?php echo form_error('job_position');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period From</label>
									<div class="cal-icon">
										<input name="period_from" type="text" class="form-control floating datetimepicker" >
                                        <small><?php echo form_error('period_from');?></small>
									</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Period To</label>
									<div class="cal-icon">
										<input name="period_to" type="text" class="form-control floating datetimepicker" >
                                        <small><?php echo form_error('period_to');?></small>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="add-more">
                            <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add More Experience</a>
                        </div>
                    </div>
                    <div class="text-center m-t-20">
                        <button class="btn btn-success btm-sm" type="submit">Save</button>
                    </div>
                </form>
            </div>
            
		</div>
    
	