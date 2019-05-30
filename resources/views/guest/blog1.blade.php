@extends('guest.welcome')
@section('content')
<div class="inner-content">
	<!-- /blog -->

	<div class="tittle-head">
		<h3 class="tittle">Our Blogs </h3>
		<div class="clearfix"> </div>
	</div>
	<!-- /music-left -->
	<div class="music-left">
		<div class="post-media">
			<a href="{{ url('/single ') }}"><img src="images/22.jpg" class="img-responsive" alt="" /></a>
			<div class="blog-text">
				<a href="{{ url('/single ') }}">
					<h3 class="h-t">Action make difference</h3>
				</a>
				<div class="entry-meta">
					<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2019</h6>
					<div class="icons">

						<a href="#"><i class="fa fa-comments-o"></i> 20</a>
						<a href="#"><i class="fa fa-thumbs-o-up"></i> 1776</a>
						<a href="#"><i class="fa fa-thumbs-o-down"></i> 29</a>
					</div>
					<div class="clearfix"></div>
					<p>Justin Bieber. Justin Drew Bieber (sinh ngày 1 tháng 3 năm 1994) là một ca sĩ nhạc Pop/R&B người Canada.
						Những clip của anh được Scooter Braun xem tại Youtube, hiện nay anh là quản lý của Justin Bieber. ... Bản
						thu đầy đủ đầu tiên của anh My World 2.0 đã được ra mắt vào ngày 23-3-2010 và được giới thiệu qua hit Baby..
					</p>
				</div>
			</div>
		</div>

		<div class="post-media second">
			<a href="{{ url('/single ') }}"><img src="images/33.jpg" class="img-responsive" alt="" /></a>
			<div class="blog-text">
				<a href="{{ url('/single ') }}">
					<h3 class="h-t">Missing you</h3>
				</a>
				<div class="entry-meta">
					<h6 class="blg"><i class="fa fa-clock-o"></i> Feb 13, 2019</h6>
					<div class="icons">

						<a href="#"><i class="fa fa-comments-o"></i> 33</a>
						<a href="#"><i class="fa fa-thumbs-o-up"></i> 374</a>
						<a href="#"><i class="fa fa-thumbs-o-down"></i> 83</a>
					</div>
					<div class="clearfix"></div>
					<p>Taylor Alison Swift là nữ ca sĩ kiêm sáng tác nhạc người Mỹ. Sinh ra và lớn lên tại Wyomissing,
						Pennsylvania, cô dời đến Nashville năm 14 tuổi để theo đuổi sự nghiệp âm nhạc đồng quê..</p>
				</div>
			</div>
		</div>

		<div class="post-media">
			<a href="{{ url('/single ') }}"><img src="images/11.jpg" class="img-responsive" alt="" /></a>
			<div class="blog-text">
				<a href="{{ url('/single ') }}">
					<h3 class="h-t">Model is life </h3>
				</a>
				<div class="entry-meta">
					<h6 class="blg"><i class="fa fa-clock-o"></i> Mach 30, 2019</h6>
					<div class="icons">

						<a href="#"><i class="fa fa-comments-o"></i> 22</a>
						<a href="#"><i class="fa fa-thumbs-o-up"></i> 257</a>
						<a href="#"><i class="fa fa-thumbs-o-down"></i> 193</a>
					</div>
					<div class="clearfix"></div>
					<p>Adam Noah Levine sinh ngày 18 tháng 3 năm 1979 tại Los Angeles, California, Hoa Kỳ. Anh là một ca sĩ, nhạc
						công, nhạc sỹ người Mỹ, thường được biết đến là giọng hát chính và là thủ lĩnh của ban nhạc pop rock Maroon
						5.</p>
				</div>
			</div>
		</div>
		<!--start-blog-pagenate-->
		<div class="blog-pagenat">
			<ul>
				<li><a class="frist" href="#">Prev</a></li>
				<li><a href="blog.php">1</a></li>
				<li><a href="blog1.php">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a class="last" href="#">Next</a></li>
				<div class="clearfix"> </div>
			</ul>
		</div>
		<!--//end-blog-pagenate-->

	</div>
	<!-- //music-left-->
	<!-- /music-right-->
	<div class="music-right">
		<!-- //widget -->
		<div class="widget-side">
			<h4 class="widget-title">Recent Posts</h4>
			<ul>
				<li>
					<a href="{{ url('/single ') }}">Taylor Swift – Shake It Off</a>
					<span class="post-date">Feb 13, 2019</span>
				</li>
				<li>
					<a href="{{ url('/single ') }}">Love Me Like You Do – Ellie Goulding (Fifty Shades of Grey Soundtrack) HQ</a>
					<span class="post-date">Feb 14, 2019</span>
				</li>
				<li>
					<a href="{{ url('/single ') }}">Jessie J – Flashlight (from Pitch Perfect 2)</a>
					<span class="post-date">Feb 16, 2019</span>
				</li>
				<li>
					<a href="{{ url('/single ') }}">Sol – “Ain’t Gon’ Stop”</a>
					<span class="post-date">Feb 18, 2019</span>
				</li>
				<li>
					<a href="{{ url('/single ') }}">Eminem – No Love (Explicit Version) ft. Lil Wayne</a>
					<span class="post-date">Feb 19, 2019</span>
				</li>
			</ul>
		</div>
		<div class="widget-side second">
			<h4 class="widget-title">Top Songs</h4>
			<ul>
				<li>
					<div class="song-img">
						<a href="{{ url('/single ') }}"><img src="images/play1.png" class="img-responsive" alt="" /></a>
					</div>
					<div class="song-text">
						<a href="{{ url('/single ') }}">Ellie-Goulding</a>
						<span class="post-date">Feb 13, 2019</span>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="song-img">
						<a href="{{ url('/single ') }}"><img src="images/play5.png" class="img-responsive" alt="" /></a>
					</div>
					<div class="song-text">
						<a href="{{ url('/single ') }}">Mark-Ronson-Uptown</a>
						<span class="post-date">Feb 14, 2019</span>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="song-img">
						<a href="{{ url('/single ') }}"><img src="images/play2.png" class="img-responsive" alt="" /></a>
					</div>
					<div class="song-text">
						<a href="{{ url('/single ') }}">Pharrell-Williams</a>
						<span class="post-date">Feb 16, 2019</span>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="song-img">
						<a href="{{ url('/single ') }}"><img src="images/play4.png" class="img-responsive" alt="" /></a>
					</div>
					<div class="song-text">
						<a href="{{ url('/single ') }}">Taylor Swift – Shake It Off</a>
						<span class="post-date">Feb 18, 2019</span>
					</div>
					<div class="clearfix"></div>
				</li>

			</ul>
		</div>
		<!-- //widget -->
	</div>
	<div class="clearfix"></div>
	<!-- //blog -->
@endsection