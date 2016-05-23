@extends('labfront.layouts.master')
@section('content')
	<div id="k-body"><!-- content wrapper -->

		<div class="container"><!-- container -->

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
						<li><a href="#">People</a></li>
						<li class="active">{!! $title !!}- {!! $user->name !!}</li>
					</ol>

				</div><!-- breadcrumbs end -->

			</div><!-- row end -->

			<div class="row no-gutter"><!-- row -->

				<div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

					<div class="col-padded"><!-- inner custom column -->

						<div class="row gutter"><!-- row -->

							<div class="col-lg-12 col-md-12">

								<h1 class="page-title">{!! $title !!} || {!! $user->name !!}</h1><!-- category title -->

							</div>

						</div><!-- row end -->

						<div class="row gutter"><!-- row -->

							<div class="col-lg-12 col-md-12">


										<div class="leadership-wrapper"><!-- leadership single wrap -->

											 <figure class="leadership-photo">
												 <br/>
												<img src="{!! asset($user->profiles->img_url)!!}" height="150" width="150"  alt="{!! $user->name !!}" />
												 <br/><br/>

												 @if($user->is_teacher == 1)
													 <b> <p>Teacher</p></b>
												 @elseif($user->is_teacher == 0)
													 <b> <p>Student</p></b>
												 @else
													 <b> <p>Alumni</p></b>
												 @endif

											</figure>
											<br/>




											{{--collapse start--}}
											<div class="col-sm-offset-3 "><!-- accordion -->
												<div id="accordion" class="panel-group">

													<div class="panel panel-default"><!-- accordion panel four -->
														<div class="panel-heading actives">
															<h4 class="panel-title actives">
																<a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
																	Collapsible Group Item #1
																</a>
															</h4>
														</div>
														<div class="panel-collapse collapse in" id="collapseOne">
															<div class="panel-body">
																<p>
																	Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec. In ut sapien id neque fermentum congue et et dui. Quisque pellentesque faucibus mattis. Donec eu sem turpis.
																</p>
															</div>
														</div>
													</div>


													<div class="panel panel-default"><!-- accordion panel two -->
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
																	Collapsible Group Item #2
																</a>
															</h4>
														</div>
														<div class="panel-collapse collapse" id="collapseTwo">
															<div class="panel-body">
																<img src="img/news-3.jpg" alt="Image" class="img-responsive" />
															</div>
														</div>
													</div>


													<div class="panel panel-default"><!-- accordion panel three -->
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
																	Collapsible Group Item #3
																</a>
															</h4>
														</div>
														<div class="panel-collapse collapse" id="collapseThree">
															<div class="panel-body">
																<p>
																	Duis vitae turpis non lorem pulvinar tincidunt quis sit amet ante. Duis egestas pulvinar ligula, ut auctor diam. Etiam malesuada mi a ligula congue, eget egestas velit mattis. Ut id aliquam mauris, non bibendum nisl. Phasellus tellus libero, blandit ut blandit vel, dignissim vel turpis.
																</p>
															</div>
														</div>
													</div>



													<div class="panel panel-default"><!-- accordion panel four -->
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#collapseFour" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
																	Collapsible Group Item #4
																</a>
															</h4>
														</div>
														<div class="panel-collapse collapse" id="collapseFour">
															<div class="panel-body">
																<p>
																	Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec. In ut sapien id neque fermentum congue et et dui. Quisque pellentesque faucibus mattis. Donec eu sem turpis.
																</p>
															</div>
														</div>
													</div>



												</div>
											</div><!-- row end -->
										</div><!-- leadership single wrap end -->
								{{--collapse end--}}


							</div>

						</div><!-- row end -->


					</div><!-- inner custom column end -->

				</div><!-- doc body wrapper end -->






				<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

					<div class="col-padded col-shaded"><!-- inner custom column -->

						<ul class="list-unstyled clear-margins"><!-- widgets -->

							<li class="widget-container widget_nav_menu"><!-- widget -->

								<h1 class="title-widget">Useful links</h1>

								<ul>
									<li><a href="{!! route('labfront.archive_blog') !!}" title="menu item">Blog Archive</a></li>
									<li><a href="{!! route('labfront.news') !!}" title="menu item">All News</a></li>
									<li><a href="{!! route('labfront.events') !!}" title="menu item">Upcoming Events</a></li>
									<li><a href="{!! route('labfront.contact') !!}" title="menu item">Contact</a></li>
									<li><a href="{!! route('user.create') !!}" title="menu item">Apply for part of this Lab?</a></li>
								</ul>

							</li>



							<li class="widget-container widget_recent_news"><!-- widgets list -->

								<h1 class="title-widget">Lab News</h1>

								<ul class="list-unstyled">

									@foreach($news as $newsList)
										<li class="recent-news-wrap news-no-summary">
											<div class="recent-news-content clearfix">
												<figure class="recent-news-thumb">
													<a href="#" title="{!! Str::limit($newsList->news_title,15) !!}"><img src="{!! asset($newsList->news_image) !!}" width=100px" height="100px" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
												</figure>
												<div class="recent-news-text">
													<div class="recent-news-meta">
														<div class="recent-news-date">{!! \App\News::fullDate($newsList->id) !!}</div>
													</div>
													<h4 class="title-median"><a href="{!! route('labfront.full_news') !!}" title="{!! Str::limit($newsList->news_title,15) !!}">
															{!! $newsList->news_title !!}
														</a></h4>
												</div>
											</div>
										</li>
									@endforeach

								</ul>

							</li><!-- widgets list end -->

							{{--<li class="widget-container widget_newsletter"><!-- widget -->--}}

							{{--<h1 class="title-titan">School Newsletter</h1>--}}

							{{--<form role="search" method="get" class="newsletter-form" action="#">--}}
							{{--<div class="input-group">--}}
							{{--<input type="text" placeholder="Your e-mail address" autocomplete="off" class="form-control newsletter-form-input" name="email" />--}}
							{{--<span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>--}}
							{{--</div>--}}
							{{--<span class="help-block">* Enter your e-mail address to subscribe.</span>--}}
							{{--</form>--}}

							{{--</li>--}}


						</ul><!-- widgets end -->

					</div><!-- inner custom column end -->

				</div><!-- sidebar wrapper end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- content wrapper end -->
@endsection


@section('style')
	<style>
		.leadership-wrapper { margin-top: 40px; }
		.leadership-photo { float: left; }
		.leadership-photo img { max-width: 140px; }
	</style>
@endsection

@section('script')
	 <script>
		 $('.panel-heading a').click(function() {
			 $('.panel-heading').removeClass('actives');
			 $(this).parents('.panel-heading').addClass('actives');

			 $('.panel-title').removeClass('actives'); //just to make a visual sense
			 $(this).parent().addClass('actives'); //just to make a visual sense

			// alert($(this).parents('.panel-heading').attr('class'));
		 });
	</script>
@endsection

