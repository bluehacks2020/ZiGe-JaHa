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
    <title>Discover Places</title>

    <!-- tab-icon -->
<!--     <link rel="icon" href="resource/icons/favicon.ico" /> -->

    <!-- layout frameworks -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/framework.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/discover.css" />
  </head>

  <body>

    <!-- staging -->
    <button class="test-btn" id="screen-size">screen size</button>

    <!-- preloader -->
    <div class="loading-page">
      <div class="loader-spinner"></div>
    </div>

		<div class="dis-header">

      <span id="openMenu">
        <div></div><div></div><div></div>
      </span>

      DISCOVER PLACES IN THE PHILIPPINES

		</div>

		<div class="dis-nav">
      <span id="closeNav"><img src="<?php echo base_url();
?>img/icons/close-btn.png" alt="Close"></span>

      <div class="nav-user-space">

        <img src="<?= !empty($_SESSION['photo']) ? base_url().'img/'.$_SESSION['photo'] : base_url().'img/users/default-user-icon.png'; ?>">
        <span><?= !isset($_SESSION['id']) ? 'You are logged as guest' : $_SESSION['first_name']. $_SESSION['last_name'] ?></span>
        <a href="<?=base_url()?>welcome/">LOG OUT</a>
      </div>

      <div class="nav-links-wrapper">
        <a href="<?php echo base_url(); ?>index.php">&nbsp;<img
src="<?=base_url()?>img/icons/home.png"> Home</a>
        <a href="<?php echo base_url(); ?>welcome/trips">&nbsp;<img
src="<?=base_url()?>img/icons/trips.png"> Coming
trips</a>
        <a href="<?php echo base_url(); ?>tourguides.php">&nbsp;<img
src="<?=base_url()?>img/icons/guide.png">Your tour
guide info</a>
      </div>
		</div>

		<div class="map-wrapper">

      <div class="dyk-section">
        <div class="dyk-header">
          Did you know? <img src="<?php echo base_url(); ?>img/icons/dyk.png"
alt="Facts about the
Philippines">
        </div>

        <div class="dyk-card1">
          <img src="<?php echo base_url(); ?>img/core/dyk1.jpg" alt="Battle of
Leyte">
          <div class="dyk-desc">
            The Philippines was the first country in Southeast Asia to gain
            independence after World War II, in 1945.
          </div>
        </div>

        <div class="dyk-card2">
          <img src="<?php echo base_url(); ?>img/core/dyk2.jpg" alt="Battle of
Leyte">
          <div class="dyk-desc">
            The world’s biggest pair of shoes was made in Marikina City,
            Philippines, in 2002. The wingtips measured about 17.4 feet (5.3 m)
            in length, 7.9 feet (2.4 m) in width, and almost 6.6
            feet (2 m) in   height.       Their   cost was 2   million
            Philippine pesos.
          </div>
        </div>

        <div class="dyk-card3">
          <img src="<?php echo base_url(); ?>img/core/dyk3.jpg" alt="Battle of
Leyte">
          <div class="dyk-desc">
            The Philippines is the only country in the world whose flag is
            hoisted upside down when the country is at war.
          </div>
        </div>

      </div>


      <div class="main-map">

        <div class="content-head">
          Hover blue points on the map to see destination's top spots! Just
          click when you're ready to book a trip or see more info. <br />
          <img src="<?php echo base_url(); ?>img/icons/hover.png" alt="Hover
your mouse" />
        </div>

        <div class="img-sticky">
        <div class="img-wrapper">
          <img src="<?php echo base_url(); ?>img/core/phmap.jpg" alt="Map of the
Philippines">
          <button class="region-btn" id="reg_4b" value="4b_id">&nbsp;</button>
          <button class="region-btn" id="reg_ncr" value="4b_id">&nbsp;</button>
        </div>
        </div>

      </div>

      <div class="map-legends">
        <div class="legend-header">
          Map Legends : <img src="<?php echo base_url(); ?>img/icons/legend.png"
alt="Legends of the
Map">
        </div>

        <div class="legend-wrapper">
          <div class="legends1">Ilocos Region</div>
          <div class="legends2">Cagayan Valley</div>
          <div class="legends3">Cordillera Administrative</div>
          <div class="legends4">Central Luzon</div>
          <div class="legends5">Calabarzon</div>
          <div class="legends6">Mimaropa</div>
          <div class="legends7">Bicol Region</div>
          <div class="legends8">Western Visayas</div>
          <div class="legends9">Cenral Visayas</div>
          <div class="legends10">Eastern Visayas</div>
          <div class="legends11">Zamboanga Peninsula</div>
          <div class="legends12">Northern Mindanao</div>
          <div class="legends13">Davao Region</div>
          <div class="legends14">Soccsksargen</div>
          <div class="legends15">Caraga Region</div>
          <div class="legends16">BARMM</div>
          <div class="legends17">NCR</div>
        </div>

      </div>

		</div>

		<!-- hover cards -->
    <div class="hover-cards-wrapper">

      <div class="hover-card1">
        <div class="card-img-wrapper">
          <img src="<?php echo base_url(); ?>img/core/feature1.jpg" alt="Some
facts">
          <span class="img-title">Photo Title</span>
        </div>

        <div class="card-content">
          One simply cannot go to Puerto Princesa without having going on a tour
          of the Underground River. A UNESCO World Heritage Site and one of the
          New 7 Wonders of Nature, it's one of the world's longest underground
          rivers. The stalactite and stalagmite formations within its caves are
          stunning and should not be missed.
        </div>

        <div class="card-footer">
          <button>Learn more</button>
          <button class="scnd-btn">Book a trip now</button>
        </div>
      </div>

      <div class="hover-card2">
        <div class="card-img-wrapper">
          <img src="<?php echo base_url(); ?>img/core/feature2.jpg" alt="Some
facts">
          <span class="img-title">Photo Title</span>
        </div>

        <div class="card-content">
          A usual side trip after the Underground River tour is the Mangrove
          Paddleboat Tour. Taking place on a river just near the underground
          river, this guided activity takes you to see Sabang Mangrove Forest
          and educates you about the environmental importance of the mangroves.
        </div>

        <div class="card-footer">
          <button>Learn more</button>
          <button class="scnd-btn">Book a trip now</button>
        </div>
      </div>

      <div class="hover-card3">
        <div class="card-img-wrapper">
          <img src="<?php echo base_url(); ?>img/core/feature3.jpg" alt="Some
facts">
          <span class="img-title">Photo Title</span>
        </div>

        <div class="card-content">
          While Sabang Beach serves as the port for boats that can take you to
          the Underground River entrance, it's also a beach that is worth
          visiting. Featuring a long shoreline that is dotted with restaurants
          and resorts, it's also a nice place to get your dose of sun, sand,
          and sea.
        </div>

        <div class="card-footer">
          <button>Learn more</button>
          <button class="scnd-btn">Book a trip now</button>
        </div>
      </div>

    </div>



		<div class="booking-form">

      <span id="closeBook">
        <img src="<?php echo base_url(); ?>img/icons/close-btn.png" alt="Close">
      </span>

      <div class="booking-header-wrapper">

        <div class="booking-header">
          <img src="<?php echo base_url(); ?>img/icons/trips.png" alt="Book a
trip">
          Book a trip to
          <span id="location">LOCATION</span>.
        </div>

      </div>

      <div class="tour-guides-wrapper">
        <div class="guides-title">
          Our available TOUR GUIDES
          <img id="dropdown" src="<?php echo base_url(); ?>img/icons/down.png"
alt="DROPDOWN">
        </div>

        <div class="guides-icon-wrapper">

          <div class="guide">
            <img src="<?php echo base_url(); ?>img/users/guide3.jpg"
alt="Tour Guide">
            <span class="guide-name">Elisio Dapog</span>
          </div>

          <div class="guide">
            <img src="<?php echo base_url(); ?>img/users/guide2.jpg"
alt="Tour Guide">
            <span class="guide-name">Florena Baros</span>
          </div>

          <div class="guide">
            <img src="<?php echo base_url(); ?>img/users/guide1.jpg"
alt="Tour Guide">
            <span class="guide-name">Kristina Bala</span>
          </div>

          <div class="guide">
            <img src="<?php echo base_url(); ?>img/users/guide3.jpg"
alt="Tour Guide">
            <span class="guide-name">Elisio Dapog</span>
          </div>

        </div>

      </div>

      <div class="destinations">

        <div class="destination-title">
          Offered Iteneraries
          <img id="dropdown2" src="<?php echo base_url(); ?>img/icons/down.png"
alt="DROPDOWN">
        </div>

        <div class="destination-icon-wrapper">

        <ul>
          <li>Location 1 At Date and Time</li>
          <li>Location 2 At Date and Time</li>
          <li>Location 3 At Date and Time</li>
          <li>Lunch 1 At Date and Time</li>
          <li>Location 4 At Date and Time</li>
          <li>Location 5 At Date and Time</li>
        </ul>

        </div>

      </div>

      <div class="packages">
        <div class="packages-title">
          SELECT OR JOIN A PAX!
        </div>

        <div class="packages-wrapper">

          <div class="pax-wrapper">
            <div class="pax-icon">7/12</div>
            <div class="tour_date">2020-02-28</div>
            <button class="pax" value="4">Join here</button>
          </div>

          <div class="pax-wrapper">
            <div class="pax-icon">8/12</div>
            <div class="tour_date">2020-03-01</div>
            <button class="pax" value="4">Join here</button>
          </div>

          <div class="pax-wrapper">
            <div class="pax-icon">5/8</div>
            <div class="tour_date">2020-03-02</div>
            <button class="pax" value="4">Join here</button>
          </div>

          <div class="pax-wrapper">
            <div class="pax-icon">2/12</div>
            <div class="tour_date">2020-03-06s</div>
            <button class="pax" value="4">Join here</button>
          </div>

        </div>

        <button id="newPax">Create a new Pax!</button>

      </div>

		</div>

    <div class="modal-book">
        <div class="modal-wrapper">
          <div class="modal-book-content">

            <div class="modal-header">Book a tour now!</div>

            <div class="tour-info">
              <div class="tour_name">TOUR NAME : Palawan Escapade</div>
              <div class="tour_guide">Elisio Dapog</div>
              <div class="tour_date">2020-03-04</div>
              <div class="tour_pax">8/12 in slots</div>
              <div class="tour_price">P 200/person </div>
              <input name="ticket" type="number" name="book" placeholder="Number of tickets.">
              <button type="submit">BOOK NOW</button>
            </div>

            <span class="closeBook"><img src="<?php echo base_url(); ?>img/icons/close-btn.png"></span>
            
          </div>

        </div>
    </div>

    <!-- JS frameworks/libs -->
    <script src="<?php echo base_url(); ?>js/lib/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/lib/framework.js"></script>
    <script>
      var tourGuides = $(".guides-title");
      var tourDesti = $(".destination-title");

      var payModal = $(".modal-book");
      var openPay = $(".pax");
      var closePay = $(".closeBook");

      var openNav = $("#openMenu");
      var navSection = $(".dis-nav");

      var region = $(".region-btn");
      var bookings = $(".booking-form");

      var closeNav = $("#closeNav");
      var closeBook = $("#closeBook");

      var hoverCardsWrapper = $(".hover-cards-wrapper");

      /* NAVIGATION */
      openNav.click(function(){
        navSection.fadeIn(150);
      });
      closeNav.click(function(){
        navSection.fadeOut(150);
      });

      // show booking form on click
      region.click(function(e){
        bookings.fadeIn(150);

        e.preventDefault();

        var regionid = this.id;
        // query to database [regionid]

      openPay.click(function(){
        payModal.fadeIn(150);
      });
      closePay.click(function(){
        payModal.fadeOut(150);
      });

      });
      closeBook.click(function(){
        bookings.fadeOut(150);
        hoverCardsWrapper.fadeOut(150);
      });
      //show cards on hover
      region.click(function(e){

        // get element id
        e.preventDefault();
        hoverCardsWrapper.fadeIn(150);
      });

      hoverCardsWrapper.click(function(){
        //unload cards
        hoverCardsWrapper.fadeOut(150);
      });

      tourGuides.click(function(){
        if ($("#dropdown").attr("src") == "<?php echo base_url(); ?>img/icons/down.png") {
          $(".guides-icon-wrapper").css("height","auto");
          $("#dropdown").attr("src","<?php echo base_url(); ?>img/icons/up.png");
        }
        else {
          $(".guides-icon-wrapper").css("height","0");
          $("#dropdown").attr("src","<?php echo base_url(); ?>img/icons/down.png");
        }
      });

      tourDesti.click(function(){
        if ($("#dropdown2").attr("src") == "<?php echo base_url(); ?>img/icons/down.png") {
          $(".destination-icon-wrapper").css("height","auto");
          $("#dropdown2").attr("src","<?php echo base_url(); ?>img/icons/up.png");
        }
        else {
          $(".destination-icon-wrapper").css("height","0");
          $("#dropdown2").attr("src","<?php echo base_url(); ?>img/icons/down.png");
        }

      });

      $(".scnd-btn").click(function(){
        bookings.fadeIn(150);
        hoverCardsWrapper.fadeOut(150);
      });





    </script>


  </body>
</html>
