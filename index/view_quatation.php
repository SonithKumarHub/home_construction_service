<?php include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['cid'])){
	echo "<script> window.location='../registration/login/client_login.php'</script>";
} ?><!DOCTYPE html>
<html>

<!-- Mirrored from livewp.site/html/bricks/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 06:36:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
    <title>Home Construction Services</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="img/Untitled.png" type="image/x-icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/navigation.css">		
</head>
<body>
<style>
body {
  background-image: url('img/home.jpg');
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
	<!-- Page Wrapper -->
	<div id="page">
		
		<!-- Header -->
<?php
include 'header.php';
?>

		<!-- Main Content -->
		<div class="content-wrapper">
			<section class="content-section">
				<div class="container">
					<div class="section-header">
						<h1>Labours Quotations</h1>
						<span><i></i></span>
						<p style="color:white;">Cras finibus non magna sed varius. Fusce risus eros, dapibus vitae dignissim vel, consequat et dolor. Proin maximus posuere felis a tincidunt. Etiam sit amet ligula eget libero suscipit semper eget ornare magna. Phasellus non est ligula. Nulla auctor neque non tortor.</p>
					</div>
					
					<div class="row">
						<div class="col-md-9 col-content">
							<div class="cart-table">
								<form action="javascript:void(0)" method="post">
									<table class="products-table">
				                    	<thead>
				                            <tr>
				                            	
				                                <th style="color:white; font-size: 28px" class="product-item">Labour Name</th>
				                                <th style="color:white; font-size: 28px"class="product-quantity">Designation</th>
				                                <th style="color:white; font-size: 28px"class="product-subtotal">Date</th>
				                                <th style="color:white; font-size: 28px"class="product-subtotal">Time</th>
				                                <th style="color:white; font-size: 28px"class="product-subtotal">Address</th>
				                                <th style="color:white; font-size: 28px"class="product-subtotal">Quotations</th>
				                            </tr>
				                        </thead>
				                        <tbody>

<?php 
$cid=$_SESSION['cid'];
$abcd=$admin->ret("SELECT * FROM `request` INNER JOIN  quotation ON quotation.r_id=request.r_id where request.c_id='$cid' ");
while ($btn=$abcd->fetch(PDO::FETCH_ASSOC)) {
	$lid=$btn['l_id'];
	$xyz=$admin->ret("SELECT * FROM `labour` WHERE `l_id`='$lid' ");
                      $btn2=$xyz->fetch(PDO::FETCH_ASSOC);
?>

				                        	<tr class="cart_table_item">
				                            	
				                                
				                                <td class="product-price">
				                                    <span class="amount"style="color:white;"><?php echo $btn2['l_name'] ?></span>
				                                </td>
				                              
				                                <td class="product-subtotal">
				                                    <span class="amount"style="color:white;"><?php echo $btn2['designation'] ?></span>
				                                </td>
				                                  <td class="product-subtotal">
				                                    <span class="amount"style="color:white;"><?php echo $btn['date'] ?></span>
				                                </td>
				                                 <td class="product-subtotal">
				                                    <span class="amount"style="color:white;"><?php echo $btn['time'] ?></span>
				                                </td>
				                                 <td class="product-subtotal">
				                                    <span class="amount"style="color:white;"><?php echo $btn['address'] ?></span>
				                                </td>
				                                   <td class="product-subtotal">
				                                    <span class="amount"style="color:white;"><?php echo $btn['quotation'] ?></span>
				                                </td>
				                            </tr>
				                           <?php } ?>
				                        </tbody>
				                	</table>

					         

				               
				                </form>
				            
							</div>
						</div>

					
					</div>	
				</div>
			</section>
		</div>

		<!-- Footer -->
		<footer>
			<div class="top-footer">
				<div class="container">
					<div class="row isotope">
						<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
							<div class="widget widget_contact">
	                            <h4 class="widget-title">Contact Info</h4>
	                            <div class="widget-body">
	                            	<ul class="contact-info clean-list">
	                            		<li>
	                            			<span class="title">Address:</span>
		                            		<p>121 King Street, Melbourne</p>
		                            		<p>Victoria 3000 Australia</p>
	                            		</li>
	                            		<li>
	                            			<span class="title">Phone:</span>
		                            		<p>+1 (800) 456 37 96 - Office</p>
	                            		</li>
	                            		<li>
	                            			<span class="title">Email:</span>
		                            		<p><a href="https://livewp.site/cdn-cgi/l/email-protection#9cf9f1fdf5f0dcfbe8afe8f4f9f1f9efb2fff3f1"><span class="__cf_email__" data-cfemail="a1c4ccc0c8cde1c6d592d5c9c4ccc4d28fc2cecc">[email&#160;protected]</span></a></p>
	                            		</li>
	                            		<li>
	                            			<span class="title">Follow Us:</span>
		                            		<ul class="socials clean-list">
		                            			<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-behance-square"></i></a></li>
		                            			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		                            		</ul>
	                            		</li>
	                            	</ul>
	                            </div>
	                        </div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
							<div class="widget widget_instagram">
	                            <h4 class="widget-title">Follow Instagram</h4>
	                            <div class="widget-body">
	                            	<ul class="instagram-feed clean-list" data-instagram="6" data-instagram-username="mrgicucaus"></ul>
	                            </div>
	                        </div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
							<div class="widget widget_recent_posts">
	                            <h4 class="widget-title">Recent Posts</h4>
	                            <div class="widget-body">
	                            	<ul class="recent-posts clean-list">
	                            		<li>
	                            			<h4><a href="#">Standard gallery post</a></h4>
	                            			<ul class="post-meta">
												<li>June 09, 2018</li>
												<li>by <a href="#">Mixuha</a></li>
												<li><a href="#">3 Comments</a></li>
	                            			</ul>
	                            		</li>
	                            		<li>
	                            			<h4><a href="#">Post with couple photos inside</a></h4>
	                            			<ul class="post-meta">
												<li>June 09, 2018</li>
												<li>by <a href="#">Mixuha</a></li>
												<li><a href="#">3 Comments</a></li>
	                            			</ul>
	                            		</li>
	                            		<li>
	                            			<h4><a href="#">Smart quote post</a></h4>
	                            			<ul class="post-meta">
												<li>June 09, 2018</li>
												<li>by <a href="#">Mixuha</a></li>
												<li><a href="#">3 Comments</a></li>
	                            			</ul>
	                            		</li>
	                            	</ul>
	                            </div>
	                        </div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
							<div class="widget widget_subscribe">
	                            <h4 class="widget-title">Newsletter signup</h4>
	                            <div class="widget-body">
	                            	<p>Enter your email address to subscribe and receive notifications of new posts by email. Sed ut perspiciatis unde omnis iste natus.</p>
	                            	<form class="subscribe-form" action="javascript:void(0)">
										<input class="input-line" type="text" placeholder="Your Email">
										<input class="submit-btn" type="submit" value="subscribe">
	                            	</form>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-footer">
				<div class="container">
					<p class="alignleft align-left copyright">
						Copyright © 2020 Bricks. All Rights Reserved.
					</p>

					<p class="alignright align-right copyright">
						Premium Construction HTML Template by <a href="http://gt3themes.com/">GT3themes.com</a>
					</p>
				</div>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/nouislider.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/options.js"></script>
</body>

<!-- Mirrored from livewp.site/html/bricks/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 06:36:41 GMT -->
</html>