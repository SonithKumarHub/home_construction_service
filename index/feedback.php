
<?php
include '../config.php';
$admin=new Admin();
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from livewp.site/html/bricks/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 06:36:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
    <title>Bricks</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

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

	<!-- Page Wrapper -->
	<div id="page">
		
		<!-- Header -->
	<?php 
	include'header.php'?>

		<!-- Main Content -->
		<div class="content-wrapper">
			<section class="contact-section">
				<div class="container">
					<div class="section-header">
						<h1>Get in touch with us</h1>
						<span><i></i></span>
					
					</div>
					
					<div class="row">
						<div class="col-md-9 col-content" style="margin-left: 150px">
					

						

							<div class="contact_form">
								<div id="note"></div>
								<div id="fields">
									<form class="respond-form"  action="../controller/feedback.php" method="POST">
										<h6>Drop us a line</h6>
										<div class="row">
											<div class="col-md-6">
												
												<div class="input-line">
													<input type="text" name="name" placeholder="Name"  class="check-value" value="" required="" />

												</div>
												<div class="input-line">
													<input type="email" name="email" placeholder="Email" class="check-value" value="" required="" />
													
												</div>

												
											</div>
										</div>

										<div class="input-line textarea">
											<textarea class="check-value" name="feedback" placeholder="Type here"></textarea>

										</div>
										<input class="form-send btn yellow dark-hover" type="Submit" value="submit" required="">
									</form>
								</div>
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

<!-- Mirrored from livewp.site/html/bricks/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 06:36:41 GMT -->
</html>