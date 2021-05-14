<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Logistek">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<title>Verks Global Logistics</title>
	<link href="" rel="shortcut icon" type="image/png">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ url('public/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('public/css/responsive.css') }}">
	<link rel="stylesheet" href="{{ url('public/css/custom.css') }}">
</head>

<body>
	<!-- Preloader Start -->
	<div class="preloader"></div>
	<!-- Preloader End -->
	<!-- header Start -->
	<header class="header-style-two">
		<div class="header-wrapper">
			<div class="header-top-area bg-primary-color">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 text-center text-lg-left text-xl-left header-top-left-part">
							<span class="address"><i class="webexflaticon flaticon-call"></i> {{ isset($contact_1->field_value) ? $contact_1->field_value:'' }}</span>
							<span class="address"><i class="webexflaticon flaticon-call"></i> {{ isset($contact_2->field_value) ? $contact_2->field_value:'' }}</span>
                            <span class="phone"><i class="webexflaticon flaticon-envelope"></i> {{ isset($website_email->field_value) ? $website_email->field_value:'' }}</span>
						</div>
						<div class="col-md-12 col-lg-6 header-top-right-part text-center text-lg-right text-xl-right">
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-navigation-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="{{ url('/')}}">
								<img id="logo-image" class="img-center" src="{{ url('public/images/logo.png') }}" alt="">
							</a>
							<div class="mobile-menu-right"></div>
							<div class="header-searchbox-style-two d-none d-xl-block">
								<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
									<span class="bar1"></span>
									<span class="bar2"></span>
									<span class="bar3"></span>
								</div>
								<div class="toggle-searchbox">
									<form action="#" id="searchform-all" method="get">
										<div>
											<input type="text" id="s" class="form-control" placeholder="Search...">
											<div class="input-box">
												<input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="side-panel-content">
								<div class="close-icon">
									<button><i class="webex-icon-cross"></i></button>
								</div>
								<div class="side-panel-logo mrb-30">
									<a href="index.php">
										<img src="{{ url('public/images/logo.png') }}" alt="" />
									</a>
								</div>
								<div class="side-info mrb-30">
									<div class="side-panel-element mrb-25">
										<h4 class="mrb-10">Office Address</h4>
										<ul class="list-items">
											<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>{!! isset($website_address->field_value) ? $website_address->field_value:'' !!}</li>
											<li><span class="fas fa-envelope mrr-10 text-primary-color"></span>{{ isset($website_email->field_value) ? $website_email->field_value:'' }}</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>{{ isset($contact_1->field_value) ? $contact_1->field_value:'' }}</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span> {{ isset($contact_2->field_value) ? $contact_2->field_value:'' }}</li>
										</ul>
									</div>
								</div>  
								<h4 class="mrb-15">Social List</h4>
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="main-menu f-right">
								<nav id="mobile-menu-right">
									<ul>
										<li><a href="{{ url('about')}}">About</a></li>
										<li><a href="{{ url('news')}}">Media Center</a></li>
										<li class="has-sub">
											<a href="#">Services</a>
											<ul class="sub-menu">
											@if(isset($services) && count($services) > 0)
											@foreach($services as $row)
											 <li><a href="{{ url('service/'.base64_encode($row->id)) }}">{{ $row->title }}</a></li>
											@endforeach
											@endif
											</ul>
										</li>
										<li>
											<a href="{{ url('career')}}">Career</a>
										</li>
										<li>
											<a href="{{ url('gallery') }}">Project Gallary</a>
										</li>
										<li class="has-sub right-view">
											<a href="{{ url('contact')}}">Contact</a>
											<!-- <ul class="sub-menu"> -->
												<!-- <li><a href="contact.php">Contact Details</a></li> -->
												<!-- <li><a href="contact.php">Downloads</a></li>
												<li><a href="contact.php">Location Map</a></li>
												<li><a href="contact.php">Quick Links</a></li> -->
											<!-- </ul> -->
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header End -->