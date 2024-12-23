<?php
include '../config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forms &rsaquo; Form Validation &mdash; Stisla</title>

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
          include 'header.php';
          ?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          
          <?php
          include 'sidebar.php';
          ?>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header"style="background-color: #003152">
            <h1 style="color:white; font-size: 28px">Payment</h1>
            <div class="section-header-breadcrumb">
              
            </div>
          </div>

          <div class="section-body">
           
            


            <div class="row">
           
              <div class="col-12 col-md-6 col-lg-6">
              
                <div class="card">
                  <form class="needs-validation" novalidate=""  action="../controller/pay.php" method="post">
                    <div class="card-header">
                      <h4>Report Form</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                      
                           <?php 
                           $lid=$_GET['lid'];
                       $lab=$admin->ret("SELECT * FROM `labour` WHERE `l_id`='$lid'");
                               $btn=$lab->fetch(PDO::FETCH_ASSOC);
                        ?>
                           <input type="text" readonly="" class="form-control"  value="<?php echo $btn['l_name'] ?>" required="">
 <input type="text" readonly="" class="form-control" name="lid" value="<?php echo $btn['l_id'] ?>" required="">
                       

                          <div class="invalid-feedback">
                            Please enter the date
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amonut</label>
                        <div class="col-sm-9">

                           <input type="text" readonly="" class="form-control" name="amt" value="<?php echo $_GET['amt'] ?>" required="">
                           <input type="hidden" class="form-control" name="rid" value="<?php echo $_GET['id'] ?>" required="">     
                            <div class="invalid-feedback">
                            <div class="invalid-feedback">
                            Please enter the date
                          </div>
                        </div>
                      </div>
                     
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
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