@extends('layout')


@section('title')
ინსტრუქტორები
@endsection

@section('content')
<!-- trainer -->
<section id="trainer" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
                <h2>ინსტრუქტორები</h2>
            </div>
            @foreach($trainer as $value)
            <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.9s">
                <div class="trainer-thumb">
                    <img src="images/{{$value->image}}" class="img-responsive" alt="Trainer">
                        <div class="trainer-overlay">
                            <div class="trainer-des">
                                <h2>{{$value->name}}</h2>
                                <h3>{{$value->title}}</h3>
                                <a href="contact">მოგვწერეთ</a>
                            </div>
                        </div>
                </div>
                <p>საქართველოს ჩემპიონატი ბოდიბილდინგსა და ფიტნესში 06/2016 წ.</p>
                <p>კატეგორია: ფიტნეს ბიკინი - </p>
                <p>I ადგილი, აბსოლუტური ჩემპიონი </p>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection