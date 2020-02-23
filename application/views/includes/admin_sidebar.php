<aside>
  <div id="sidebar" class="nav-collapse ">
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>img/<?= $_SESSION['photo']?>" class="img-circle" width="80"></a></p>
      <h5 class="centered">Username</h5>
      <li>
        <a href="google_maps.html">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          </a>
      </li>
      <li>
        <a href="<?=base_url()?>user/admin/viewUsers">
          <i class="fa fa-map-marker"></i>
          <span>Users</span>
          </a>
      </li>
      <li>
        <a href="<?=base_url()?>user/admin/pendingRegistrations">
          <i class="fa fa-calendar"></i>
          <span>Pending registrations</span>
          </a>
      </li>
      <li>
        <a href="google_maps.html">
          <i class="fa fa-bookmark"></i>
          <span>Pending Iteneraries</span>
          </a>
      </li>
      <li>
        <a href="google_maps.html">
          <i class="fa fa-bookmark"></i>
          <span>List of Iteneraries</span>
          </a>
      </li>
      <li>
        <a href="<?= base_url()?>user/usercontroller/logout">
          <i class="fa fa-sign-out"></i>
          <span>Logout</span>
          </a>
      </li>

    </ul>
  </div>
</aside>