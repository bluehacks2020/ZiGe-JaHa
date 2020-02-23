<?php include 'includes/header.php'?>
<body>

	<section class="content-wrapper">
		<section class="pl-10 pr-10 container pt-50 form-holder">
			<div class="panel panel-body">

				<div class="panel panel-inverted">
					<p class="pl-12"> Personal Information </p>
					<div class="panel-heading pl-50">
						Please fill up all fields with (<font color="red">*</font>):
					</div>
				</div>
				<form action="/cont/register" class="form-group" method="get" enctype="multipart/form-data">
											
						<!-- <input type="file" accept=".jpg, .png" required="true"> -->

						<div class="clearfix"> </div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> First Name: <font color="red">*</font> </label>
							<input class="pl-20 form-control"type="text" placeholder="e.g. Maria" required="true">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Middle Name: <font color="red">*</font> </label>
							<input class="pl-20 form-control"type="text" placeholder="e.g. Habon" required="true">
						</div>
							
						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Last Name: <font color="red">*</font> </label>
							<input class="pl-20 form-control"type="text" placeholder="e.g. Jimenez" required="true">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Birthdate: <font color="red">*</font> </label>
							<input id="birthDate"  placeholder="mm/dd/yyyy" class="form-control" required="true">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Phone Number: </label>
							<input class="pl-20 form-control"type="text" required="true">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Gender: </label>
							<input class="pl-20 form-control"type="text" required="true">
						</div>

						<div class="form-group col-md-6 col-xs-12 col-sm-12 col-lg-6">
							<label class="control-label label-color"> Allergies: </label>
							<input class="pl-20 form-control"type="text" required="true">
						</div>

						<div class="form-group col-md-6 col-xs-12 col-sm-12 col-lg-6">
							<label class="control-label label-color"> Address: </label>
							<input class="pl-20 form-control"type="text" required="true">
						</div>
						<div class="clearfix"></div>

						<div class="panel-heading"> </div>
						<div class="clearfix"></div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Email: </label>
							<input class="pl-20 form-control"type="text" required="true">
						</div>

						
						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> 
								Password: 
							</label>
							<input class="pl-20 form-control" type="password" required="true">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> 
								Confirm Password: 
							</label>
							<input class="pl-20 form-control"type="password" required="true">
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-8 col-xs-12 col-sm-12 col-lg-8 pl-50">
							<input type="checkbox" class="pt-50 pl-100 pr-20" name="notif">
							Do you want to receive notifications through e-mail and/or phone?
						</div>

						<div class="form-group col-md-8 col-xs-12 col-sm-12 col-lg-8 pl-50">
							<input type="checkbox" class="pt-50 pl-100 pr-30" name="notif">
							I accept the Terms of Use & Privacy Settings.
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-3 col-xs-12 col-sm-12 col-lg-3 pl-50">
							<input type="submit" class="form-control" name="notif" value="submit">
						</div>

				</form>
			</div>
			
		username
		password
		fullname
			given name
			middle initial
			last name
		phone number
		date of birth
		photo
		documents


		</section>
	</section>

	<script src="<?php echo base_url();?>"js/regval.js></script>

</body>
</html>