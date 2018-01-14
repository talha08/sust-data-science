@extends('labfront.layouts.master')
@section('content')


	<div id="k-body"><!-- content wrapper -->

		<div class="container"><!-- container -->

			<div class="row"><!-- row -->

				<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

					<ol class="breadcrumb">
						<li><a href="{!!  route('labfront.index') !!}">Home</a></li>
						<li><a href="{!!  route('labfront.paper') !!}">Paper</a></li>
						<li class="active">{!! $paper->paper_title !!}</li>
					</ol>

				</div><!-- breadcrumbs end -->

			</div><!-- row end -->



			<div class="row no-gutter"><!-- row -->

				<div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

					<div class="col-padded"><!-- inner custom column -->

						<div class="row gutter"><!-- row -->

							<div class="col-lg-12 col-md-12">

								<div class="events-title-meta clearfix">
									<h1 class="page-title">{!! $paper->paper_title !!}</h1>
									<div class="event-meta">
										{{--<span class="event-from">Start - {!! \App\Project::fullDate($paper->id,$paper->created_at) !!}</span>--}}
										{{--@if($paper->paper_status ==0)--}}
											{{--<span class="event-divider">to</span>--}}
											{{--<span class="event-to">End  - {!! \App\Project::fullDate($paper->id,$paper->updated_at) !!}</span>--}}
										{{--@endif--}}

										{{--@if($paper->paper_status ==1 )--}}
											{{--<span class="event-time">Running Project</span>--}}
										{{--@else--}}
											{{--<span class="event-time">Complete Project</span>--}}
										{{--@endif--}}

									</div>
								</div>



								<div class="news-body clearfix">
									<p>{!! strip_tags($paper->paper_details) !!}</p><br/><br/>



									<br/><b>Author: </b><br>
									@foreach($paper->users as $user=> $value)
										{{--@if($value->is_teacher == 1)--}}
											<a href="{!!  route('labfront.peopleProfile',$value->id ) !!}" title="Click to view full profile...">{{ $value->name }}</a>,&nbsp;
										{{--@endif--}}
									@endforeach


									@if($paper->paper_url)
									<br/><br/>
									<b>Paper Link: </b>
									@if(App\Paper::isValidURL($paper->paper_url))
									<p>
										<a class="" href="{!!$paper->paper_url!!}"  target="_blank" style="margin-right: 3px; color:teal;">{!!$paper->paper_url!!}</a>
									</p>
									@else
										{{$paper->paper_url}}
								    @endif
									@endif

									@if(!empty($paper->paper_pdf))
									<br/><br/><b>File: </b><p>
										{!! $paper->paper_pdf !!}
										<a class="btn btn-info btn-xs btn-archive" href="{!! $paper->paper_pdf!!}" target="_blank">
											<i class="fa fa-download" aria-hidden="true"></i>
										</a><br><br/>
									@endif

								</div><br/>

							</div>

						</div><!-- row end -->

					</div><!-- inner custom column end -->

				</div><!-- doc body wrapper end -->




				<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

					<div class="col-padded col-shaded"><!-- inner custom column -->

						<ul class="list-unstyled clear-margins"><!-- widgets -->


							<li class="widget-container widget_recent_news"><!-- widgets list -->

								<h1 class="title-widget">Lab News</h1>

								<ul class="list-unstyled">


									<li class="widget-container widget_newsletter"><!-- widget -->

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

									</li>


									<br/><br/>
									<h1 class="title-widget">Lab Top News</h1>
									@foreach($news as $newsList)
										<li class="recent-news-wrap news-no-summary">
											<div class="recent-news-content clearfix">
												<figure class="recent-news-thumb">
													<a href="{!! route('labfront.full_news',$newsList->news_meta_data) !!}" title="{!! Str::limit($newsList->news_title,15) !!}"><img src="{!! asset($newsList->news_image) !!}" width=100" height="100" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
												</figure>
												<div class="recent-news-text">
													<div class="recent-news-meta">
														<div class="recent-news-date">{!! \App\News::fullDate($newsList->id) !!}</div>
													</div>
													<h4 class="title-median"><a href="{!! route('labfront.full_news',$newsList->news_meta_data) !!}" title="{!! Str::limit($newsList->news_title,15) !!}">
															{!! $newsList->news_title !!}
														</a></h4>
												</div>
											</div>
										</li>
									@endforeach



								</ul><!-- widgets end -->

					</div><!-- inner custom column end -->

				</div><!-- sidebar wrapper end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- content wrapper end -->
@endsection

@section('style')
	{!! Html::style('css/languageTag.css') !!}
@stop