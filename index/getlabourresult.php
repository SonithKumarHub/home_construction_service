<?php
include '../config.php';

$admin = new Admin();

// $searchq = $_GET['q'];
// $data="SELECT * FROM `train` WHERE `tr_name` LIKE '".$searchq."%'  ORDER BY `tr_name` ASC" ;
// $val=$admin->ret($data);   
// $num = $val -> rowCount();
 
// if($num>0){

//     while($arow = $val->fetch(PDO::FETCH_ASSOC))
//     { 
   

                                          
                                          
                                           
												$searchq = $_GET['q'];
												$data="SELECT * FROM `labour` WHERE `l_name` LIKE '".$searchq."%'  ORDER BY `l_name` ASC" ;
												$val=$admin->ret($data);   
												$num = $val -> rowCount();
 
												if($num>0){

    											while($btn = $val->fetch(PDO::FETCH_ASSOC))
    											{ 
                                        ?>


						<!-- Image by https://unsplash.com/@hellolightbulb -->
							<div class="col-md-3 col-xs-6 isotope-item buildings">
								<div class="portfolio-box-circle masonry">
								
									<div class="image">
										<a href="#">
											<img src="../<?php echo $btn['image'] ?>" alt="portfolio box">
										</a>
									</div>
									<h6 class="title"><a href="#"><?php echo $btn['l_name'] ?></a></h6>
									<h6 class="title"><a href="#"><?php echo $btn['designation'] ?></a></h6>
									<h6 class="title">Rs.<a href="#"><?php echo $btn['cost'] ?></a></h6>
<?php if($btn['status']==3){ ?>
									<a href="#" class="btn yellow medium dark-hover" style="background-color:red">Booked</a>
<?php } else{?>
									<a href="book.php?lid=<?php echo $btn['l_id'] ?>" class="btn yellow medium dark-hover">Book</a>

<?php } ?>
									<ul class="categories clean-list">
										
									</ul>
								</div>
							</div>
				
				<!-- Intro Item -->

			

			
<?php }

 }else{
 	   echo '<br><b><center>No Result Found..!</center></b>';
 }


 ?>