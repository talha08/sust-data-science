@extends('layouts.default')
@section('content')

	<div class="row">
		<div class="col-lg-12">
			@include('includes.alert')


			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">


						<div class="panel-heading">

							<h3 class="panel-title">{!!$title!!}</h3>


						</div><br>



						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									<table class="table table-striped table-bordered" id="datatable">
										<thead>
										<tr>
											<th>id</th>
											<th>Name</th>
											<th>Email</th>
											<th>Member Since</th>
											<th>Make Alumni</th>
											<th>Delete</th>
										</tr>
										</thead>
										<tbody>
										@foreach ($user as $users)
											<tr>
												<td>{!! $users->id !!}</td>
												<td><a style="color: teal;" href="{!!route('user.profile',$users->id)!!}"  >{!! $users->name !!}</a>
												<td>{!! $users->email !!}</td>
												<td>{!! \Carbon\Carbon::now()->diffForHumans($users->created_at) !!}</td>
												<td><a class="btn btn-info btn-xs btn-archive Editbtn" href="{!!route('user.makeAlumni',$users->id)!!}"  style="margin-right: 3px;">Make Alumni</a></td>
												<td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $users->id!!}"><i class="ion-trash-a" aria-hidden="true"></i></a></td>
											</tr>
										@endforeach

										</tbody>
									</table>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
				</div>
				<div class="modal-body">
					Are you sure to delete?
				</div>
				<div class="modal-footer">
					{!! Form::open(array('route' => array('user.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
					{!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


@stop


@section('style')

	{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

@stop

@section('script')

	{!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
	{!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}




	//for Datatable
	<script type="text/javascript">

		$(document).ready(function() {
			$('#datatable').dataTable();
		});
	</script>



	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			/* do not add datatable method/function here , its always loaded from footer -- masiur */
			$(document).on("click", ".deleteBtn", function() {
				var deleteId = $(this).attr('deleteId');
				var url = "<?php echo URL::route('user.student'); ?>";
				$(".deleteForm").attr("action", url+'/'+deleteId);
			});

		});
	</script>


@stop







