@extends('layouts.default')
@section('content')
	
	<!-- Home Slider Start -->

	<section class="banner-section">
		<div class="home-carousel owl-theme owl-carousel">
			<div class="slide-item">
				<div class="image-layer" data-background="{{ url('public/images/bg/1.jpg') }}"></div>
				<div class="auto-container">
					<div class="row">

						<div class="col-xl-4 col-md-12 wow fadeInLeft mrb-lg-40 animated">

							@if(session()->has('success'))
                            <div class="alert alert-success">
                            	<p>{{ session()->get('success')}}</p>
                            </div>
							@endif
							<div class="request-a-call-back-form-vertical-two">
								<h3 class="mrt-0 mrb-30">Request a Call Back</h3>
								<form action="{{ url('callback')}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name')}}">
											</div>
											<p class="text-danger">{{ $errors->first('name') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Phone" class="form-control" name="phone" value="{{ old('phone')}}">
											</div>
											<p class="text-danger">{{ $errors->first('phone') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email')}}">
											</div>
											<p class="text-danger">{{ $errors->first('email') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<select name="category" class="custom-select-categories">
													<option value="">Select a Freight</option>
													@if(count($category) > 0 )
													@foreach($category as $row) 
													<option value="{{ $row->id}}" {{ $row->id == old('category') ? "selected":""}}>{{ $row->category }}</option>
													@endforeach
													@endif
												</select>
												<p class="text-danger">{{ $errors->first('category') }}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group mrb-0">
												<button type="submit" class="cs-btn-one btn-secondary-color btn-md btn-block">Request Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="col-xl-8 col-lg-8 col-md-12 content-column">
							<div class="content-box">
								<h1>Verks Global Logistics LLC</h1>
								<p>We have almost 35+ years of experience for <br>providing consulting services solutions</p>
								<!-- <div class="btn-box">
									<a href="#" class="cs-btn-one btn-primary-color">Get a Quote</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide-item">
				<div class="image-layer" data-background="{{ url('public/images/bg/2.jpg') }}"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<div class="col-xl-4 col-md-12 wow fadeInLeft mrb-lg-40 animated">
							<div class="request-a-call-back-form-vertical-two">
								<h3 class="mrt-0 mrb-30">Request a Call Back</h3>
								<form action="{{ url('callback')}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name')}}">
											</div>
											<p class="text-danger">{{ $errors->first('name') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Phone" class="form-control" name="phone" value="{{ old('phone')}}">
											</div>
											<p class="text-danger">{{ $errors->first('phone') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email')}}">
											</div>
											<p class="text-danger">{{ $errors->first('email') }}</p>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<select name="category" class="custom-select-categories">
													<option value="">Select a Freight</option>
													@if(count($category) > 0 )
													@foreach($category as $row) 
													<option value="{{ $row->id}}" {{ $row->id == old('category') ? "selected":""}}>{{ $row->category }}</option>
													@endforeach
													@endif
												</select>
												 <p class="text-danger">{{ $errors->first('category') }}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group mrb-0">
												<button type="submit" class="cs-btn-one btn-secondary-color btn-md btn-block">Request Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="col-xl-8 col-lg-8 col-md-12 content-column text-center">
							<div class="content-box">
								<h1>Verks Global Logistics LLC</h1>
								<p>We have almost 35+ years of experience for <br>providing consulting services solutions</p>
								<!-- <div class="btn-box">
									<a href="#" class="cs-btn-one btn-primary-color">Get a Quote</a>
								</div> -->
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="slide-item">
				<div class="image-layer" data-background="{{ url('public/images/bg/3.jpg') }}"></div>
				<div class="auto-container">
					<div class="row clearfix">

						<div class="col-xl-4 col-md-12 wow fadeInLeft mrb-lg-40 animated">
							<div class="request-a-call-back-form-vertical-two">
								<h3 class="mrt-0 mrb-30">Request a Call Back</h3>
								<form action="{{ url('callback')}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name')}}">
												 <p class="text-danger">{{ $errors->first('name') }}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" placeholder="Phone" class="form-control" name="phone" value="{{ old('phone')}}">
												<p class="text-danger">{{$errors->first('phone')}}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email')}}">
												<p class="text-danger">{{$errors->first('email')}}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<select name="category" class="custom-select-categories">
													<option value="">Select a Freight</option>
													@if(count($category) > 0 )
													@foreach($category as $row) 
													<option value="{{ $row->id}}" {{ $row->id == old('category') ? "selected":""}}>{{ $row->category }}</option>
													@endforeach
													@endif
												</select>
												<p class="text-danger">{{$errors->first('category')}}</p>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group mrb-0">
												<button type="submit" class="cs-btn-one btn-secondary-color btn-md btn-block">Request Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="col-xl-8 col-lg-8 col-md-12 content-column">
							<div class="content-box">
								<h1>Verks Global Logistics LLC</h1>
								<p>We have almost 35+ years of experience for <br>providing consulting services solutions</p>
								<!-- <div class="btn-box">
									<a href="#" class="cs-btn-one btn-primary-color">Get a Quote</a>
								</div> -->
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Home Slider End -->
	<!-- Service Content Area Start -->
	<section class="service-content-area pdt-110 pdb-80">
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrb-md-40">
							<div class="service-item-thumb">
								<img class="img-full" src="{{ url('public/images/service/service1.jpg') }}" alt="">
								<div class="service-item-icon">
									<i class="fas fa-plane-departure"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Air Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrb-lg-40 mrb-md-40">
							<div class="service-item-thumb">
								<img class="img-full" src="{{ url('public/images/service/service2.jpg') }}" alt="">
								<div class="service-item-icon">
									<i class="fas fa-ship"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Ocean Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box">
							<div class="service-item-thumb">
								<img class="img-full" src="{{ url('public/images/service/service3.jpg') }}" alt="">
								<div class="service-item-icon">
									<i class="fas fa-shipping-fast"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Road Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mrt-60">
					<div class="col-xl-12 text-center">
						<h5>Do You Want To explore more services just <span><a href="#" class="text-underline text-primary-color">click here</a></span></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Content Area End -->
	<!-- About Title Section Start -->
	<section class="about-section bg-silver-light pdt-110 pdb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xl-6">
					<div class="about-us-wrapper">
						<h6 class="text-primary-color side-line-left mrb-15">Award Winner Logistic Company</h6>
						<h2>World Best Secure Safe and Trusted Logistic Services Provider</h2>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<p class="content-border-left mrt-30">Verks Global Logistics (VGL) is a 3PL solution provider that caters to supply chain management solutions including international and domestic transportation, warehousing, customs brokerage, freight forwarding and trade consulting services.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About Title Section End -->
	<!-- About Section Start -->
	<section class="about-section anim-object pdt-0 pdb-170 pdb-lg-110" data-background="{{ url('public/images/bg/abs-bg1.png') }}">
		<div class="container">
			<div class="row mrb-80 align-items-center">
				<div class="col-md-12 col-xl-12">
					<div class="row mrt-110">
						<div class="col-md-3 col-xl-3">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-delivery-truck-1"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>On Time Delivery</h3></a>
									</div>
									<div class="para">
										<p>We always provide people a complete solution focused of any business.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xl-3">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-globe"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>Efficient Delivery</h3></a>
									</div>
									<div class="para">
										<p>We always provide a complete solution of any business.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-xl-3">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-globe"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>Global Service</h3></a>
									</div>
									<div class="para">
										<p>We always provide people a complete solution focused of any business.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-xl-3">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-globe"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>24/7 Support</h3></a>
									</div>
									<div class="para">
										<p>We always provide a complete solution of any business.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row align-items-xl-center">
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="about-image-box mrr-60 mrr-lg-0 mrb-lg-110">
						<img class="about-image1 img-full js-tilt d-none d-xl-block" src="{{ url('public/images/about/ab2.jpg') }}" alt="">
						<img class="about-image2 img-full" src="{{ url('public/images/about/ab3.jpg') }}" alt="">
						<div class="experience"><h4>30+</h4><p>We have more than years of experience</p></div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 pdl-60">
					<h5 class="side-line-left text-primary-color mrb-15">About Our Company</h5>
					<h2 class="text-uppercase mrb-30">Trusted Logistic Service Provider</h2>
					<ul class="order-list primary-color mrb-40">
						<li>revolutionary catalysts for chang</li>
						<li>catalysts for chang the Seamlessly</li>
						<li>business applications through</li>
						<li>procedures whereas processes</li>
					</ul>
					<p class="mrb-40">Distinctively exploit optimal alignments for intuitive business applications through revolutionary catalysts for chang the Seamlessly optimal optimal alignments for intuitive.</p>
					<div class="d-inline d-md-flex align-items-center mt-40">
						<a href="#" class="animate-btn mrr-50 mrb-sm-30">Read More</a>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->


	<!-- Divider Section Start -->
	<section class="">
		<div class="section-content">
			<div class="container-fluid">
				<div class="row justify-content-start">
					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="about-image-block-3">
							<img class="left-infinite-img img-full" src="{{ url('public/images/about/person2.png') }}" alt="">
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-4 p-md-5 pd-sm-25">
						<h5 class="mrb-15 side-line-left">Why Choose Us?</h5>
						<h2 class="mrb-30">We Deliver your goods Very Fast & Secure</h2>
						<p class="mrb-60">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary cataly technologies rather than development optimal alignments for intuitive business applications through.</p>
						<!-- <div class="video-popup-left2 mrb-lg-60">
            	<a class="popup-youtube-left" href="https://www.youtube.com/watch?v=Fvae8nxzVz4"><i class="fas fa-play"></i></a>
          	</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Divider Section End -->
	<!-- Clients Section Start -->
	<section class="pdb-90">
		<div class="section-content">
			<div class="container border-top pdt-80">
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel client-items">
							@if(count($brand))
							@foreach($brand as $row)
							<div class="client-item">
								
								<img src="{{ url('public/images/clients/'.$row->image) }}" alt="">
							</div>
							@endforeach
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients Section End -->
	<!-- Project Section Start -->
	<section class="bg-secondary-color pdt-110 pdb-80" data-background="{{ url('public/images/bg/abs-bg3.png') }}">
		<div class="section-title mrb-30 mrb-md-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-6">
						<h5 class="mrb-15 text-primary-color side-line-left">Our Projects</h5>
						<h2 class="text-white mrb-30">Let's Checkout our All Latest Projects</h2>
					</div>
					<div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
						<a href="{{ url('gallery')}}" class="cs-btn-one btn-primary-color btn-md">All Projects</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">

					@if(count($project) > 0)
					@foreach($project as $row)
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="{{ url('public/images/project/'.$row->image) }}" alt="">
								<div class="project-details p-4">
									<h4 class="mrb-40 widget-title ourprojecttitle">Project Information</h4>
									<ul class="list project-info-list ourprojecthover">
										<li><span><i class="far fa-clock"></i> Project Date:</span>{{ Carbon\Carbon::parse($row->created_at)->format('d F Y')}}</li>
										<li><span><i class="far fa-user"></i> Client:</span> <a href="#">{{ $row->client }}</a></li>
										<li><span><i class="far fa-hdd"></i> Categories:</span> <a href="#">{{ $row->category }}</a></li>
										<li><span><i class="far fa-gem"></i> Skills:</span> <a href="#">{{ $row->skills }}</a></li>
										<li><span><i class="far fa-money-bill-alt"></i> Budgets:</span> <a href="#">$ {{ $row->budget }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif
					
				
					
				
				</div>
			</div>
		</div>
	</section>
	<!-- Project Section End -->
	<!-- Testimonials Section Start -->
	<section class="request-a-call-back pdt-80 pdb-110 pdb-lg-70" data-background="{{ url('public/images/pattern/2.png') }}">
		<div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div class="col-lg-8">
						<div class="title-box-center">
							<h5 class="sub-title-center text-primary-color line-top-center mrb-15">Testimonials</h5>
							<h2 class="title">What People and Clients Think About Us?</h2>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="owl-carousel testimonial-items-3col mrb-lg-40">

						@if(count($testimonial) > 0 )
						@foreach($testimonial as $row)
						<div class="testimonial-item">
							<span class="quote-icon fas fa-quote-right"></span>
							
							<h4 class="client-name">{{ $row->name }}</h4>
							<h6 class="client-designation mrb-10">{{ $row->designation }}</h6>
							
							<div class="testimonial-content">
								<p class="comments">{{ $row->description }}</p>
							</div>
						</div>
						@endforeach
						@endif
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section End -->
	<!-- News Section Start -->
	<section class="pdt-110 pdb-80">
		<div class="section-title mrb-30 mrb-md-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-6">
						<h5 class="mrb-15 text-primary-color side-line-left">News And Updates</h5>
						<h2 class="mrb-30">Let's Checkout our All Latest News</h2>
					</div>
					<div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
						<a href="{{ url('news')}}" class="cs-btn-one btn-primary-color btn-md">All News</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">


					@if(count($news) > 0 )
					@foreach($news as $row)
					<div class="col-md-12 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="{{ url('public/images/news/'.$row->image) }}" class="img-full" alt="blog">
								<div class="news-date">
									<div class="entry-date">{{ Carbon\Carbon::parse($row->created_at)->format('d')}} <br> <span>{{Carbon\Carbon::parse($row->created_at)->format('F')}}</span></div>
								</div>
							</div>
							<div class="news-description">
								<h4 class="the-title"><a href="#">{{ $row->title }}</a></h4>
							</div>
							<div class="news-bottom-part">
								
								<div class="post-link">
									<span class="entry-date mrr-20"><i class="far fa-comments mrr-10 text-primary-color"></i>2 Comments</span>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif

					
					
				</div>
			</div>
		</div>
	</section>
	<!-- News Section End -->

@endsection