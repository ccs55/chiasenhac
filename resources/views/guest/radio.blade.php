@extends('guest.welcome')
@section('content')
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
				<h3 class="tittle">Radios <span class="new">New</span></h3>

				<div class="clearfix"> </div>
			</div>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
							aria-controls="home" aria-expanded="true">China</a></li>
					<li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
							aria-controls="profile" aria-expanded="false">Hindi</a></li>
					<li role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"
							aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
							<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab"
									aria-controls="dropdown1">Melody</a></li>
							<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab"
									aria-controls="dropdown2">Classic </a></li>
						</ul>
					</li>
					<li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"
							aria-expanded="true">Korea</a></li>
					<li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
							aria-controls="profile" aria-expanded="false">France</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="browse-inner">
							<!-- /agileits -->

							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a3.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Jame Arina</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a6.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shekh Rav</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a7.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shale John</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a4.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Sanki omahu</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a5.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Akia maria</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a1.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">A R Rahman</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a2.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shreya Ghoshal</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a8.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Lata Manges</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a9.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Arit Sing</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a10.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Sunidhi Chauhan</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a11.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Yuki hana</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a12.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Neeti Mohan</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="browse-inner">
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a9.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Arijit Sing</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a10.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Suni Chauhan</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a11.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Yo kikaho</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a12.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Neti Mohan</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a1.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Ahiko Rahman</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a2.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shreya Ghoshal</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a3.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Sukinder singh</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a6.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shekh Rav</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a7.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Shalmali</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a4.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Sam Wajd</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a5.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Ati Amam</a>
							</div>
							<div class="col-md-3 artist-grid">
								<a href="{{ url('/single ') }}"><img src="images/a8.jpg" title="allbum-name"></a>
								<a href="{{ url('/single ') }}"><i class="glyphicon glyphicon-play-circle"></i></a>
								<a class="art" href="{{ url('/single ') }}">Lata Mangeshkar</a>
							</div>

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
						<a href="{{ url('/single ') }}"><img src="images/v11.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v22.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v33.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid last-grid">
						<a href="{{ url('/single ') }}"><img src="images/v44.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v55.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v66.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v77.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid last-grid">
						<a href="{{ url('/single ') }}"><img src="images/v88.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v99.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v9.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v21.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
					</div>
					<div class="col-md-3 artist-grid">
						<a href="{{ url('/single ') }}"><img src="images/v5.jpg" title="allbum-name"></a>
						<div class="inner-info">
							<h5>See now</h5>
						</div>
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
					<a href="{{ url('/single ') }}"><img src="images/v1.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Adele21
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v2.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Adele21</h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v3.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Shomlock</h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v4.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Stuck on a feeling</h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v5.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Ricky Martine </h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v6.jpg" alt="" /></a>
					<div class="slide-title">
						<h4>Ellie Goluding </h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('/single ') }}"><img src="images/v6.jpeg" alt="" /></a>
					<div class="slide-title">
						<h4>Fifty Shades </h4>
					</div>
					<div class="date-city">
						<h5>Jan-02-16</h5>
						<div class="buy-tickets">
							<a href="{{ url('/single ') }}">READ MORE</a>
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
@endsection