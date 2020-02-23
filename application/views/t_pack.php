<?php include 'includes/header.php'?>
<body>
	<title> Register </title>
	<section class="content-wrapper">
		<section class="pl-10 pr-10 container pt-20 form-holder">
			<div class="panel panel-body">
				<form id="submit_form" action="<?= base_url()?>user/usercontroller/save" method="post" enctype="multipart/form-data">
					<div class="panel panel-inverted">
					
						<center> <p class="fw-900 fs-32">  Create a Tour Package  </p> </center>

						<div class="clearfix"> </div>

						<div class="panel-heading pt-50">
							<div class="fw-900">Please fill up all fields with 
							(<font color="red">*</font>): </div> 
						</div>

					</div>

				<!-- <form id="submit_form" action="/cont/register" method="get" enctype="multipart/form-data"> -->

						<!-- <input class="" type="img"> -->

						<!--<input type="file" accept=".jpg, .png" required="true"> -->
 
						<div class="clearfix"> </div>

						<div class="form-group col-md-5 col-xs-12 col-sm-12 col-lg-5">
							<label class="control-label label-color"> Name your package: <font color="red">*</font> </label>
							<input name="pack" class="pl-20 form-control"type="text" placeholder="Must be catchy">
						</div>

						<div class="clearfix"> </div>	

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<div class="clearfix"></div>
							<label class="control-label label-color">Select no. of participants 
								<font color="red">*</font> 
							</label>
							<div class="clearfix"> </div>
							<select class="col-md-4 col-lg-4 col-sm-12 col-xs-12 >				form-control form-control-3">
								<option value="8">8</option>
								<option value="12">12</option>
								<option value="20">20</option>
							</select>
						</div>

						<div class="clearfix"> </div>	

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Date: <font color="red">*</font> </label>
							<input name="date" id="Date" type="text" placeholder="mm/dd/yyyy" class="form-control">
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-4 col-xs-12 col-sm-12 col-lg-4">
							<label class="control-label label-color"> Itineraries: <font color="red">*</font> </label>
							<input name="Itineraries" id="Itineraries" type="text" class="form-control">
						</div>

						<div class="clearfix"> </div>

						<div class="form-group col-md-2 col-xs-8 col-sm-8 col-lg-2">
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
	<script src="<?php echo base_url();?>js/pack.js"></script>
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