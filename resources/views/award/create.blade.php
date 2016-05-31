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

                    </span>
					</div>




					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel-body">

									{!! Form::open(array('route' => 'award.store',  'files' => true) ) !!}

									<div class="form-group">
										{!! Form::label('award_title', 'Title :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('award_title', '',array('class' => 'form-control','placeholder' =>  'Award title here'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('award_developer', 'Select Student :', array('class' => 'col-md-2 control-label')) !!}
										{!!Form::select('award_developer[]', $student, '',array('class' => 'select2', 'multiple' , 'autofocus'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('award_supervisor', 'Select Supervisor :', array('class' => 'col-md-2 control-label')) !!}
										{!!Form::select('award_supervisor[]', $teacher, '',array('class' => 'select2',  'multiple', 'autofocus'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('award_position', 'Position :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('award_position', '',array('class' => 'form-control','placeholder' =>  'Award position here'))!!}
									</div><br/>



									<div class="form-group">
										{!! Form::label('award_details', 'Details :', array('class' => 'control-label')) !!}<br/>
										{!!Form::textarea('award_details', '',array('class' => 'summernote form-control','placeholder' =>  '...................'))!!}
									</div><br/>


									{{--<div class="form-group">--}}
										{{--{!! Form::label('image', 'Choose an image') !!}--}}
										{{--{!! Form::file('image') !!}--}}
									{{--</div> <br>--}}

									<div class="form-group">
										{!! Form::submit('Create Award', array('class' => 'btn btn-primary')) !!}
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





@stop

@section('style')

	{!! Html::style('assets/select2/select2.css') !!}
	{!! Html::style('assets/summernote/summernote.css') !!}

@stop


@section('script')


	{!! Html::script('assets/select2/select2.min.js') !!}
	{!! Html::script('assets/summernote/summernote.min.js') !!}

	<script type="text/javascript">

		jQuery(document).ready(function() {

			$('.summernote').summernote({
				height: 200,                 // set editor height

				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor

				focus: true                 // set focus to editable area after initializing summernote
			});

			// Select2
			jQuery(".select2").select2({
				width: '100%'
			});
		});

	</script>

@stop











