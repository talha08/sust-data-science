@extends('labfront.layouts.master')
@section('content')



	<div class="container"><!-- container -->

{{--path to go--}}
		<div class="row"><!-- row -->

			<div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

				<form action="#" id="top-searchform" method="get" role="search">
					<div class="input-group">
						<input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
					</div>
				</form>

				<div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

			</div><!-- top search end -->

			<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Page Example</li>
				</ol>

			</div><!-- breadcrumbs end -->

		</div><!-- row end -->
 {{--path to go end--}}



	{{--Slider Start--}}
	<div class="row no-gutter fullwidth"><!-- row -->

		<div class="col-lg-12 clearfix"><!-- featured posts slider -->

			<div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->

				<ol class="carousel-indicators"><!-- Indicators -->
					<li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-featured" data-slide-to="1"></li>
					<li data-target="#carousel-featured" data-slide-to="2"></li>
					<li data-target="#carousel-featured" data-slide-to="3"></li>
					<li data-target="#carousel-featured" data-slide-to="4"></li>
				</ol><!-- Indicators end -->

				<div class="carousel-inner"><!-- Wrapper for slides -->

					<div class="item active">
						<img src="labfront/img/slide-3.jpg" alt="Image slide 3" />
						<div class="k-carousel-caption pos-1-3-right scheme-dark">
							<div class="caption-content">
								<h3 class="caption-title">Learning makes us stronger for life</h3>
								<p>
									We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
								</p>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="labfront/img/slide-2.jpg" alt="Image slide 2" />
						<div class="k-carousel-caption pos-1-3-left scheme-light">
							<div class="caption-content">
								<h3 class="caption-title">Learning makes us stronger for life</h3>
								<p>
									We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
								</p>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="labfront/img/slide-1.jpg" alt="Image slide 1" />
						<div class="k-carousel-caption pos-2-3-right scheme-dark">
							<div class="caption-content">
								<h3 class="caption-title">Learning makes us stronger for life</h3>
								<p>
									We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
								</p>
								<p>
									<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
								</p>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="labfront/img/slide-4.jpg" alt="Image slide 4" />
						<div class="k-carousel-caption pos-2-3-left scheme-light">
							<div class="caption-content">
								<h3 class="caption-title">Learning makes us stronger for life</h3>
								<p>
									We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
								</p>
								<p>
									<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
								</p>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="labfront/img/slide-5.jpg" alt="Image slide 5" />
						<div class="k-carousel-caption pos-c-2-3 scheme-dark no-bg">
							<div class="caption-content">
								<h3 class="caption-title title-giant">Learning makes us stronger for life</h3>
								<p>
									We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
								</p>
								<p>
									<a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
								</p>
							</div>
						</div>
					</div>

				</div><!-- Wrapper for slides end -->

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				<a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
				<!-- Controls end -->

			</div><!-- featured posts slider wrapper end -->

		</div><!-- featured posts slider end -->

	</div><!-- row end -->

	{{--slider End--}}










	{{--welcome panel--}}

	<div class="row no-gutter">
		<!-- row -->

		<div class="col-lg-8 col-md-8">
			<!-- doc body wrapper -->

			<div class="col-padded">
				<!-- inner custom column -->

				<div class="row gutter">
					<!-- row -->

					<div class="col-lg-12 col-md-12">

						<div class="news-title-meta">
							<br/>
							<h1 class="page-title">
								Welcome to the Data Science Lab at SUST!
							</h1>
						</div>

						<div class="news-body">
							<p>
								Big Data makes for big and interesting problems! Our lab focuses on analyzing large-scale text streams such as news, blogs, and social media to identify cultural trends around the world's people, places, and things. Our research covers a range of topics in natural language processing. A current focus is using Deep Learning techniques to build concise representations of the meanings of words in all significant languages, and use these powerful features to recognize entities and measure sentiment and other properties of texts. Another focus involves analyzing Wikipedia to identify the fame and significance of historical figures as reported in our book Who's Bigger? and associated website. Our Lydia technology has been licensed by General Sentiment, a social media analysis startup.

							</p>

						</div>

					</div>

				</div>
				<!-- row end -->

			</div>
			<!-- inner custom column end -->

		</div>
		<!-- doc body wrapper end -->

	{{--end of welcome panel--}}












 {{--side bar--}}

		<div id="k-sidebar" class="col-lg-4 col-md-3">
			<!-- sidebar wrapper -->

			<div class="col-padded col-shaded">
				<!-- inner custom column -->

				<ul class="list-unstyled clear-margins">
					<!-- widgets -->


					<li class="widget-container widget_newsletter">
						<!-- widget -->

						<h1 class="title-titan">Lab Newsletter</h1>

						<form role="search" method="get" class="newsletter-form" action="#">
							<div class="input-group">
								<input type="text" placeholder="Your e-mail address" autocomplete="off" class="form-control newsletter-form-input" name="email" />
								<span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>
							</div>
							<span class="help-block">* Enter your e-mail address to subscribe.</span>
						</form>

					</li>

					<li class="widget-container widget_text">
						<!-- widget -->

					<li class="widget-container widget_text">
						<!-- widget -->

						<a href="#" class="custom-button cb-green" title="How to apply?">
							<i class="custom-button-icon fa fa-check-square-o"></i>
                        <span class="custom-button-wrap">
                                    	<span class="custom-button-title">How to apply?</span>
                        <span class="custom-button-tagline">Join us whenewer you feel it’s time!</span>
                        </span>
							<em></em>
						</a>

						<a href="#" class="custom-button cb-gray" title="Campus tour">
							<i class="custom-button-icon fa  fa-play-circle-o"></i>
                        <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Campus tour</span>
                        <span class="custom-button-tagline">Student's life at the glance. Take a tour...</span>
                        </span>
							<em></em>
						</a>

						{{--<a href="#" class="custom-button cb-yellow" title="Prospectus">--}}
							{{--<i class="custom-button-icon fa  fa-leaf"></i>--}}
                        {{--<span class="custom-button-wrap">--}}
                                    	{{--<span class="custom-button-title">Prospectus</span>--}}
                        {{--<span class="custom-button-tagline">Request a free School Prospectus!</span>--}}
                        {{--</span>--}}
							{{--<em></em>--}}
						{{--</a>--}}

					</li>

				</ul>
				<!-- widgets end -->

			</div>
			<!-- inner custom column end -->

		</div>
		<!-- sidebar wrapper end -->

	</div>
	<!-- row end -->

 {{--side bar end--}}






	<div class="row no-gutter"><!-- row -->

{{--upcoming events start--}}

		<div class="col-lg-4 col-md-4">
			<!-- upcoming events wrapper -->

			<div class="col-padded col-shaded">
				<!-- inner custom column -->


				<ul class="list-unstyled clear-margins">
					<!-- widgets -->


					<li class="widget-container widget_up_events">
						<!-- widgets list -->

						<h1 class="title-widget">Upcoming Events</h1>

						<ul class="list-unstyled">

							<li class="up-event-wrap">

								<h1 class="title-median"><a href="#" title="Annual alumni game">Annual alumni game</a></h1>

								<div class="up-event-meta clearfix">
									<div class="up-event-date">Jul 25, 2015</div>
									<div class="up-event-time">9:00 - 11:00</div>
								</div>

								<p>
									Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra... <a href="#" class="moretag" title="read more">MORE</a>
								</p>

							</li>

							<li class="up-event-wrap">

								<h1 class="title-median"><a href="#" title="School talents gathering">School talents gathering</a></h1>

								<div class="up-event-meta clearfix">
									<div class="up-event-date">Aug 25, 2015</div>
									<div class="up-event-time">8:30 - 10:30</div>
								</div>

								<p>
									Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... <a href="#" class="moretag" title="read more">MORE</a>
								</p>

							</li>

							<li class="up-event-wrap">

								<h1 class="title-median"><a href="#" title="School talents gathering">Campus "Open Doors"</a></h1>

								<div class="up-event-meta clearfix">
									<div class="up-event-date">Sep 04, 2015</div>
									<div class="up-event-date">Sep 11, 2015</div>
								</div>

								<p>
									Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere... <a href="#" class="moretag" title="read more">MORE</a>
								</p>

							</li>

						</ul>

					</li>
					<!-- widgets list end -->

				</ul>
				<!-- widgets end -->

			</div>
			<!-- inner custom column end -->

		</div>
		<!-- upcoming events wrapper end -->
{{--upcoming event end--}}




