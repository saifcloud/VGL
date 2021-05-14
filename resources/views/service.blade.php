@extends('layouts.default')
@section('content')
<section class="page-title-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 text-center">
				<div class="page-title-content">
					<h3 class="title text-white">{{ isset($service) ? $service->title:''}}</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="service-details-page pdt-110 pdb-90">
	<div class="container">
		<div class="service-detail-text">
		{!! $service->description !!}
		</div>
	</div>
</section>



@endsection

