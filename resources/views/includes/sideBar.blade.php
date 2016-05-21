 <!-- Aside Start-->
<aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="#" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!!route('dashboard')!!}" class="nav-label">{!! Config::get('customConfig.names.siteName')!!}</span>

                </a>
            </div>
            <!-- / brand -->


            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                    <!-- Dashboard -->
                    <li class="{!! Menu::isActiveRoute('dashboard') !!}">
                        <a href="{!!  URL::route( 'dashboard') !!}"><i class="ion-stats-bars"></i>Dash</a>
                    </li>

                    @role('admin')
                    {{--tag--}}
                     <li class="{!! Menu::areActiveRoutes(['tag.index', 'tag.create']) !!}"><a href="#"><i class="ion-bug"></i> <span class="nav-label">Blog Tag</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('tag.index') !!}">
                                <a href="{!!  URL::route( 'tag.index') !!}">All Tag</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('tag.create') !!}">
                                <a href="{!!  URL::route( 'tag.create') !!}">Create Tag</a>
                            </li>
                        </ul>
                    </li>
                    {{--tag end--}}


                    {{--blog --}}
                    <li class="{!! Menu::areActiveRoutes(['blog.index', 'blog.create','blog.own']) !!}"><a href="#"><i
                                    class="ion-compose"></i> <span class="nav-label">Blog</span></a>
                        <ul class="list-unstyled">


                            <li class="{!! Menu::isActiveRoute('blog.index') !!}">
                                <a href="{!!  URL::route( 'blog.index') !!}">All Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.own') !!}">
                                <a href="{!!  URL::route( 'blog.own') !!}">My Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.create') !!}">
                                <a href="{!!  URL::route('blog.create') !!}">Create Blog</a>
                            </li>

                        </ul>
                    </li>
                    {{--end of blog--}}


                    {{--user--}}
                    <li class="{!! Menu::areActiveRoutes(['user.index','user.applyList']) !!}"><a href="#"><i
                                    class="ion-person-stalker"></i> <span class="nav-label">Users</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('user.index') !!}">
                                <a href="{!!  URL::route('user.index') !!}">All Users</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('user.applyList') !!}">
                                <a href="{!!  URL::route('user.applyList') !!}">Apply Users</a>
                            </li>

                        </ul>
                    </li>
                    {{--user  end--}}




                    <li class="{!! Menu::areActiveURLs(['https://dashboard.zopim.com/?first_login#visitor_list/state','https://sustcse.disqus.com/admin/moderate/','help']) !!}"><a href="#"><i
                                    class="ion-ios7-people"></i> <span class="nav-label">Support</span></a>
                        <ul class="list-unstyled">


                            <li class="{!! Menu::isActiveURL('https://dashboard.zopim.com/?first_login#visitor_list/state') !!}">
                                <a href="{!!  URL::to('https://dashboard.zopim.com/?first_login#visitor_list/state') !!}" target="_blank">Chat Support</a>
                            </li>

                            <li class="{!! Menu::isActiveURL('https://sustcse.disqus.com/admin/moderate') !!}" >
                                <a href="{!!  URL::to('https://sustcse.disqus.com/admin/moderate') !!}" target="_blank">Comment Moderate</a>
                            </li>

                            <li class="{!! Menu::isActiveURL('help') !!}" >
                                <a href="{!!  URL::to('help') !!}" >Account Information</a>
                            </li>

                        </ul>
                    </li>


                    @endrole


                    @role('user')

                    <li class="{!! Menu::areActiveRoutes(['blog.create','blog.own']) !!}"><a href="#"><i
                                    class="ion-compose"></i> <span class="nav-label">Blog</span></a>
                        <ul class="list-unstyled">


                            <li class="{!! Menu::isActiveRoute('blog.create') !!}">
                                <a href="{!!  URL::route('blog.create') !!}">Create Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.own') !!}">
                                <a href="{!!  URL::route( 'blog.own') !!}">My Blog</a>
                            </li>


                        </ul>
                    </li>
                    @endrole


                </ul>
            </nav>
</aside>
        <!-- Aside Ends-->



