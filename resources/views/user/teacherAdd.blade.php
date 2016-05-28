@extends('layouts.default')
@section('content')


	<div class="wraper container-fluid">

		@include('includes.alert')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">

					<div class="panel-heading">

						<h3 class="panel-title">{!!$title!!}</h3>

                       <span class="pull-right">
						   {{--<a href="{!! route('news.index')!!}"><button class="btn btn-success">All News</button></a>--}}
                        </span>
					</div>




					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel-body">


								{!! Form::open(array('route' => 'user.teacherStore', 'method' => 'post', 'class' => 'form-signin')) !!}


									<div class="form-group">
										{!! Form::label('name', 'Complete Name :', array('class' => 'col-md-4 control-label')) !!}<br/>
										{!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Your complete name...', 'autofocus')) !!}
									</div><br>

									<div class="form-group">
										{!! Form::label('email', 'Email :', array('class' => 'col-md-4 control-label')) !!}<br/>
										{!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address...', 'autofocus')) !!}
									</div><br>


									<div class="form-group ">
										{!! Form::label('password', 'Password :', array('class' => 'col-md-4 control-label')) !!}<br/>
										{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Input Password...')) !!}
									</div><br>

									<div class="form-group ">
										{!! Form::label('password_confirmation', 'Confirm Password :', array('class' => 'col-md-4 control-label')) !!}<br/>
										{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password...')) !!}
									</div><br>


									<div class="form-group">
										{!! Form::submit('Add Teacher', array('class' => 'btn btn-primary')) !!}
									</div>

									{!! Form::close() !!}

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>



@endsection