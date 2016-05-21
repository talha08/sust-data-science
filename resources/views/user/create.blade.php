@extends('front.layout.master')
@section('content')

        <!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>{!! $title !!}</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="{!! route('front.blog') !!}">Home</a></li>
                    <li class="active">Apply</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->







<!--container start-->
<div class="container">



        <div class="col-lg-7 col-sm-10 address">

            <div class="contact-form">
                @include('includes.alert')

                {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}




                <div class="form-group ">
                    {!! Form::label('name', 'Complete Name :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Your complete name...', 'autofocus')) !!}
                </div><br>

                <div class="form-group ">
                    {!! Form::label('email', 'Email :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address...', 'autofocus')) !!}
                </div><br>

                <div class="form-group ">
                    {!! Form::label('platform', 'Working Platform :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::select('platform', $platform,'', array('class' => 'form-control', 'placeholder' => 'Your working platform...','id' => 'status')) !!}
                </div><br>

                <div class="form-group ">
                    {!! Form::label('position', 'Working Status :', array('class' => 'col-md-4 control-label')) !!}<br/>
                    {!! Form::text('position', '', array('class' => 'form-control', 'placeholder' => 'Student/job...', 'autofocus')) !!}
                </div><br>


                <div class="form-group ">
                    {!! Form::label('organization', 'Organization/Institute :', array('class' => 'col-md-4 control-label')) !!}
                    {!! Form::text('organization', '', array('class' => 'form-control', 'placeholder' => 'Input organization/institute...', 'autofocus')) !!}
                </div><br>



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
    {!! Html::style('css/chosen_dropdown/chosen.css') !!}


@stop


@section('script')

    {!! Html::script('js/chosen_dropdown/chosen.jquery.min.js') !!}


    <script type="text/javascript">
        $(document).ready(function() {
            $("#status").chosen();

        });



    </script>
@stop



