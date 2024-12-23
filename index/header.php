<header class="header-v2">
			<div class="top-header">
                <div class="container-fluid">
                    <ul class="contacts">
                        <li><i class="fa fa-phone"></i>+1 (800) 456 37 96</li>
                        <li><a href="https://livewp.site/cdn-cgi/l/email-protection#167f7870795675797b6677786f3875797b"><i class="fa fa-envelope"></i><span class="__cf_email__" data-cfemail="41282f272e01222e2c31202f386f222e2c">[email&#160;protected]</span></a></li>
                    </ul>
                
                	<ul class="socials">
                		<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
                		<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                		<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                		<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                	</ul>
                </div>
            </div>

            <div class="bottom-header">
            	<div class="container-fluid">
            		<span class="mobile-navigation-toggle hidden-md hidden-lg">
						<span class="menui top-menu"></span>
						<span class="menui mid-menu"></span>
						<span class="menui bottom-menu"></span>
					</span>

            		<div class="logo">
            			<a href="index.php"><span>hcs.com</span></a>
            		</div>
				   	
				   	<nav class="main-nav">
					    <ul class="menu">
					        <li class="menu-item menu-item-has-children  current-menu-parent">
					            <a href="index.php">Home</a>
					             
					        </li>
					        <li class="menu-item menu-item-has-children current-menu-parent">
					            <a href="view_labour.php">View Labour</a>
					           
					        </li>
							<li class="menu-item menu-item-has-children  current-menu-parent">
							    <a href="view_quatation.php">View Quotation</a>
							     
							</li>
							<li class="menu-item menu-item-has-children  current-menu-parent">
							    <a href="#">About Us</a>
							   
							</li>
							<li class="menu-item menu-item-has-children  current-menu-parent">
							    <a href="view_request.php">Request</a>
							   
							</li>
					</nav>

			   		<ul class="actions" style="width:200px">
	                   <?php if(!isset($_SESSION['cid'])){ ?>
	                    <li class="custom-select">
							<span class="default"></i><span class="content">Login/Registration</span></span>
							<ul class="select-options dismiss">
								<li> <a href="http://localhost/home_construction/registration/login/labour_login.php">Labour login</a> </li>
								<li><a href="http://localhost/home_construction/registration/login/labour_reg.php">Labour Registration</a> </li>
							<li> <a href="http://localhost/home_construction/registration/login/client_login.php">Clint login</a> </li>
								<li><a href="http://localhost/home_construction/registration/login/client_reg.php">Client Registration</a> </li>
								
							</ul>
	                    </li>
	                <?php }else{?>
	                   <li class="custom-select"> <a href="../controller/clogout.php">logout</a>	</li>

<?php } ?>

	                  
	                </ul>
            	</div>
            </div>
		</header>