@extends('guest.welcome')
@section('content')

<div class="inner-content">
	<div class="tittle-head">
		<h3 class="tittle">Find Us </h3>
		<div class="clearfix"> </div>
	</div>
	<!-- /contact-->
	<div class="contact">
		<div class="contact-left">
			<iframe
				src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>

		</div>
		<div class="contact-right">
			<p class="phn">+034 2481 5842</p>
			<p class="phn-bottom">45 New York
				<span>Road, American D04 89GR</span></p>
			<p class="lom">In the right side, at the coner of the street.</p>
		</div>
		<div class="clearfix"> </div>
		<div class="contact-left1">
			<h3>Contact Us With <span>Any questions</span></h3>
			<div class="in-left">
				<form action="#" method="post">
					<p class="your-para">Your Name :</p>
					<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
						required="">

					<p class="your-para">Your Mail :</p>
					<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
						required="">
					<p class="your-para">Phone Number:</p>
					<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
						required="">

				</form>
			</div>
			<div class="in-right">
				<form>
					<textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"
						required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-right1">
			<h3><span>Social Websites</span></h3>
			<h4>New York</h4>
			<p>
				New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is
				Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural
				centers. Its iconic sites include skyscrapers such as the Empire State Building and sprawling Central Park.
				Broadway theater is staged in neon-lit Times Square..</p>
			<ul class=" side-icons con">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twitt" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!-- //contact -->

	</div>
@endsection