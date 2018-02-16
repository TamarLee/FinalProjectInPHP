@extends('layout')


@section('title')
ბლოგი
@endsection


@section('content')
<!-- =========================
    BLOG HEADER SECTION   
============================== -->
<section id="blog-header" class="parallax-section" style="margin-top: 80px;">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s">LIONS FITNESS</h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">ფიტნეს კლუბი</h1>
			</div>


		</div>
	</div>
</section>

<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-7">
				@foreach($singleblog as $value)
				<div class="blog-content wow fadeInUp" data-wow-delay="1s" style="font-family: "BPG Nino Mtavruli Bold", sans-serif;">

                	<h3>{{ $value->title }}</h3>
					<span class="meta-date"><a href="#">{{ $value->date }}</a></span>
					
					<span class="meta-author"><a href="#blog-author">{{ $value->author }}</a></span>
					<div class="blog-clear"></div>
					<div style="margin-bottom: 50px;"><img src="../images/{{ $value->image }}"></div>
					<p>{!! $value->text !!}</p>
				</div>
                @endforeach
				
                
			</div>

			<div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	

				<div class="recent-post">
					<h3>უახლესი პოსტები</h3>
						@foreach($post as $value)
						<div class="media">
							<img src="../images/{{ $value->image }}">
							<div class="media-body">
								<h5>{{ $value->date }}</h5>
								<h4 class="media-heading"><a href="{{ url('/singleblog', $value->id) }}">{{ $value->title }}</a></h4>
							</div>
						</div>
						@endforeach
				</div>
                
			</div>
			
		</div>
	</div>
</section>

@endsection