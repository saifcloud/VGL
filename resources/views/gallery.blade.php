@extends('layouts.default')
@section('content')

<section class="page-title-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 text-center">
				<div class="page-title-content">
					<h3 class="title text-white">Our Projects</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pdt-110 pdb-80">
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

@endsection
