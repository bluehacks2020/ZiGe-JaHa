<?php include 'includes/header.php'; ?>

<body>
  <section id="container">
    <!--header start-->
    <?php include 'includes/nav.php' ?>
    <?php include 'includes/admin_sidebar.php' ?>
  
    <!--main content start-->
     <section id="main-content">
      <section class="wrapper site-min-height">
      	
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Pending Tourguide Requests</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-user"></i> Name</th>
                    <th class="hidden-phone"><i class="fa fa-location-arrow"></i> Address</th>
                    <th><i class=" fa fa-pagelines"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($tourguides as $key => $value){
                        if($_SESSION['id'] != $value['user_id'])
                          echo '<tr>
                              <td>'.$value['first_name'].' '.$value['last_name'].'</td>
                              <td>'.$value['address'].'</td>
                              <td>
                                <a href="'.base_url().'user/admin/approve" title="Approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="'.base_url().'user/admin/viewUser?id='.$value['user_id'].'" title="View"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                                <a href=# data-href="'.base_url().'user/admin/delete?id='.$value['user_id'].'" title="Decline" data-toggle="modal" data-target="#decline"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                              </td>
                          </tr>';
                    }

                   ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
      </section>
    </section>
    <!--main content end-->
  <?php include 'includes/modals.php' ?>  
  <?php include 'includes/footer.php' ?>