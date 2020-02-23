<!DOCTYPE html>
<html>
  <head>
   <!-- always on top -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0
shrink-to-fit=no" />
    <meta name="description" content="Tourism" />
    <meta name="keywords" content="Tourism booking" />
    <meta name="author" content="zigejaha" />

    <!-- page title -->
    <title>TaraG!</title>

    <!-- tab-icon -->
<!--     <link rel="icon" href="resource/icons/favicon.ico" /> -->

    <!-- layout frameworks -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/framework.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/welcome.css" />
  </head>

  <body>

    <!-- staging -->
    <button class="test-btn" id="screen-size">screen size</button>

    <!-- preloader -->
    <div class="loading-page">
      <div class="loader-spinner"></div>
    </div>

    <div class="header-wrapper">

      <div class="wel-header">

        <span class="header-title">Barkada tours on demand with your local tour
        guide! <!--that offers the best experience!--></span>

        <div class="user-space">

          <?php
              if(!isset($_SESSION['id']))
                echo '<button id="login">Log in</button>'
                      .' <button id="signup">Sign up</button>';

              else {
                echo '<a id="logout" href="#">LOGOUT</a><span id="fullname">'
                      .$_SESSION['full_name'].'</span><imgsrc="'
                      .base_url().'img/users/default-user-'
                      .'icon.png" alt="Active user">';
                if ($_SESSION["type"] == 3) {
                  echo "<a href='<?php echo base_url();
?>tourguides.php'>Tourguides</a>";
                  echo "<a href=".base_url()."welcome/trips'>Trips</a>";
                  echo "<a href=".base_url()."about.php'>About
us</a>";
                }
              }
          ?>

        </div>

        <div class="header-links">
          <div class="link-discover">
            <span class="link-desc">Explore tourist spots in the country!</span>
            <br />
            <a href="<?php echo base_url() ?>welcome/discover">Discover</a>
          </div>

          <div class="link-tours">
            <span class="link-desc">Book a tour now or join others, wonderful experience awaits!</span>
            <br />
            <a href="<?php echo base_url(); ?>tours.php">Barkada Tours</a>
          </div>

        </div>

        <div class="bg-credits">Photo by Shutterstock</div>

      </div>

    </div>


    <div class="content-wrapper">
      <div class="content-title">
        <h1>How it works</h1>
        <span>Call out your friends and discover local communities.</span>
        <div>
      </div>

      <div class="steps-wrapper">

        <div class="step">
          <img class="head-icon" src="<?php echo base_url();
?>img/icons/destination.png"
alt="DESTINATION">
          <div class="step-title">SELECT A DESTINATION</div>
          <div class="step-desc">Find your desired destination on the map.</div>
          <img src="<?php echo base_url(); ?>img/icons/step1.png" alt="Step 1">
        </div>

        <div class="step">
          <img class="head-icon" src="<?php echo base_url();
?>img/icons/guide.png"
alt="TOUR GUIDE">
          <div class="step-title">PICK A TOUR GUIDE</div>
          <div class="step-desc">Find a local tour guide, preferred iteneraries or get recommendations.</div>
          <img src="<?php echo base_url(); ?>img/icons/step2.png" alt="Step 2">
        </div>

        <div class="step">
          <img class="head-icon" src="<?php echo base_url();
?>img/icons/package.png"
alt="PACKAGE">
          <div class="step-title">CHOOSE A PACKAGE</div>
          <div class="step-desc">Join a pax or create a new one and wait
for others to register</div>
          <img src="<?php echo base_url(); ?>img/icons/step3.png" alt="Step 3">
        </div>

        <div class="step">
          <img class="head-icon" src="<?php echo base_url();
?>img/icons/pay.png"
alt="BOOK A TOUR!">
          <div class="step-title">BOOK A TOUR!</div>
          <div class="step-desc">Process payment and you're done! Bon
voyage!</div>
          <img src="<?php echo base_url(); ?>img/icons/step4.png" alt="Step 4">
        </div>

      </div>


    </div>

    <div class="footer"><?php echo "&copy; 2020 ZigeJaHa. All rights
reserved."; ?>
    </div>

    <div class="log-in-modal">
      <div class="log-in-wrapper">
        <div class="log-in-box">

          <div class="login-header">Welcome to <span class="emp-header">Tara
G!</span> Enter your credentials to get started.</div>

          <form method="post" action="<?= base_url()?>welcome/authenticate_user">

          <div class="form-login">
            <input name="username" type="text" placeholder="Email address" />
          </div>

          <div class="form-login">
            <input name="password" type="password" placeholder="Password" />
          </div>

          <div class="msg-box"><?php // echo $msgbox; ?></div>

          <div class="form-login">
            <button type="submit" name="log-in">LOG IN</button>
          </div>


          <div class="login-footer">Don't have an account yet?</div>
          <a href="<?php echo base_url(); ?>welcome/registration">Sign up now</a>

          </form>

        </div>

        <div class="button-wrapper">
          <img id="close-btn" src="<?php echo base_url();
?>img/icons/close-btn.png" alt="Close">
        </div>

      </div>
    </div>

    <!-- JS frameworks/libs -->
    <script src="<?php echo base_url(); ?>js/lib/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/lib/framework.js"></script>

    <!-- Login -->
    <script>
      var logInModal = $(".log-in-modal");

      var openLogIn = $("#login");
      var closeLogin = $("#close-btn");

      var signUpBtn = $("#signup");

      openLogIn.click(function(){
        logInModal.fadeIn(150);
      });

      closeLogin.click(function(){
        logInModal.fadeOut(150);
      });

      signUpBtn.click(function(){
        location.href = "<?=base_url()?>welcome/registration";
      });

    </script>

  </body>
</html>
