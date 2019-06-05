<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "zam_mysql");
mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
	}
	$id='Việt Nam';
	$id1='Hàn Quốc';
	$id2='United States';

	?>
<?php include'header4.php'?>
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
					
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">New Artists <span class="new">New</span></h3>
									 
									<div class="clearfix"> </div>
								</div>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="myTab" class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Việt Nam</a></li>
								   <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hàn Quốc</a></li>
								   
								   <li role="presentation"><a href="#aumy" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Âu Mỹ</a></li>
								    <li role="presentation" class=""><a href="#khac" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Khác</a></li>
								</ul>
							
								<div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
								 	 <!-- /agileits -->
										<?php
										$query = "
										SELECT * FROM casy WHERE QueQuan='$id'
										";
										$result = mysqli_query($connect, $query);
										if(mysqli_num_rows($result) > 0)
										{
										
										foreach($result as $key){
												?>
												<div class="col-md-3 artist-grid">
										<a  href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><img src="student_image/<?php echo $key['HinhAnh']?>"></a>
										 
												<a class="art" href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><?php echo $key['TenCS'] ?></a>
										</div>
												
												<?php
										}
										}
										
										
										
										?>
								
									
									
											<div class="clearfix"> </div>
										</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									   <div class="browse-inner">
										 <?php
										$query = "
										SELECT * FROM casy WHERE QueQuan='$id1'
										";
										$result = mysqli_query($connect, $query);
										if(mysqli_num_rows($result) > 0)
										{
										
										foreach($result as $key){
												?>
												<div class="col-md-3 artist-grid">
										<a  href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><img src="student_image/<?php echo $key['HinhAnh']?>"></a>
										 
												<a class="art" href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><?php echo $key['TenCS'] ?></a>
										</div>
												
												<?php
										}
										}
										
										
										
										?>
									
								
									<div class="clearfix"> </div>
								</div>
								  </div>
									<div role="tabpanel" class="tab-pane fade" id="aumy" aria-labelledby="profile-tab">
									   <div class="browse-inner">
										 <?php
										$query = "
										SELECT * FROM casy WHERE QueQuan='$id2'
										";
										$result = mysqli_query($connect, $query);
										if(mysqli_num_rows($result) > 0)
										{
										
										foreach($result as $key){
												?>
												<div class="col-md-3 artist-grid">
										<a  href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><img src="student_image/<?php echo $key['HinhAnh']?>"></a>
										 
												<a class="art" href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><?php echo $key['TenCS'] ?></a>
										</div>
												
												<?php
										}
										}
										
										
										
										?>
									
								
									<div class="clearfix"> </div>
								</div>
								  </div>
									<div role="tabpanel" class="tab-pane fade" id="khac" aria-labelledby="profile-tab">
									   <div class="browse-inner">
										 <?php
										$query = "
										SELECT * FROM casy WHERE QueQuan !='$id' and QueQuan!='$id1' and QueQuan!='$id2'
										";
										$result = mysqli_query($connect, $query);
										if(mysqli_num_rows($result) > 0)
										{
										
										foreach($result as $key){
												?>
												<div class="col-md-3 artist-grid">
										<a  href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><img src="student_image/<?php echo $key['HinhAnh']?>"></a>
										 
												<a class="art" href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"><?php echo $key['TenCS'] ?></a>
										</div>
												
												<?php
										}
										}
										
										
										
										?>
									
								
									<div class="clearfix"> </div>
								</div>
								  </div>
								  
								  
								  
						 	 <!-- /agileinfo -->
						</div>
					<!--//End-albums-->
					
						<!--//discover-view-->
								<div class="albums fourth">
										<div class="tittle-head two">
											<h3 class="tittle">Suggestions <span class="new">View</span></h3>
											
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v11.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v22.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
												</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v33.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
												</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v44.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v55.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v66.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v77.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v88.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v99.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
												</div>
												<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v9.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v21.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v5.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>See now</h5></div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								<!--//discover-view-->
							<!--//music-left-->
							</div>
						<!--body wrapper start-->
						
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="single.php"><img src="images/v1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v3.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v4.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v5.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v6.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v6.jpeg" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
						<!-- /w3layouts-agile -->
					</div>
			  <!--body wrapper end-->
			      <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="radio.php">All Songs</a></li>
					  <li><a href="browse.php">Albums</a></li>
					  <li><a href="radio.php">New Collections</a></li>
					  <li><a href="blog.php">Blog</a></li>
					  <li><a href="contact.php">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.php">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					  <div class="footer-grid">
						<h3>Email</h3>
						
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;000-111-555</p>
						<p class="email">Email : &nbsp;<span><a href="webgroup@yahoo.com">webgroup@yahoo.com</a></span></p>	
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2019 ZaM Music. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Angel & Friends.</a></p>
			</footer>
        <!--footer section end-->
 	    <!-- /w3layouts-agile -->
        <!-- main content end-->
   </section>
   	 <!-- /wthree-agile -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>
