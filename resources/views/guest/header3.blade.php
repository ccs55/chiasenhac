<?php $id=$_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "zam");
mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
  }
  $query = "
  SELECT * FROM baihat,casy WHERE baihat.CaSy=CaSy.TenCS and baihat.TenBh = '$id'
  ";
  $result = mysqli_query($connect, $query);
  $key=mysqli_fetch_assoc($result);



?>

@extends('guest.header4')
@section('content')

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

					<audio id="audio-player" controls="controls" autoplay>

						<source src="media/<?php echo $key['Link'] ?>" type="audio/mpeg">
						</source>

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
					<li><a class="ar" href="#"> <img src="images/arrow.png" alt="" /></a></li>
					<li><a class="ar2" href="#"><img src="images/arrow2.png" alt="" /></i></a></li>

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

<div class="content" style="
						
    width: 1079px;
    background-color: antiquewhite;
    margin-left: 134px;
    min-height:2000px;
    height:auto;
">

	<div
		style="color:white;height:250px;width:1079px;  margin-top: 2cm;background: url('student_image/hinhmo.jpg') center center / cover no-repeat;">

		<div style="display: -webkit-inline-box;">
			<img style="    width: 210px; margin: 0.5cm 0.5cm;" src="student_image/<?php echo $key['HinhAnh']?>" />&nbsp;
			<div style="margin-top:1.5cm;">
				<div><b><span style="font-size:20px;"><?php echo $key['TenBh']?></span></b></div>
				<div><b><span style="font-size:14px;"><?php echo $key['CaSy']?></span></b></div>
				<div style="margin-top:24px;">Sáng tác:<span style="font-size:14px;"><?php echo $key['TacGia']?></span></div>
				<div>Thể loại:<span style="font-size:14px;"><?php echo $key['ChuDe']?></span></div>
			</div>
		</div>
	</div>
	<div style="    margin: 0 1cm;">
		<hr style="    margin-top: 33px;border-top: 1px solid #111">
		<div style="height:50px;width:1079px;display: -webkit-inline-box;margin-top:5px;">
			<a href="thongtincasy.php?id=<?php echo $key['CaSy'];?>" style="text-decoration:none;">
				<img style="    width: 50px;" src="student_image/<?php echo $key['HinhAnh']?>" />&nbsp;
				<div><b><span style="font-size:14px;"><?php echo $key['CaSy']?></span></b></div>
			</a>
		</div>
		<hr style="    margin-top: 24px;border-bottom: 1px solid #111">
	</div>
	<div style="
margin-top:17px;
    margin:0 1cm;
   
    width: 55%;
 
    float:left;
">
		<b><span style="font-size:16px;">Lời bài hát</span></b>
		<br>
		<pre style="border:none;background-color:antiquewhite;"><?php echo $key['LoiBh']?></pre>
	</div>
	<div style="
        float: left;
    width: 33%;
    margin-left: 2%;
   
">
		<b style="font-size:18px;">Có thể bạn muốn nghe</b><br>
		<?php
$id2=$key['TenCS'];
$id3=$key['ChuDe'];
$query1 = "
SELECT * FROM baihat,casy WHERE baihat.CaSy=CaSy.TenCS and (baihat.CaSy='$id2' OR baihat.ChuDe='$id3')
";
$result1 = mysqli_query($connect, $query1);
foreach($result1 as $key1){
	?>
		<div style="display:grid;">
			<a href="header3.php?id=<?php echo $key1['TenBh'];?>" style="text-decoration:none;">
				<div id="user">
					<img width="50" src="student_image/<?php echo $key1['HinhAnh']?>" id="pic" />&nbsp;<div>
						<div><span style="font-size:16px;color:#111;"><?php echo $key1['TenBh']?></span></div>
						<div><span style="font-size:14px; color:#111;"><?php echo $key1['CaSy']?></span></div>
					</div>
				</div>

			</a>
		</div>
		<?php
}



?>
	</div>


</div>

@endsection

<!-- //header-ends -->