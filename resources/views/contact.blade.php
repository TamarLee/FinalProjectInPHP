@extends('layout')


@section('title')
კონტაქტი
@endsection


@section('content')
<!-- map -->
<div class="container-fluid">
	<div class="container margincontact">
		<div class="col-md-6 ">
			<form class="" method="POST" action="{{ url('/contact') }}">
				{{ csrf_field() }}

				<div class="row">
					<div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<input id="name" type="text" name="name" class="form-control" placeholder="სახელი" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<input id="email" type="email" name="email" class="form-control" placeholder="მეილი" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<input id="subject" type="text" name="subject" class="form-control" placeholder="თემა" value="{{ old('subject') }}">
							@if ($errors->has('subject'))
							<span class="help-block">
								<strong>{{ $errors->first('subject') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<textarea class="form-control textarea" name="text" rows="4" placeholder="ტექსტი" style="overflow:hidden;" required></textarea>
							@if ($errors->has('text'))
							<span class="help-block">
								<strong>{{ $errors->first('text') }}</strong>
							</span>
							@endif
						</div>

					</div>
				</div>
				
				<button>გაგზავნა</button>
			</form>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.9798112691856!2d44.881543621364294!3d41.69937152807315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440df2ca3e2045%3A0x17d260b126dbf5ca!2z4YOh4YOQ4YOi4YOg4YOU4YOc4YOQ4YOf4YOd4YOg4YOdIOGDk-GDkOGDoOGDkeGDkOGDluGDmA!5e0!3m2!1ska!2sge!4v1518005262475" width="600" height="400" frameborder="0" style="border:0" allowfullscreen ></iframe>
		</div>
		
		
	</div>
</div>

<!-- mapEnd -->
@endsection