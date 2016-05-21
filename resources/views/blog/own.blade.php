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
                                               <a href="{!! route('blog.create')!!}"><button class="btn btn-success">Create Blog</button></a>
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
                                        <th>Tag</th>
                                        <th>Image</th>
                                        <th>Meta Data/ Url</th>
                                        <th>Created at</th>
                                        <th>Details</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($blog as $blogs)
                                    <tr>
                                        <td>{!! $blogs->id !!}</td>
                                        <td>{!! $blogs->title !!}</td>
                                        <td>{!! $blogs->tag !!}</td>
                                        <td> <img class="" src="{!! $blogs->img_thumbnail !!}" alt=""></td>
                                        <td>{!! $blogs->meta_data !!}</td>
                                        <td>{!! $blogs->created_at->format('Y-m-d') !!}</td>
                                        <td> <a><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$blogs->id}}" >Details</button></a></td>
                                        <td><a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('blog.edit',$blogs->id)!!}"  style="margin-right: 3px;">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blogs->id!!}">Delete</a></td>
                                    </tr>

                                    <!-- Modal -->
                                    <div id="myModal_{{$blogs->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content" >
                                                <center>
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"><img class="img-circle" src="{!! $blogs->img_thumbnail !!}" alt="" align="left">{{ $blogs->title}}</h4>
                                                    </div>
                                                    <div class="modal-body" >
                                                        <p><b>Id: </b>{{ $blogs->id}}</p>
                                                        <p><b>Meta/Url: </b>{{ $blogs->meta_data}}</p>
                                                        <p><b>Tag: </b>{{ $blogs->tag}}</p>
                                                        <p><b>Details: </b>{{ $blogs->details}}</p>
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
                {!! Form::open(array('route' => array('blog.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
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
            var url = "<?php echo URL::route('blog.index'); ?>";
            $(".deleteForm").attr("action", url+'/'+deleteId);
        });

    });
</script>


@stop







