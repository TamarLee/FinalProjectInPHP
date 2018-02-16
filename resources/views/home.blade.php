@extends('layout')


@section('title')
მთავარი
@endsection

@section('navclass')
sticky-navigation
@endsection


@section('content')
<!-- home -->
<section id="home" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <h3 class="wow bounceIn coloroftext" data-wow-delay="0.9s">სატრენაჟორო დარბაზი</h3>
                <h1 class="wow fadeInUp coloroftext" data-wow-delay="1.6s">
                Lions fitness</h1>
                <a href="#overview" class="wow fadeInUp smoothScroll btn btn-default" data-wow-delay="2s">გაიგე მეტი</a>
            </div>

        </div>
    </div>
</section>


<!-- about -->
<section id="overview" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <img src="https://scontent.cdninstagram.com/t51.2885-15/e35/12751274_575248519291851_1371957230_n.jpg?ig_cache_key=MTE4NDkxOTQxMDE1MjU4ODE0Mg%3D%3D.2.c" class="img-responsive" alt="Overview">
                
            </div>

            <div class="col-md-1"></div>

            <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
                <div class="overview-detail">
                    <h2>ჩვენს შესახებ</h2>
                    <p>Lions Fitness არის სატრენაჟორო დარბაზი, რომელიც გამოირჩევა უნიკალური დიზაინით, და მომხმარებელზე მაქსიმალურად ორიენტირებული პერსონალით.  ცენტრი მომხმარებლებს სთავაზობს ისეთ ვარჯიშებს როგორიცაა: <br> •   კარდიო ვარჯიშები, <br>•   მძიმე დატვირთვის ვარჯიშებს,<br>•   აერობიკას,<br>•   პილატესს,<br>•   ზუმბას,<br>•   სპინინგის ოთახი,<br>•   სინერჯი ტრეინინგი<br>•   და მრავალი სხვა.</p>
                    <a href="contact" class="btn btn-default smoothScroll">მეტი</a>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>
    </div>
</section>

@endsection