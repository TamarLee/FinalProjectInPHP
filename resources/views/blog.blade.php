
@extends('layout')


@section('title')
ბლოგი
@endsection

@section('content')


<!-- blog -->
<section id="blog" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h2>ფიტნეს ბლოგი</h2>
                <p>ფიტნეს-ინსტრუქტორის რჩევები</p>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
                <div class="blog-thumb">
                    <span class="blog-date">Body Fitness / July 2, 2016</span>
                    <h3 class="blog-title"><a href="singleblog">How to get a fitness model body?</a></h3>
                    <h5 id="blog-author">by David Walker</h5>
                </div>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
                <div class="blog-thumb">
                    <span class="blog-date">Healthy Fit / June 8, 2016</span>
                    <h3 class="blog-title"><a href="singleblog">Personal Fitness Tips</a></h3>
                    <h5 id="blog-author">by George</h5>
                </div>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
                <div class="blog-thumb">
                    <span class="blog-date">Gym Services / May 9, 2016</span>
                    <h3 class="blog-title"><a href="singleblog">Efficient Workout Plans</a></h3>
                    <h5 id="blog-author">by Mary Louis</h5>
                </div>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.9s">
                <div class="blog-thumb">
                    <span class="blog-date">Practice Aerobics / April 18, 2016</span>
                    <h3 class="blog-title"><a href="singleblog">How to practice Aerobics?</a></h3>
                    <h5 id="blog-author">by Michael Fit</h5>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection