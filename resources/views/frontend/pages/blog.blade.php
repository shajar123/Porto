@extends('frontend.layout.layout')
@section('body')

	<div class="page-wrapper">
		<!-- End .top-notice -->

		<!-- End .header -->

		<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-section row">
                            @foreach ($blogs as $blog)

							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="single.html">
											<img src="{{asset($blog->image)}}" alt="Post" width="225"
												height="280">
										</a>
										<div class="post-date">
											<span class="day">26</span>
											<span class="month">Feb</span>
										</div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="{{ route("blog.details",$blog->id) }}">{{ $blog->title }}</a>
										</h2>
										<div class="post-content">
											<p>{{ $blog->description }}</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
                            @endforeach




						</div>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-categories">
								<h4 class="widget-title">Blog Categories</h4>

								<ul class="list">
									<li>
										<a href="#">All about clothing</a>

										<ul class="list">
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li><a href="#">Make-up &amp; beauty</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Fashion trends</a></li>
									<li><a href="#">Haircuts &amp; hairstyles</a></li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget widget-post">
								<h4 class="widget-title">Recent Posts</h4>

								<ul class="simple-post-list">
									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="{{asset('frontend/images/blog/widget/post-1.jpg')}}" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Top New Collection</a>
											<div class="post-meta">February 26, 2018</div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>

									<li>
										<div class="post-media">
											<a href="single.html">
												<img src="{{asset('frontend/images/blog/widget/post-2.jpg')}}" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="single.html">Fashion Trends</a>
											<div class="post-meta">February 26, 2018</div><!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">ARTICLES</a>
									<a href="#">CHAT</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->

		<!-- End .footer -->
	</div><!-- End .page-wrapper -->




@endsection
