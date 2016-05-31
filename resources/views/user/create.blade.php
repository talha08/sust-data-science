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
                    <li><a href="#">SUST cse data Science Lab</a></li>
                    <li><a href="#">Home</a></li>
                </ol>
            </div><!-- breadcrumbs end -->

        </div><!-- row end -->
        {{--path to go end--}}

    <!-- Page Content Start -->
    <!-- ================== -->

    <div class="wraper container-fluid">
        {{--<div class="page-title">--}}
            {{--<h3 class="title">Form Wizard</h3>--}}
        {{--</div>--}}

 <br/><br/>
        <!-- Vertical Steps Example -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    @include('includes.alert')
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up Form</h3>
                    </div>


                    <div class="panel-body">
                        {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'id' =>'form_id', 'class' => 'form-signin')) !!}
                        <div id="wizard-vertical">


                            <h3>Account</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Complete Name *</label>
                                    <div class="col-lg-10">
                                        {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Your complete name...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Email *</label>
                                    <div class="col-lg-10">
                                        {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Your email here...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Password *</label>
                                    <div class="col-lg-10">
                                        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Input Password...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Confirm Password *</label>
                                    <div class="col-lg-10">
                                        {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                </div>
                            </section>



                            <h3>Education</h3>
                            <section>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Year *</label>
                                    <div class="col-lg-10">
                                        {!! Form::text('year', '', array('class' => 'form-control', 'placeholder' => 'Select your Education year...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Semester *</label>
                                    <div class="col-lg-10">
                                        {!! Form::text('semester', '', array('class' => 'form-control', 'placeholder' => 'Select your Education semester...')) !!}
                                    </div><br>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="address1">Working Platform *</label>
                                    <div class="col-lg-10">
                                        {!! Form::text('platform', '', array('class' => 'form-control', 'placeholder' => 'Your complete name...')) !!}
                                    </div><br>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                </div>
                            </section>


                            <h3>Contact</h3>
                            <section>
                                   <div class="form-group clearfix">
                                        <label class="col-lg-2 control-label " for="address1">Phone *</label>
                                        <div class="col-lg-10">
                                            {!! Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'Your phone number...')) !!}
                                        </div><br>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-lg-2 control-label " for="address1">GitHub *</label>
                                        <div class="col-lg-10">
                                            {!! Form::text('github_user', '', array('class' => 'form-control', 'placeholder' => 'Your github username...')) !!}
                                        </div><br>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-lg-2 control-label " for="address1">LinkedIn *</label>
                                        <div class="col-lg-10">
                                            {!! Form::text('linkedIn_user', '', array('class' => 'form-control', 'placeholder' => 'Your linkedin username...')) !!}
                                        </div><br>
                                    </div>
                            </section>


                            {{--<h3>Hints</h3>--}}
                            {{--<section>--}}
                                {{--<div class="form-group clearfix">--}}
                                    {{--<div class="col-lg-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--{!! Form::submit('Sign Up', array('class' => 'btn btn-login  btn-purple ', 'type'=>'submit')) !!}--}}
                                        {{--</div><br>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</section>--}}


                        </div> <!-- End #wizard-vertical -->
                    </div>  <!-- End panel-body -->


                    {!! Form::close() !!}
                </div> <!-- End panel -->

            </div> <!-- end col -->

        </div> <!-- End row -->


    </div>
    </div>
    <!-- Page Content Ends -->
    <!-- ================== -->
@stop

@section('style')
        <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap-reset.css') !!}

        <!--Form Wizard-->
    {!! Html::style('assets/form-wizard/jquery.steps.css') !!}



@stop

@section('script')


        <!--Form Wizard-->
    {!! Html::script('assets/form-wizard/jquery.steps.min.js') !!}
    {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}

        <!--wizard initialization-->
    {!! Html::script('assets/form-wizard/wizard-init.js') !!}

@stop
