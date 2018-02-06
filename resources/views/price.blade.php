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
                <h2>Our Prices</h2>
                <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo.</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
                <div class="pricing__item">
                    <h3 class="pricing__title">Healthy</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>350</div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">One General Trainer</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">5 Yoga Courses</li>
                        <li class="pricing__feature">10 Thai Massages</li>
                        <li class="pricing__feature">15 Aerobics</li>
                    </ul>
                    <button class="pricing__action">Sign Up Now</button>
                </div>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.3s">
                <div class="pricing__item">
                    <h3 class="pricing__title">Best Fit</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>550</div>                  
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Two General Trainers</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">10 Yoga Courses</li>
                        <li class="pricing__feature">20 Thai Massages</li>
                        <li class="pricing__feature">25 Aerobics</li>
                    </ul>
                    <button class="pricing__action">Sign Up Now</button>
                </div>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.6s">
                <div class="pricing__item">
                    <h3 class="pricing__title">Rigid Body</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>750</div> 
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Three Personal Trainers</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">15 Yoga Courses</li>
                        <li class="pricing__feature">20 Thai Massages</li>
                        <li class="pricing__feature">35 Aerobics</li>
                    </ul>
                   <button class="pricing__action">Sign Up Now</button>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection