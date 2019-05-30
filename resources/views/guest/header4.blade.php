<!DOCTYPE HTML>
<html>
<head>
<title> ZaM - Music for life | Single</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="http://code.jquery.com/jquery-1.7.2.min.js"type="text/javascript"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="js/jquery-2.1.4.js"></script>
<style type="text/css">

  body{font-family:verdana;}
  #search{width:324px;padding:11px; display:block;border-radius:3px;border:none;margin: 12px -6px;    background: darkolivegreen;}
  div#back_result{padding:10px;width:324px;margin:0 auto;border:1px solid silver;display:none;background-color:silver;position: absolute;    right: 30px;}
  #user{margin:3px;display: -webkit-inline-box;}
  #user:hover{background-color: darkolivegreen;width:280px;}
  </style>
<script>
$(document).ready(function(){
 $('#search').keyup(function(){
     var name=$(this).val();
     if(name){
$.post('fetch.php',{name:name},function(data){
    $('div#back_result').css({'display':'grid'});
    $('div#back_result').html(data);
});
     }else{
    $('div#back_result').css({'display':'none'})}
 });
});
</script>
</head> 
    
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.php">ZaM</a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php">ZaM</a>
			</div>

			<!--logo and iconic logo end-->
					<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						
						<li><a href="radio.php"><i class="camera"></i> <span>Radio</span></a></li>
						<li><a href="band.php" ><i class="fa fa-th"></i><span>Band</span></a></li>
						<li><a href="artist.php"><i class="lnr lnr-users"></i> <span>Artists</span></a></li> 
						<li><a href="album.php"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>						
					
						<li><a href="blog.php"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
					
						<li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a> 
							<ul class="sub-menu-list">
								<li><a href="favourist.php">All Songs</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="contact.php"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.php">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		 	
		<!-- left side end-->
				<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>ZaM Music app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
			 	 
		<!-- signup -->
			<!-- <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">
											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- //signup -->
 	 
		<!-- main content start-->
	
		<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
						  
								<form method="post" action="header2.php">
<input type="text" name="search" id="search" placeholder="Search" autocomplete="off">
<input type="submit" name="submit" value="" style="    width: 49px;
    height: 40px;
    display: block;
    position: absolute;
    right: 12%;
    top: 20%;
    padding: 0;
    margin: 0;
    line-height: 71px;
    text-align: center;
		border:none;
		background-color:darkolivegreen;">
<i class="fa fa-search" style="top: 21px;    right: 45px;font-size: 29px;color: white;position: absolute; z-index: 100;"></i>

</form>
<div id="back_result"></div>
								
							</div>
							  
											 <!---->
											  
											 <div class="col-md-4 login-pop">
							<div id="loginpop">
								@if(Auth::check())
								<a class="top-sign" href="{{ route('logout') }}" onclick="event.preventDefault();
																					document.getElementById('logout-form').submit();"><span> <i class="fa fa-sign-in"></i></span></a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST"
									style="display: none;">
									@csrf
								</form>
								<a class="top-sign"><span>{{Auth::user()->name}}</span></a>

								@else

								<a href="{{ route('login') }}" id="loginButton"><span>Login <i
											class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
								<a class="top-sign" href="{{ route('register') }}"><span>Register<i
											class="arrow glyphicon glyphicon-chevron-right"></i></span> </a>
								{{-- <div id="loginBox">  
															<form action={{url('login')}} method="post" id="loginForm">
								@csrf
								<fieldset id="body">
									<fieldset>
										<label for="email">Email Address</label>
										<input type="text" name="email" id="email">
									</fieldset>
									<fieldset>
										<label for="password">Password</label>
										<input type="password" name="password" id="password">
									</fieldset>
									<input type="submit" id="login" value="Sign in">
									<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember
											me</i></label>
								</fieldset>
								<span><a href="#">Forgot your password?</a></span>
								</form>
							</div> --}}

							@endif
						</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
			</div>
			@yield('content')