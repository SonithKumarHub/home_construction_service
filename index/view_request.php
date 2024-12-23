<?php
include '../config.php';
$admin=new Admin();
if(!isset($_SESSION['cid'])){
	echo "<script> window.location='../registration/login/client_login.php'</script>";
}?>
<!DOCTYPE html>
<html>

<!-- Mirrored from livewp.site/html/bricks/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 06:36:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Home Construction Services</title>
    <link rel="shortcut icon" href="img/Untitled.png" type="image/x-icon" />
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
  background-image: url('img/team.jpg');
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

	<!-- Page Wrapper -->
	<div id="page">
		
		<!-- Header -->
		<?php
		include 'header.php';?>


		<!-- Main Content -->
		<div class="content-wrapper">
			<section class="content-section">
				<div class="container">
					<div class="section-header">
						<h1>YOUR REQUESTS</h1>
						<span><i></i></span>
						<p></p>
					</div>
					
						<div class="col-md-9 col-content">
							<div class="cart-table">
								<form action="javascript:void(0)" method="post">
									<table class="products-table">
				                    	<thead style="background-color: #003151">
				                            <tr>
				                            	<th class="product-remove">&nbsp;</th>
				                                <th style="color:white; font-size: 28px"class="product-item">Name</th>
				                                <th style="color:white; font-size: 28px" class="product-price">Address</th>
				                                <th style="color:white; font-size: 28px" class="product-quantity">Phone</th>
				                                <th style="color:white; font-size: 28px" class="product-subtotal">Cost</th>
				                                <th style="color:white; font-size: 28px" class="product-subtotal"></th>
				                                <th style="color:white; font-size: 28px" class="product-subtotal"></th>
				                                
				                            </tr>
				                        </thead>
				                        <tbody>
				                        	<?php

				                        	 $str=$admin->ret("SELECT * FROM `request`");
				                        	 while($btn=$str->fetch(PDO::FETCH_ASSOC)){
                                     $lid=$btn['l_id'];
                                      $stp=$admin->ret("SELECT * FROM `labour` WHERE `l_id`='$lid'");
                                      $btm=$stp->fetch(PDO::FETCH_ASSOC);
				                        	 	?>
				                        	 
				                        	<tr class="cart_table_item">
				                            	<td class="product-remove">
				                                    <a class="remove_products" href="#"><td style="color:white; font-size: 28px"><?php echo $btm['l_name']?></td>
				                                    <td style="color:white; font-size: 28px" class="font-weight-600"><?php echo $btm['address']?>
                                                         </td>
                                                 <td style="color:white; font-size: 28px"><?php echo $btm['phone'] ?></td></a>
                                                  <td style="color:white; font-size: 28px"><?php echo $btm['cost']?></td>
                                              
                                                	
                                                	<?php

                                                	if($btn['status']==1){


                                                		?>
                                                		  <td><button class="btn btn-danger"style="background-color: green">APPROVED</button></td>

                                                		<?php
                                                	}elseif($btn['status']==2){
                                                		?>
 <td><button class="btn btn-danger"style="background-color: green">REJECTED</button></td>

                                                		<?php
                                                	}else{
                                                		?>
 <td><button class="btn btn-danger"style="background-color: green">INPROCESS</button></td>

                                                		<?php
                                                	}
                                                	?>
                                                
				                                </td>
				                        
				                         
				                              
				                            </tr>
				                  <?php }?>
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