{{--upcoming news--}}
		<div class="col-lg-4 col-md-4">
			<!-- recent news wrapper -->

			<div class="col-padded">
				<!-- inner custom column -->

				<ul class="list-unstyled clear-margins">
					<!-- widgets -->

					<li class="widget-container widget_recent_news">
						<!-- widgets list -->

						<h1 class="title-widget">Lab News</h1>

						<ul class="list-unstyled">

							<li class="recent-news-wrap">

								<h1 class="title-median"><a href="#" title="Megan Boyle flourishes...">Megan Boyle flourishes at Boston University</a></h1>

								<div class="recent-news-meta">
									<div class="recent-news-date">Jun 12, 2014</div>
								</div>

								<div class="recent-news-content clearfix">
									<figure class="recent-news-thumb">
										<a href="#" title="Megan Boyle flourishes..."><img src="labfront/img/recent-news-thumb-1.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" />
										</a>
									</figure>
									<div class="recent-news-text">
										<p>
											Megan Boyle is flourishing at Boston University in Boston. Our High School Class of 2012 member is majoring... <a href="#" class="moretag" title="read more">MORE</a>
										</p>
									</div>
								</div>

							</li>

							<li class="recent-news-wrap">

								<h1 class="title-median"><a href="#" title="Buntington Alum...">Buntington Alum Marc Bloom Pens New Book</a></h1>

								<div class="recent-news-meta">
									<div class="recent-news-date">Jun 10, 2014</div>
								</div>

								<div class="recent-news-content clearfix">
									<figure class="recent-news-thumb">
										<a href="#" title="Buntington Alum..."><img src="labfront/img/recent-news-thumb-2.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 2" />
										</a>
									</figure>
									<div class="recent-news-text">
										<p>
											Marc Bloom has a lot to say. He likes to share his experiences and opinions with others, so the 2011 Buntington... <a href="#" class="moretag" title="read more">MORE</a>
										</p>
									</div>
								</div>

							</li>

							<li class="recent-news-wrap">

								<h1 class="title-median"><a href="#" title="Cody Rotschild Enjoys...">Cody Rotschild Enjoys Life in Montreal</a></h1>

								<div class="recent-news-meta">
									<div class="recent-news-date">Jun 05, 2014</div>
								</div>

								<div class="recent-news-content clearfix">
									<figure class="recent-news-thumb">
										<a href="#" title="Cody Rotschild Enjoys..."><img src="labfront/img/recent-news-thumb-3.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 3" />
										</a>
									</figure>
									<div class="recent-news-text">
										<p>
											Cody Rotschild might have graduated with Buntington High School’s Class of 2011, but she is really a woman... <a href="#" class="moretag" title="read more">MORE</a>
										</p>
									</div>
								</div>

							</li>

						</ul>

					</li>
					<!-- widgets list end -->

				</ul>
				<!-- widgets end -->

			</div>
			<!-- inner custom column end -->

		</div>
		<!-- recent news wrapper end -->

{{--upcoming news end--}}






{{--Tabber start --}}
		<div class="row k-equal-height">
			<!-- row -->

			<div class="col-lg-4 col-md-4 col-sm-12">
				<!-- tabber -->
				<br>
				<br>
				<br>
				<ul class="nav nav-tabs nav-justified">
					<!-- starts tab controls -->
					<li class="active"><a href="#k-tab-download" data-toggle="tab">Projects</a>
					</li>
					<li><a href="#k-tab-profile" data-toggle="tab">Papers</a>
					</li>
					<li><a href="#k-tab-settings" data-toggle="tab">Blogs</a>
					</li>
				</ul>
				<!-- ends tab controls -->

				<div class="tab-content">
					<!-- starts tab containers -->



					<div id="k-tab-download" class="tab-pane fade in active">
						<!-- tab 1 starts -->
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Morbi gravida vulputate scelerisque. Nunc laoreet elit justo, eu commodo risus volutpat id. Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec.
						</p>
						<div class="gap10"></div>
						<p>
							<a href="#" title="Download" class="btn btn-success"><i class="icon-cloud-download"></i> &nbsp; Read More</a>
						</p>
					</div>
					<!-- tab 1 ends -->




					<div id="k-tab-profile" class="tab-pane fade">
						<!-- tab 2 starts -->
						<p>
							<img src="labfront/img/recent-news-thumb-2.jpg" alt="Right" class="alignleft" /> Phasellus porta nisl et enim auctor euismod. Nunc lectus purus, congue quis pulvinar vitae, tempus et risus. Nulla vestibulum purus ut dui molestie facilisis. Sed elementum vel velit vel ornare. Nam pharetra nisi quis nisi gravida consequat. Nam id lectus mollis, auctor massa eu, porttitor orci. Etiam pretium sem lectus, pellentesque viverra lorem dapibus eu.
						</p>
						<div class="gap10"></div>
						<p>
							<a href="#" title="Download" class="btn btn-success"><i class="icon-cloud-download"></i> &nbsp; Read More</a>
						</p>
					</div>
					<!-- tab 2 ends -->



					<div id="k-tab-settings" class="tab-pane fade">
						<!-- tab 3 starts -->
						<p>
							<span class="badge badge-warning">1</span> &nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Duis vel placerat nisi. Vestibulum tempus metus eros, non porttitor i psum ultrices nec. In eleifend nulla dui. Aliquam ut nisi id tortor lac inia interdum nec at magna.
						</p>
						<p>
							<span class="badge badge-warning">2</span> &nbsp; Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec. In ut sapien id neque fermentum congue et et dui. Quisque pellent esque faucibus mattis. Donec eu sem turpis.
						</p>

					</div>
					<!-- tab 3 ends -->



				</div>
				<!-- ends tab containers -->
			</div>
		</div>
		<!-- row end -->

{{--Tabber end --}}




</div><!-- row end -->
</div><!-- row end -->


@endsection