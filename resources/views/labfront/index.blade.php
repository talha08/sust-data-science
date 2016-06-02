@extends('labfront.layouts.master')
@section('content')



	<div class="container"><!-- container -->



{{--path to go--}}
		<div class="row"><!-- row -->

			<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
				<ol class="breadcrumb">
					<li><a href="#">SUST cse data Science Lab</a></li>
					<li><a href="#">Home</a></li>
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
						<img src="labfront/img/slide-3.jpg" width="1140" height="400" alt="Image slide 3" />
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
								Big Data makes for big and interesting problems!
								Our lab focuses on analyzing large-scale text streams
								such as news, blogs, and social media to identify cultural
								trends around the world's people, places, and things.
								Our research covers a range of topics in natural language processing.
								A current focus is using Deep Learning techniques to build concise
								representations of the meanings of words in all significant languages,
								and use these powerful features to recognize entities and measure sentiment
								and other properties of texts. Another focus involves analyzing Wikipedia to
								identify the fame and significance of historical figures as reported in our
								book Who's Bigger? and associated website. Our Lydia technology has been
								licensed by General Sentiment, a social media analysis startup.

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


				{{--Newsletter--}}
					<li class="widget-container widget_newsletter">
						<!-- widget -->
						<h1 class="title-titan">Lab Newsletter</h1>
						@include('includes.alert')
						<form role="search" method="post" class="newsletter-form" action="{!!route('subscriber.action')!!}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="input-group">
								<input type="text" placeholder="Your e-mail address" autocomplete="off" class="form-control newsletter-form-input" name="subscriber_email" />
								<span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>
							</div>
							<span class="help-block">* Enter your e-mail address to subscribe.</span>
						</form>

						{{--@include('includes.alert')--}}
						{{--<div class="input-group">--}}
						{{--{!! Form::open(array('route' => 'subscriber.action') ) !!}--}}
						{{--{!!Form::text('subscriber_email','',array('class' => 'form-control newsletter-form-input','placeholder' => 'Your email here...' ))!!}--}}
						{{--<span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>--}}
						{{--</div>--}}
						{{--<span class="help-block">* Enter your e-mail address to subscribe.</span>--}}
						{{--{!! Form::close() !!}--}}

					</li>
				{{--Newsletter--}}



					<li class="widget-container widget_text">
						<!-- widget -->

					<li class="widget-container widget_text">
						<!-- widget -->

						<a href="{!! route('user.create') !!}" class="custom-button cb-green" title="How to apply?">
							<i class="custom-button-icon fa fa-check-square-o"></i>
								<span class="custom-button-wrap">
											<span class="custom-button-title">Apply For Membership?</span>
								<span class="custom-button-tagline">Join us when ever you feel it's time!</span>
								</span>
							<em></em>
						</a>

						<a href="{!! route('labfront.contact') !!}" class="custom-button cb-gray" title="Campus tour">
							<i class="custom-button-icon fa  fa-play-circle-o"></i>
								<span class="custom-button-wrap">
										<span class="custom-button-title">Information?</span>
								<span class="custom-button-tagline">If any question, Just email us ...</span>
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

							@foreach($event as $events)
								<li class="up-event-wrap">

									<h1 class="title-median"><a href="{!! route('labfront.event_single',$events->event_meta_data ) !!}" title="{!! Str::limit($events->event_title,20) !!}">{!! Str::limit($events->event_title,30) !!}</a></h1>

									<div class="up-event-meta clearfix">
										<div class="up-event-date">{!! \App\Event::fullDate($events->event_start) !!}</div>
										<div class="up-event-date">{!! \App\Event::fullEndDate($events->event_end) !!}</div>
										<div class="up-event-time">{!! \App\Event::fullTime($events->event_time) !!}</div>
									</div>

									<p>
										{!! Str::limit($events->event_details,100) !!}
										<a href="{!! route('labfront.event_single',$events->event_meta_data ) !!}" class="moretag" title="read more">MORE</a>
									</p>

								</li>
							@endforeach

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

							@foreach($news as $newsList)
							<li class="recent-news-wrap">

								<h1 class="title-median"><a href="#" title="{!! Str::limit($newsList->news_title,30) !!}">{!! Str::limit($newsList->news_title,30) !!}</a></h1>

								<div class="recent-news-meta">
									<div class="recent-news-date">{!! \App\News::fullDate($newsList->id) !!}</div>
								</div>

								<div class="recent-news-content clearfix">
									<figure class="recent-news-thumb">
										<a href="{!! route('labfront.full_news',$newsList->news_meta_data ) !!}" title="{!! Str::limit($newsList->news_title,30) !!}"><img src="{!! asset($newsList->news_image) !!}" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" />
										</a>
									</figure>
									<div class="recent-news-text">
										<p>
											{!! Str::limit($newsList->news_details, 100) !!} <a href="{!! route('labfront.full_news',$newsList->news_meta_data ) !!}" class="moretag" title="read more">MORE</a>
										</p>
									</div>
								</div>
							</li>
							@endforeach


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

							@foreach($project as $projectList)
								<div class="media">
									<div class="media-body">
										<h5 class="media-heading"><a href="#">{!! Str::limit($projectList->project_title,30) !!} </a></h5>
										<p>
											{!!Str::limit($projectList->project_details,80) !!}
										</p>
									</div>
								</div>
							@endforeach
					</div>
					<!-- tab 1 ends -->




					<div id="k-tab-profile" class="tab-pane fade">
						<!-- tab 2 starts -->
						@foreach($paper as $papers)
							<div class="media">
								<div class="media-body">
									<h5 class="media-heading"><a href="#">{!! Str::limit($papers->paper_title,30) !!} </a></h5>
									<p>
										{!!Str::limit($papers->paper_details,80) !!}
									</p>
								</div>
							</div>
						@endforeach
					</div>
					<!-- tab 2 ends -->


   {{--blogs--}}
					<div id="k-tab-settings" class="tab-pane fade">
						<!-- tab 3 starts -->
						@foreach($blog as $new)
							<div class="media">
								<a class="pull-left" href="javascript:;">
									<img class=" " src="{!! asset($new->img_thumbnail) !!}" alt="">
								</a>
								<div class="media-body">
									<h5 class="media-heading"><a href="{!! route('labfront.blog_details',$new->meta_data) !!}">{!! \App\Blog::fullDate($new->id) !!} </a></h5>
									<p>
										{!! $new->title !!}
									</p>
								</div>
							</div>
						@endforeach

					</div>
					<!-- tab 3 ends -->
	{{--blogs end--}}


				</div>
				<!-- ends tab containers -->
			</div>
		</div>
		<!-- row end -->

{{--Tabber end --}}




</div><!-- row end -->
</div><!-- row end -->


@endsection