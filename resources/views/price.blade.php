@extends('layout')


@section('title')
ფასები
@endsection

@section('content')
<!-- price -->
<section id="price" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
                <h2>ფასები</h2>
            </div>

            @foreach($price as $value)
            <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
                <div class="pricing__item">
                    <h3 class="pricing__title">{{ $value->title }}</h3>
                    <div class="pricing__price"><span class="pricing__currency">₾</span>{{ $value->price }}</div>
                    {{ $value->description }}
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection