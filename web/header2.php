<?php include'header4.php'?>;			
		
			<div id="phatnhac" style="	width: 100%;
    height: 70px;
    position: fixed;
    top: calc(100% - 69px);
    background-color: #1d1924;
    border-top: solid 1px #6d6a73;
    z-index: 1000;
    user-select: none;">
			<!--toggle button start-->
		
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
				<div class="profile_details" style="background-color: rgb(16, 143, 132);">			
						  
							  
											 <!---->
											  <div class="col-md-4 player" style="left: 50px;">
													<div class="audio-player">
													
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->

 
												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
										
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	
		<!-- //header-ends -->
		<div id="page-wrapper">
				<div class="inner-content">
				
				<div class="music-left" style="display: grid;">
					 <?php
					 if(isset($_REQUEST['submit']))
					 {
						 $tim=$_POST['search'];
						 if(empty($tim))
						 {
							 echo"<p>Yêu cầu nhập dữ liệu tìm kiếm</p>";
						 }
						 else{
							 Include'fetch2.php';
						 }
					 }





					 ?>
					  </div>
					  </div>
					  </div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
                            


                            </body>
</html>
