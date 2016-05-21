@extends('layouts.default')
@section('content')

        <!-- Page Content Start -->
<!-- ================== -->


<div class="wraper container-fluid">




    <div class="page-title">
        <h3 class="title">Welcome !</h3>
    </div>



    <div class="row">


        @role('admin')
        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 white-bg">
                <i class="ion-android-contacts text-pink"></i>
                <h2 class="m-0 counter">{!! \App\User::where('status',1)->where('id','!=',1)->count() !!}</h2>
                <div>Total Bloggers</div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 white-bg">
                <i class="ion-wifi text-purple"></i>
                <h2 class="m-0 counter">{!! \App\Blog::count() !!}</h2>
                <div>Total Blogs</div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 white-bg">
                <i class="ion-ios7-pricetag text-info"></i>
                <h2 class="m-0 counter">{!! \App\Blog::where('user_id', Auth::user()->id)->count() !!}</h2>
                <div>My Total Blogs</div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 white-bg">
                <i class="ion-eye text-success"></i>
                <h2 class="m-0 counter">{!! \App\Blog::sum('views') !!}</h2>
                <div>Total Views</div>
            </div>
        </div>



@endrole

@role('user')

    <div class="col-lg-6 col-sm-9">
        <div class="widget-panel widget-style-2 white-bg">
            <i class="ion-ios7-pricetag text-info"></i>
            <h2 class="m-0 counter">{!! \App\Blog::where('user_id', Auth::user()->id)->count() !!}</h2>
            <div>My Total Blogs</div>
        </div>
    </div>

    <div class="col-lg-6 col-sm-9">
        <div class="widget-panel widget-style-2 white-bg">
            <i class="ion-android-contacts text-success"></i>
            <h2 class="m-0 counter">{!! \App\Blog::where('user_id',\Auth::user()->id)->sum('views') !!}</h2>
            <div>My Blog Views</div>
        </div>
    </div>



@endrole



    </div> <!-- end row -->

    <div class="alert alert-danger">
        <center>
            This Blog site is now in <b>Beta version</b>. Mistakes will be resolve soon. <br/>
            Thank You :)
        </center>
    </div>

</div>
<!-- Page Content Ends -->
<!-- ================== -->

@stop

@section('script')
        <!-- js placed at the end of the document so the pages load faster -->

<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/chat/moment-2.2.1.js"></script>

<!-- Counter-up -->
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>



<!--Morris Chart-->
<script src="assets/morris/morris.min.js"></script>
<script src="assets/morris/raphael.min.js"></script>





<!-- Dashboard -->
<script src="js/jquery.dashboard.js"></script>



<script type="text/javascript">
    /* ==============================================
     Counter Up
     =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>


@stop

