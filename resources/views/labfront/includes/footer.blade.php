
<br/><br/>
<div id="k-footer"><!-- footer -->

    <div class="container"><!-- container -->

        <div class="row no-gutter"><!-- row -->

            <div class="col-lg-4 col-md-4"><!-- widgets column left -->

                <div class="col-padded col-naked">

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widgets list -->

                            <h1 class="title-widget">Useful links</h1>

                            <ul>
                                <li><a href="http://www.sust.edu/" target="_blank" title="menu item">ShahJalal University of Science and Technology, Sylhet</a></li>
                                <li><a href="http://www.sust.edu/departments/cse" target="_blank" title="menu item">Computer Science and Engineering Dept, SUST</a></li>
                                <li><a href="#" target="_blank" title="menu item">CSE Society, SUST</a></li>
                                <li><a href="#"  target="_blank" title="menu item">Software House, SUST</a></li>
                                <li><a href="#" target="_blank" title="menu item">ACM Lab, CSE, SUST</a></li>
                            </ul>

                        </li>

                    </ul>

                </div>

            </div><!-- widgets column left end -->

            <div class="col-lg-4 col-md-4"><!-- widgets column center -->

                <div class="col-padded col-naked">

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_recent_news"><!-- widgets list -->

                            <h1 class="title-widget">Lab Contact</h1>

                            <div itemscope itemtype="#">

                                <h2 class="title-median m-contact-subject" itemprop="name">SUST CSE Data Science Lab</h2>

                                <div class="m-contact-address" itemprop="address" itemscope itemtype="#">
                                    <span class="m-contact-street" itemprop="street-address">IICT Building</span>
                                    <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality">3114,Akhalia</span>, <span class="m-contact-region" itemprop="region"></span></span>
                                    <span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code">Sylhet</span> <span class="m-contact-country" itemprop="country-name">Bangladesh</span></span>
                                </div>

                                <div class="m-contact-tel-fax">
                                    <span class="m-contact-tel">Tel: <span itemprop="tel">631-551-3678</span></span>
                                    <span class="m-contact-fax">Fax: <span itemprop="fax">631-551-3688</span></span>
                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div><!-- widgets column center end -->





            <div class="col-lg-4 col-md-4"><!-- widgets column right -->

                <div class="col-padded col-naked">

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_sofa_flickr"><!-- widgets list -->

                            <h1 class="title-widget">Social Contact And CoDE Sharing</h1>

                            <ul class="k-flickr-photos list-unstyled">
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a></li>

                                <br/> <br/> <br/>

                                <li><a href="#" title="Github"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="GitLab"><i class="fa fa-gitlab" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="GitBucket"><i class="fa fa-bitbucket-square fa-3x" aria-hidden="true"></i></a></li>

                            </ul>


                        </li>

                    </ul>

                </div>

            </div><!-- widgets column right end -->






        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- footer end -->



<div id="k-subfooter"><!-- subfooter -->

    <div class="container"><!-- container -->

        <div class="row"><!-- row -->

            <div class="col-lg-12">

                <p class="copy-text text-inverse">
                    &copy; <?php echo date("Y"); ?> . SUST Cse Software House, All rights reserved.
                </p>

            </div>

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- subfooter end -->

<style>
    .fa{
        background-color:transparent;
        color: #00193A;
    }
</style>



{!! Html::script('labfront/jQuery/jquery-2.1.1.min.js') !!}
{!! Html::script('labfront/jQuery/jquery-migrate-1.2.1.min.js') !!}
{!! Html::script('labfront/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('labfront/js/dropdown-menu/dropdown-menu.js') !!}
{!! Html::script('labfront/js/fancybox/jquery.fancybox.pack.js') !!}
{!! Html::script('labfront/js/fancybox/jquery.fancybox-media.js') !!}
{!! Html::script('labfront/js/jquery.fitvids.js') !!}
{!! Html::script('labfront/js/audioplayer/audioplayer.min.js') !!}
{!! Html::script('labfront/js/jquery.easy-pie-chart.js') !!}
{!! Html::script('js/jquery.sticky.js') !!}


{!! Html::script('labfront/js/theme.js') !!}

<style>
    .copy-text{
        color:white ;
    }
</style>

@yield('script')


<script>
    $(document).ready(function(){
        $("#sticker").sticky({topSpacing:0});
    });
</script>




