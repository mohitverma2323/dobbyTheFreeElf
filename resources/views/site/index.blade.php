@extends('layouts.master')

@section('content')
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/propertyVerfication2.jpg">
					<div class="camera_caption fadeIn">
						<h3>Property Verification by Experts</h3>
						<p>Contact Us by</p>
						<a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>
                <div class="item" data-src="images/propertyVerify.jpg">
					<div class="camera_caption fadeIn">
						<h3 style="color:#232b32;">Trusted Property Verfication and Registration</h3>
						<p style="color:#232b32;">Get Started Now!</p>
						<a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
    <div class="full-width-container block-4">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>How Does it Work?</span></h2>
					</header>
				</div>
			</div>
			<div class="row">
				<div id="owl-carousel" class="owl-carousel">
					<div class="grid_4">
						<div class="">
							<div class="img_container"><img src="images/computerPhone.jpg" alt="img"></div>
							<div class="owl-text">Step 1</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="">
							<div class="img_container"><img src="images/docPickup.jpg" alt="img"></div>
							<div class="owl-text">Step 2</div><br>
						</div>
					</div>
					<div class="grid_4">
						<div class="">
							<div class="img_container"><img src="images/step3.jpg" alt="img"></div>
							<div class="owl-text">Step 3</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Services</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="element"><h3><a href="#">Property Verification</a></h3></div>
				</div>
				<div class="grid_4">
					<div class="element"><h3><a href="#">Property Registration</a></h3></div>
				</div>
				<div class="grid_4">
					<div class="element"><h3><a href="#">Property Valuation</a></h3></div>
				</div>			
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>About Us</span></h2>
					</header>
					<h4><a href="#"></a></h4>
					<p>
                    </p>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>
@endsection