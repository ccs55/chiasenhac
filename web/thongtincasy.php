<?php $id=$_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "zam_mysql");
mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
  }
  $query = "
  SELECT * FROM casy WHERE TenCS  = '$id'
  ";
  $result = mysqli_query($connect, $query);
  $key=mysqli_fetch_assoc($result);
include 'header4.php';


?>
<div class="content" style="
						
                        width: 1079px;
                        background-color: antiquewhite;
                        margin-left: 134px;
                        min-height:2000px;
                        height:auto;
                    ">
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    
                    <div style="color:white;height:250px;width:1079px;  margin-top: 2cm;background: url('student_image/<?php echo $key['HinhAnh']?>') center center / cover no-repeat;">
                    
                    
                    
                    
                    </div>
                    
                   
                    <div style="    margin: 0 1cm;">
                    <hr style="    margin-top: 33px;border-top: 1px solid #111">
                    <div style="height:50px;width:1079px;display: -webkit-inline-box;margin-top:5px;">
                    <a href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"style="text-decoration:none;">
                    <img style="    width: 50px;" src="student_image/<?php echo $key['HinhAnh']?>"/>&nbsp;
                    <div><b><span style="font-size:14px;"><?php echo $key['TenCS']?></span></b></div>
                    </a>
                            </div>
                            <hr style="    margin-top: 24px;border-bottom: 1px solid #111">
                            </div>
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active" style="width:120px; text-align:center;margin-left:30px; "><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Giới Thiệu</a></li>
								   <li role="presentation" class="" style="margin-left:30px; width:120px;text-align:center;"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Bài Hát</a></li>

								</ul>
                <div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
								 	 <!-- /agileits -->
										<pre style="margin-left:30px;margin-right:30px;background-color:antiquewhite;"><?php echo $key['TieuSu'] ?></pre>
								
									
									
											<div class="clearfix"> </div>
										</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									   <div class="browse-inner">
										 <?php
									
                  
                  
                  $query1 = "
                  SELECT * FROM baihat,casy WHERE baihat.CaSy=CaSy.TenCS and baihat.CaSy='$id'
                  ";
                  $result1 = mysqli_query($connect, $query1);
                  if(mysqli_num_rows($result) > 0)
										{
                  foreach($result1 as $key1){
                    ?>
                    <div style="display:grid;">
                    <a href="header3.php?id=<?php echo $key1['TenBh'];?>" style="text-decoration:none;">
                    <div id="user"style="margin-left:30px;">
                    <img width="50" src="student_image/<?php echo $key1['HinhAnh']?>" id="pic"/>&nbsp;<div><div><span style="font-size:16px;color:#111;"><?php echo $key1['TenBh']?></span></div><div><span style="font-size:14px; color:#111;"><?php echo $key1['CaSy']?></span></div></div></div>
                    
                    </a>
                    </div>
                    <?php
                  }
                }
                  
                  
                  ?>
									
									
								
									<div class="clearfix"> </div>
								</div>
								  </div>   
                  

<!-- Bootstrap Core JavaScript -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
                            


                            </body>
</html>
                            
