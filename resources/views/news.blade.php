@extends('layouts.default')
@section('content')

<section class="page-title-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 text-center">
				<div class="page-title-content">
					<h3 class="title text-white">Media Center</h3>
				</div>
			</div>
		</div>
	</div>
</section>

	<section class="pdt-110 pdb-80">

		<div class="section-content">
			<div class="container">
                
				<div class="row justify-content-center">
                      

                     @if(count($news) > 0 )
                     @foreach($news as $row)
					<div class="col-md-12 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="{{ url('public/images/news/'.$row->image)}}" class="img-full" alt="blog">
								<div class="news-date">
									<div class="entry-date">{{ Carbon\Carbon::parse($row->created_at)->format('d')}} <br> <span>{{ Carbon\Carbon::parse($row->created_at)->format('F')}}</span></div>
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

@endsection
