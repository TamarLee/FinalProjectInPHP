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

				<div class="blog-content wow fadeInUp" data-wow-delay="1s">
                	<h3>The best way to make Online Business</h3>
					<span class="meta-date"><a href="#">14 May 2016</a></span>
					<span class="meta-comments"><a href="#blog-comments">10 comments</a></span>
					<span class="meta-author"><a href="#blog-author">David Walker</a></span>
					<div class="blog-clear"></div>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa.</p>
                    
                    <div class="blog-image wow fadeInUp" data-wow-delay="0.9s">
                        <img src="images/blog-thumb.jpg" class="img-responsive" alt="blog">
                    </div>
                
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quisquam, aut, eum, natus excepturi impedit ipsa rerum ratione id dolores ducimus minus eos quod veniam similique fugit illum error facilis!
					</blockquote>
					<p>Sed tempus elementum purus. Maecenas porta lobortis dui, vitae ornare lacus iaculis eu. Sed in tristique mauris. Sed vel nulla mi. Aliquam vulputate hendrerit fermentum. Nullam at ornare elit. Nulla ut commodo nulla. Nam bibendum feugiat enim nec lobortis. Etiam hendrerit blandit augue lacinia finibus.</p>
				</div>
                
				
                
				<div class="blog-author wow fadeInUp" data-wow-delay="1s">
					<div class="media">
						<div class="media-object pull-left">
							<a href="#"><img src="images/blog-author.jpg" class="img-responsive img-circle" alt="blog"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Michael Dan</h4>
							<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
						</div>
					</div>
				</div>

				<div class="blog-comment wow fadeInUp" data-wow-delay="1s">
					<h3>2 comments</h3>
						<div class="media">
							<div class="media-object pull-left">
								<img src="images/comment1.jpg" class="img-responsive img-circle" alt="blog">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Sandar Minn</h4>
								<h5>18 May 2016</h5>
								<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
									<div class="media">
							<div class="media-object pull-left">
								<img src="images/comment2.jpg" class="img-responsive img-circle" alt="blog">
							</div>
							<div class="media-body">
								<h4 class="media-heading">George Linn</h4>
								<h5>14 May 2016</h5>
								<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
							</div>
						</div>
							</div>
						</div>
				</div>

				<div class="blog-comment-form wow fadeInUp" data-wow-delay="1s">
					<h3>Leave a comment</h3>
						<form action="#" method="post" id="comment-form">
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Name" name="name" required>
							</div>
							<div class="col-md-6 col-sm-6">
								<input type="email" class="form-control" placeholder="Email" name="email" required>
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Message" rows="5" name"message" required id="message"></textarea>
							</div>
							<div class="col-md-3 col-sm-3">
								<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
							</div>
						</form>
				</div>

			</div>

			<div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-categories">
					<h3>Categories</h3>
						<li><a href="#">Body Fitness</a></li>
						<li><a href="#">Get Online Tips</a></li>
						<li><a href="#">Aerobic Exercises</a></li>
                        <li><a href="#">Yoga Courses</a></li>
                        <li><a href="#">General Health</a></li>
                        <li><a href="#">Fit and Lift</a></li>
				</div>

				<div class="recent-post">
					<h3>Recent Posts</h3>

						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb1.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>18 May 2016</h5>
								<h4 class="media-heading"><a href="#">How to get a fitness model body within 30 days</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb2.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>14 May 2016</h5>
								<h4 class="media-heading"><a href="#">Explore Gym Services</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb3.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>10 May 2016</h5>
								<h4 class="media-heading"><a href="#">How to practice Aerobics?</a></h4>
							</div>
						</div>
				</div>
                
			</div>
			
		</div>
	</div>
</section>

@endsection