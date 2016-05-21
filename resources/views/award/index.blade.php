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

                                        <span class="pull-right">
                                               <a href="{!! route('award.create')!!}"><button class="btn btn-success">Create Award</button></a>
                                        </span>
						</div><br>



						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									<table class="table table-striped table-bordered" id="datatable">
										<thead>
										<tr>
											<th>id</th>
											<th>Title</th>
											<th>Details</th>
											<th>Developer</th>
											<th>Supervisor</th>
											<th>Position </th>
											<th>Details</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
										</thead>
										<tbody>
										@foreach ($award as $awards)
											<tr>
												<td>{!! $awards->id !!}</td>
												<td>{!! $awards->award_title !!}</td>
												<td>{!!Str::limit($awards->award_details,20) !!}</td>
												<td>{!! $awards->award_developer !!}</td>
												<td>{!! $awards->award_supervisor !!}</td>
												<td>{!! $awards->award_position !!}</td>

												<td> <a><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$awards->id}}" >Details</button></a></td>
												<td><a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('award.edit',$awards->id)!!}"  style="margin-right: 3px;">Edit</a></td>
												<td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $awards->id!!}">Delete</a></td>
											</tr>

											<!-- Modal -->
											<div id="myModal_{{$awards->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><img class="" src="{!! $awards->award_image !!}" alt="" align="left">
																	<br/><br/>
																	{{ $awards->award_title}}
																</h4>
															</div>
															<div class="modal-body" >

																<p><b>Award: </b>{{ $awards->award_title}}</p>
																<p><b>Details: </b>{{ $awards->award_details}}</p>
																<p><b>Developer: </b>{{ $awards->award_developer}}</p>
																<p><b>Supervisor: </b>{{ $awards->award_supervisor}}</p>
																<p><b>Position: </b>{{ $awards->award_position}}</p>
															</div>
														</center>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!--modal -->

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
					{!! Form::open(array('route' => array('award.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
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

	<style>

		.modal-dialog  {width:75%;}
	</style>

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
				var url = "<?php echo URL::route('award.index'); ?>";
				$(".deleteForm").attr("action", url+'/'+deleteId);
			});

		});
	</script>


@stop







