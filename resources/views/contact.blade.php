@extends('layout')


@section('title')
კონტაქტი
@endsection


@section('content')
<!-- map -->
<div class="container mb-5" id="contact">
	<section class="map-section">
		<div class="container map-height reset-padding">
			<iframe class="margin-top-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1362824355556!2d44.78283021484294!3d41.71757797923522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1508590724822" width="100%" height="800px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	<div class="row">
		<div class="col-8 offset-2 col-md-10 offset-md-1 map-info">
			<div class="row">

				<div class="col-md-8">
					<h2 class="text-uppercase jk pt-5">მოგვწერეთ</h2>
					<form class="p-5">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="სახელი">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="მეილი">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="თემა">
								</div>
								<div class="form-group">
									<textarea class="form-control textarea" rows="4" placeholder="ტექსი" style="overflow:hidden;"></textarea>
								</div>

							</div>
						</div>
						<button>გაგზავნა</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- mapEnd -->
	@endsection