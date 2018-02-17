<!DOCTYPE html>
<html lang="en">
<head>
<!--
Fitness Template
http://www.templatemo.com/tm-487-fitness
-->
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('css/animate.css') }}">
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">

<!-- Main css -->
<link rel="stylesheet" href="{{ url('css/style.css') }}">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/bpg-nino-mtavruli-bold.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
<link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial/css/bpg-arial.min.css">
<link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- pre loader -->
<div  class="preloader">

    <div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top @yield('navclass')" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="/fp/public/" class="navbar-brand" style="font-family: 'Tinos', serif;">Lions Fitness</a>
        </div>
        <div class="collapse navbar-collapse" style="font-family: "BPG Nino Mtavruli Bold", sans-serif;">
            <ul class="nav navbar-nav navbar-right main-navigation">
                {{ menu('main_menu', 'bootstrap') }}
            </ul>
        </div>

    </div>
</div>


@yield('content')



<!-- footer -->
<footer>
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.3s">
                <h2>რას გთავაზობთ:</h2>
                <p> • კარდიო ვარჯიშები, <br>
                    • მძიმე დატვირთვის ვარჯიშებს,<br>
                    • აერობიკას,<br>
                    • პილატესს,<br>
                    • ზუმბას,<br>
                    • სპინინგის ოთახი,<br>
                    • სინერჯი ტრეინინგი<br>
                    • და მრავალი სხვა.</p>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-4"  data-wow-delay="0.3s">
                <h2>ღიაა</h2>
                    <div>
                        <p>ყოველ დღე</p>
                        <h4>8:00am - 2:00am</h4>
                    </div>
                    
            </div>

            <div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="0.3s">
                <h2>კონტაქტი</h2>
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.5s"></a></li>
                    <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.7s"></a></li>
                </ul>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12">
                <p class="copyright-text">ჯეოლაბი 2018
                    
                    |  <a rel="nofollow" href="http://www.templatemo.com/page/1" target="_parent">თამარ მეხრიშვილი</a></p>
            </div>
            
        </div>
    </div>
</footer>

<!-- js -->
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery.parallax.js') }}"></script>
<script src="{{ url('js/jquery.nav.js') }}"></script>
<script src="{{ url('js/jquery.backstretch.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/smoothscroll.js') }}"></script>
<script src="{{ url('js/wow.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>

</body>
</html>