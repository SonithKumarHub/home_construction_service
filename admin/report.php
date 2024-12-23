<?php
include '../config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bootstrap Components &rsaquo; Table &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php
      include 'header.php'?>
      <div class="main-sidebar sidebar-style-2">
<?php
include 'sidebar.php'?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Request</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>

          <div class="section-body">

           <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Request ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Days</th>
                        <th>Request</th>
                        <th>Client ID</th>
                      </tr>
                      <?php
                      $from=$_POST['fromdat'];
                      $to=$_POST['todate'];
                      $xyz=$admin->ret("SELECT * FROM `request` INNER JOIN  `payment`  ON payment.rid=request.r_id    WHERE payment.p_date between '$from' AND '$to' ");
                      while($btn=$xyz->fetch(PDO::FETCH_ASSOC)){?>
                      <tr>
                                                <td><?php echo $btn['r_id'] ?></td>

                        <td><?php echo $btn['c_name'] ?></td>
                        <td class="font-weight-600"><?php echo $btn['address']?>
                    </td>
                        <td><?php echo $btn['phone']?></td>
                        <td><?php echo $btn['days']?></td>
                        <td><?php echo $btn['request']?></td>
                        <td><?php echo $btn['c_id']?></td>
                        
                       
                         <td><div class="badge badge-danger"><a href="../controller/delete_request.php?id=<?php echo $btn['r_id']?>"> delete</a></div></td>
                           
<?php
if($btn['status']==0){?>
  <td><div class="badge badge-danger"><a href="../controller/approve_request.php?id=<?php echo $btn['r_id']?>&status=1"> approve</a></div></td>
<?php
}else{?>

  <td><div class="badge badge-success"><a href="../controller/approve_request.php?id=<?php echo $btn['r_id']?>&status=0"> block</a></div></td>
<?php }
?>

                      </tr>
                     
                     <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>