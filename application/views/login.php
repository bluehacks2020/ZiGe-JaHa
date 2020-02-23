<?php include 'includes/header.php'?>
<body>
	<section class="content-wrapper">
		<?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible' role='alert'>
              <span type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></span>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
		<div class="content">
			<div class="col-md-4 col-xs-3">
				
			</div>
			
			<div class="col-md-4 pt-150 col-xs-6 col-lg-4">
				<div class="form-holder panel panel-inverted">
					<div class="form-content">
						<form action="<?= base_url()?>welcome/authenticate_user" method="post" class="login panel-body-blue panel-body" enctype="multipart/form-data">
							<center> 
								<label class="fs-32 control-label login-text">Log In </label>
							</center>
							<br>
							<div class="form-group">

								<input class="pl-20 col-md-4 form-control form-size-2 "type="text" placeholder="Email">

							</div>

							<br>
							<div class="form-group">
								<input name="password" class="pl-20 col-md-4 form-control mt-10 mb-50"type="text"  placeholder="Password">
							</div>

							<div class="form-group">
								<div class="col-md-4"> </div>
								<div class="col-md-4">
									<input type="submit" class="form-control mt-10" value="Log In">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</section>



</body>
</html>