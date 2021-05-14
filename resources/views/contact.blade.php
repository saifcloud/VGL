@extends('layouts.default')
@section('content')


<section class="page-title-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 text-center">
				<div class="page-title-content">
					<h3 class="title text-white">Contact Us</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="images/bg/abs-bg1.png">
	<div class="container">
		<div class="row mrb-60">
			<div class="col-lg-7">
                @if(session()->has('success'))
                <div class="alert alert-success">
                	<p class="text-center">{{ session()->get('success')}}</p>
                </div>
                @endif

				<div class="contact-form">
					<form method="post" action="{{ url('contact')}}">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="name" placeholder="Name" class="form-control" required>
									@if($errors->has('name'))
									<p class="text-danger">{{ $errors->first('name')}}</p>
									@endif
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="website" placeholder="Website" class="form-control">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mrb-25">
									<input type="email" name="email" placeholder="Email" class="form-control" required>
									@if($errors->has('email'))
									<p class="text-danger">{{ $errors->first('email')}}</p>
									@endif
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mrb-25">
									<textarea rows="4" name="message" placeholder="Messages" class="form-control" required></textarea>
									@if($errors->has('message'))
									<p class="text-danger">{{ $errors->first('message')}}</p>
									@endif
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group">
									<button type="submit" name="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow" value="Send">Post Comment</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-map1"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Our Address</h5>
						<p class="mrb-0">{{ isset($website_address->field_value) ? $website_address->field_value:'' }}</p>
					</div>
				</div>
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-Phone2"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Phone Number</h5>
						<p class="mrb-0">{{ isset($contact_1->field_value) ? $contact_1->field_value:'' }}</p>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Phone Number</h5>
						<p class="mrb-0">{{ isset($contact_2->field_value) ? $contact_2->field_value:'' }}</p>
					</div>
				</div>
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-envelope"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Email Us</h5>
						<p class="mrb-0">{{ isset($website_email->field_value) ? $website_email->field_value:'' }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection


