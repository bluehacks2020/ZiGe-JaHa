<?php include 'includes/header.php'?>
<body>
	<title> Register </title>
	<section class="content-wrapper">
		<section class="pl-10 pr-10 container pt-20 form-holder">
			<div class="panel panel-body">
				<form id="submit_form" action="<?= base_url()?>user/usercontroller/save" method="post" enctype="multipart/form-data">
					<div class="panel panel-inverted">
					
						<center> <p class="fw-900 fs-32">  Personal Information  </p> 

						<?php 

						 ?>
						 <input type="hidden" name="type" value="1">
						<img id="image-profile" class="img img-circle mb-30" 
						src="<?php echo base_url();?>img/image-default.jpg" width="150px" height="150px"> 

						<div class="clearfix"> </div>

						<input id="read-url" name="photo" type="file" onchange="preview_image(event)">

						</center>

						<div class="clearfix"> </div>

						<div class="panel-heading">
							<div class="fw-900">Please fill up all fields with 
							(<font color="red">*</font>): </div> 
						</div>

					</div>

				<!-- <form id="submit_form" action="/cont/register" method="get" enctype="multipart/form-data"> -->

						<!-- <input class="" type="img"> -->

						<!--<input type="file" accept=".jpg, .png" required="true"> -->
 
						<div class="clearfix"> </div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> First Name: <font color="red">*</font> </label>
							<input name="first_name" class="pl-20 form-control"type="text" placeholder="e.g. Maria">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Middle Name: <font color="red">*</font> </label>
							<input name="middle_name" class="pl-20 form-control"type="text" placeholder="e.g. Habon">
						</div>
							
						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Last Name: <font color="red">*</font> </label>
							<input name="last_name" class="pl-20 form-control"type="text" placeholder="e.g. Jimenez">
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Birthdate: <font color="red">*</font> </label>
							<input name="birthDate" id="birthDate" type="text" placeholder="mm/dd/yyyy" class="form-control">
						</div>


						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Gender: </label>
							<select name="gender" class="form-control">
								<option value="1">Male</option>
								<option value="2">Female</option>
								<option value="3">Gay</option>
								<option value="4">Lesbian</option>
								<option value="5">Prefer not to say</option>
							</select>
						</div>

						<!-- <div class="form-group col-md-1 col-xs-12 col-sm-12 col-lg-1"> </div> -->

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Phone Number: </label>
							<input name="phoneNumber" class="pl-20 form-control"type="text">
						</div>

						<div class="clearfix"></div>

						<div class="form-group col-md-6 col-xs-12 col-sm-12 col-lg-6">
							<label class="control-label label-color"> Address: </label>
							<input name="address" class="pl-20 form-control"type="text">
						</div>
						<div class="clearfix"></div>
					
						<div class="panel-heading"> </div>
						<div class="clearfix"></div>

						<div class="panel panel-inverted">
					
							<center> 
								<p class="fw-900 fs-32">  
									Account Information  
								</p> 
							</center>

							<div class="panel-heading">
								
							</div>
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Email: </label>
							<input name="email" class="pl-20 form-control"type="text">
						</div>
						
						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> 
								Password: 
							</label>
							<input name="password" class="pl-20 form-control" type="password">
						</div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> 
								Confirm Password: 
							</label>
							<input name="confirmPassword" class="pl-20 form-control"type="password">
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-8 col-xs-12 col-sm-12 col-lg-8 pl-50 pt-20">

							<input type="checkbox" class="pt-50 pl-100 pr-20" id= "notif-phone" name="notif-phone">
							<label for="notif-phone">Do you want to receive notifications through e-mail and/or phone? </label>
						</div>

						<div class="form-group col-md-8 col-xs-12 col-sm-12 col-lg-8 pl-50">
							<input type="checkbox" class="pt-50 pl-100 pr-30" id="tos" name="tos">
							<label for="tos"> 
								I accept the Terms of Use & Privacy Settings. 
							<label>
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-2 col-xs-8 col-sm-8 col-lg-2 pl-50">
							<input type="submit" class="form-control">
						</div>
				</form>
			</div>
		</section>
	</section>

	<script src="<?php echo base_url(); ?>lib/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>lib/bootstrapValidator.min.js"></script>
	<!-- <script src="<?php echo base_url();?>js/regval.js"></script> -->
	<script src="<?php echo base_url();?>js/viewUsers.js"></script>
</body>




<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#fileName').val(fileName);
        });
    });
</script>



</html>

<script type="text/javascript" src="<?php echo base_url(); ?>js/image.js"></script>