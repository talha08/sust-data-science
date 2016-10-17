@extends('labfront.layouts.master')
@section('content')

	<div class="container"><!-- container -->




		{{--path to go--}}

		<div class="row"><!-- row -->


			<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

				<ol class="breadcrumb">
					<li><a href="{!! route('labfront.index') !!}">Home</a></li>
					<li class="active">People</li>
				</ol>

			</div><!-- breadcrumbs end -->

		</div><!-- row end -->

		{{--end of path to go--}}








		<div class="row no-gutter"><!-- row -->

			<div class="col-lg-12 col-md-12"><!-- doc body wrapper -->

				<div class="col-padded"><!-- inner custom column -->

					<div class="row gutter"><!-- row -->

						<div class="col-lg-12 col-md-12">

							<h1 class="page-title">People</h1><!-- category title -->

							<div class="category-description"><!-- category description -->
								{{--some text here--}}
							</div>

						</div>

					</div><!-- row end -->



					<div class="row gutter k-equal-height"><!-- row -->

						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Faculty</a></li>
								<li><a data-toggle="tab" href="#menu1">Students</a></li>
								<li><a data-toggle="tab" href="#menu2">Alumni</a></li>
							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									@if(! empty($teachers))
										@foreach($teachers as $users)
											<div class="leadership-wrapper"><!-- leadership single wrap -->

												<figure class="leadership-photo">
													<a href="{!! route('labfront.peopleProfile',$users->id ) !!}">
														<img src="{!! asset($users->teachers->img_url)!!}" alt="{!! $users->name !!}" />
													</a>
												</figure>
												<div class="leadership-meta clearfix">

													<h4 class="title-median"><a href="{!!  route('labfront.peopleProfile',$users->id ) !!}" title="Click to view full profile...">
															{!! $users->name !!}<small>Faculty</small>
														</a></h4>

													<div class="leadership-position">Member Since {!! Carbon\Carbon::now()->diffForHumans($users->created_at) !!} </div>

													<p class="leadership-bio">
														{!! $users->teachers->position !!},<small> {!! $users->teachers->organization !!}</small> <br>
														<small>Shahjalal University of Science and Technology, Sylhet</small>
													</p><br/>

												</div>
											</div><!-- leadership single wrap end -->
										@endforeach
									@else
										<p> No Teacher Found in Database</p>
									@endif

										<div class="row gutter"><!-- row -->

											<div class="col-lg-12">

												<ul class="pagination pull-right"><!-- pagination -->
													{!! $teachers->render() !!}
												</ul><!-- pagination end -->

											</div>

										</div><!-- row end -->

								</div>
								<div id="menu1" class="tab-pane fade">
									@if(! empty($students))
										@foreach($students as $users)
											<div class="leadership-wrapper"><!-- leadership single wrap -->

												<figure class="leadership-photo">
													<a href="{!! route('labfront.peopleProfile',$users->id ) !!}">
														<img src="{!! asset($users->students->img_url)!!}" alt="{!! $users->name !!}" />
													</a>
												</figure>
												<div class="leadership-meta clearfix">

													<h4 class="title-median"><a href="{!!  route('labfront.peopleProfile',$users->id ) !!}" title="Click to view full profile...">
															{!! $users->name !!}
															{{--<small>Alumni</small>--}}
														</a></h4>

													<div class="leadership-position">Member Since {!! Carbon\Carbon::now()->diffForHumans($users->created_at) !!} </div>

													<p class="leadership-bio">
														{!! $users->students->position !!},<small> {!! $users->students->organization !!} </small><br>
														<small>Shahjalal University of Science and Technology, Sylhet</small>
													</p><br/>

												</div>
											</div><!-- leadership single wrap end -->
										@endforeach
									@else
										<p> No People Found in Database</p>
									@endif

										<div class="row gutter"><!-- row -->

											<div class="col-lg-12">

												<ul class="pagination pull-right"><!-- pagination -->
													{!! $students->render() !!}
												</ul><!-- pagination end -->

											</div>

										</div><!-- row end -->


								</div>
								<div id="menu2" class="tab-pane fade">

									@if(! empty($alumnis))
										@foreach($alumnis as $users)
											<div class="leadership-wrapper"><!-- leadership single wrap -->

												<figure class="leadership-photo">
													<a href="{!! route('labfront.peopleProfile',$users->id ) !!}">
														<img src="{!! asset($users->students->img_url)!!}" alt="{!! $users->name !!}" />
													</a>
												</figure>
												<div class="leadership-meta clearfix">

													<h4 class="title-median"><a href="{!!  route('labfront.peopleProfile',$users->id ) !!}" title="Click to view full profile...">
															{!! $users->name !!}
															<small>Alumni</small>
														</a></h4>

													<div class="leadership-position">Member Since {!! Carbon\Carbon::now()->diffForHumans($users->created_at) !!} </div>

													<p class="leadership-bio">
														{!! $users->students->position !!},<small> {!! $users->students->organization !!} </small><br>
														<small>Shahjalal University of Science and Technology, Sylhet</small>
													</p><br/>

												</div>
											</div><!-- leadership single wrap end -->
										@endforeach
									@else
										<p> No People Found in Database</p>
									@endif

										<div class="row gutter"><!-- row -->

											<div class="col-lg-12">

												<ul class="pagination pull-right"><!-- pagination -->
													{!! $alumnis->render() !!}
												</ul><!-- pagination end -->

											</div>

										</div><!-- row end -->
								</div>
							</div>
						</div>









					</div><!-- row end -->

				</div><!-- inner custom column end -->

			</div><!-- doc body wrapper end -->






		</div><!-- row end -->

	</div><!-- container end -->



@endsection
