@extends('labfront.layouts.master')
@section('content')

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
                <li><a href="{!! route('labfront.index') !!}">Home</a></li>
                <li class="active">Sign Up</li>
            </ol>

        </div><!-- breadcrumbs end -->

    </div><!-- row end -->
    {{--path to go end--}}







<!--container start-->
<div class="container">

    <h2>SignUp and Be a Proud Member of This Lab</h2> <br/>

        <div class="col-lg-7 col-sm-10 address">

            <div class="contact-form">
                @include('includes.alert')

                {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}




                <div class="form-group">
                    {!! Form::label('name', 'Complete Name :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Your complete name...', 'autofocus')) !!}
                </div><br>

                <div class="form-group">
                    {!! Form::label('email', 'Email :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address...', 'autofocus')) !!}
                </div><br>

                <div class="form-group">
                    {!! Form::label('platform', 'Working Platform :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::select('platform', $platform,'', array('class' => 'select2' ,'placeholder' => 'Your working platform...','id' => 'status')) !!}
                </div><br>

                <div class="form-group">
                    {!! Form::label('position', 'Session :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('position', '', array('class' => 'form-control', 'placeholder' => 'ex;2012-2013', 'autofocus')) !!}
                </div><br>


                {{--<div class="form-group">--}}
                    {{--{!! Form::label('organization', 'Organization / Institute :', array('class' => 'col-md-4 control-label')) !!}--}}
                    {{--{!! Form::text('organization', '', array('class' => 'form-control', 'placeholder' => 'Input organization/institute...', 'autofocus')) !!}--}}
                {{--</div><br>--}}



                <div class="form-group ">
                    {!! Form::label('password', 'Password :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Input Password...')) !!}
                </div><br>

                <div class="form-group ">
                    {!! Form::label('password_confirmation', 'Confirm Password :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password...')) !!}
                </div><br>

                <div class="form-group text-right">
                 {!! Form::submit('Sign Up', array('class' => 'btn btn-lg btn-login btn-block btn-purple ', 'type'=>'submit')) !!}
                </div>


                {!! Form::close() !!}
            </div>
        </div>

    {{--<!-- Right side bar -->--}}
    {{--<div class="col-lg-3">--}}
        {{--<div class="blog-side-item">--}}

            {{--<center>--}}
                {{--<h3>Or you can sign up via social network</h3>--}}

                {{--<div class="login-social-link">--}}
                    {{--<a href="{{ route('login/fb') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>--}}
                    {{--<!-- <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Twitter</a> -->--}}
                    {{--<a href="{{ route('login/gp') }}" class="btn btn-danger"><i class="fa fa-google-plus"></i> Google</a>--}}
                {{--</div>--}}


                {{--<div class="registration">--}}
                    {{--<br>--}}
                    {{--Already have an account?--}}
                    {{--<a class="" href="{{ route('login') }}">--}}
                        {{--Log In--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</center>--}}


        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- end of Right side bar -->--}}

    </div>

<!--container end-->
@stop

@section('style')
    {!! Html::style('assets/select2/select2.css') !!}


@stop


@section('script')

    {!! Html::script('assets/select2/select2.min.js') !!}


    <script type="text/javascript">

        jQuery(document).ready(function() {

            // Select2
            jQuery(".select2").select2({
                width: '100%'
            });
        });

    </script>
@stop



