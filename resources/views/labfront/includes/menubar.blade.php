<div id="k-head" class="container"><!-- container + head wrapper -->

    <div class="row" ><!-- row -->

        <div class="col-lg-12" >


            <div id="k-site-logo" class="pull-left"><!-- site logo -->

                <h1 class="k-logo">
                    <a href="{!! route('labfront.index') !!}" title="Home Page">

                        <img src="{!! asset('labfront/img/front.png') !!}" alt="Site Logo" class="img-responsive" />
                    </a>
                </h1>

                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            </div><!-- site logo end -->



            <nav id="k-menu" class="k-main-navig"><!-- main navig -->

                <ul id="drop-down-left" class="k-dropdown-menu">

                    <li>
                        <a href="{!!  route('labfront.index') !!}" title="home">Home</a>
                    </li>


                    {{--<li>--}}
                        {{--<a href="{!! route('labfront.news') !!}" title="News">News</a>--}}
                    {{--</li>--}}

                    <li>
                        <a href="{!! route('labfront.events') !!}" title="News $ Events">News & Events</a>
                    </li>

                    <li>
                        <a href="{!! route('labfront.allPeople') !!}" class="Pages Collection" title="People">People</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.supervisor') !!}">Faculty</a></li>
                            <li><a href="{!! route('labfront.student') !!}">Students</a></li>
                            <li><a href="{!! route('labfront.alumni') !!}">Alumni</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="#" title="Project List">Projects & Paper</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.runningProject') !!}">Ongoing Projects</a></li>
                            <li><a href="{!! route('labfront.completeProject') !!}">Complete Projects</a></li>
                            <li><a href="{!! route('labfront.paper') !!}">Papers</a></li>
                            <li><a href="{!! route('labfront.award') !!}">Awards</a></li>
                            {{--<li><a href="#">Books</a></li>--}}
                        </ul>
                    </li>


                    <li>
                        <a href="{!! route('labfront.blog') !!}" title="Blog">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.blog') !!}">Blogs</a></li>
                            <li><a href="{!! route('labfront.archive_blog') !!}">Archive</a></li>

                        </ul>
                    </li>



                    <li>
                        <a href="{!!  route('labfront.contact') !!}" title="Contacts">Contact</a>
                    </li>

                    @if(Auth::user())
                        <li>
                            <a href="{!!  route('dashboard') !!}"  title="Dashboard" style=" color: salmon;">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="#" title="Account">Account</a>
                            <ul class="sub-menu">
                                <li><a href="{!! route('login') !!}">Login</a></li>
                                <li><a href="{!! route('user.create') !!}">Sign Up</a></li>

                            </ul>
                        </li>

                    @endif
                </ul>

            </nav><!-- main navig end -->

        </div>

    </div><!-- row end -->

</div><!-- container + head wrapper end -->


