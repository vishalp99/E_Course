<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | My Enrolled Classes</title>
   <?php include_once("topscript.php") ?>
</head>
<body>

    <!-- PRELOADER -->
        <div id="loader">
            <div class="loader-container">
                <img src="images/load.gif" alt="" class="loader-site spinner">
            </div>
        </div>
    <!-- END PRELOADER -->

    <!-- START SITE -->
    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand">E<span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->
                            <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
            <?php include_once("header.php") ?>
 <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/user/upload/pagebanner_03.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2>My Classes</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->
     
        <section class="section bgw">
            <div class="container">
                <div class="row course-grid">
                      
                    <?php 
                    foreach ($myclasses as $c) {
                        if($c->status==0)
                        {
                    ?>
                    <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="shop-item course-v2">
                            <div class="post-media entry">
                                <div class="ribbon-wrapper-green"><div class="ribbon-green">Featured</div></div><img src="<?php echo base_url("resources/shared/instituteimg/insclass/".$c->classimage) ?>"class="img-responsive" style="height:250px">
                                <div class="magnifier">
                                    <div class="shop-bottom clearfix">

                                        <a href="<?php echo site_url("user/Classes/loadoverview/$c->classid") ?>" title="preview"><i class="fa fa-link"></i></a>
                                        
                                    </div><!-- end shop-bottom -->

                                    <div class="large-post-meta">
                                        <small>&#124;</small>
                                        <span><a href="course-single.html"><i class="fa fa-clock-o"></i><?php echo $c->createddt?></a></span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><a href="course-single.html"><i class="fa fa-graduation-cap"></i> 12 Students</a></span>
                                    </div><!-- end meta -->
                                </div><!-- end magnifier -->
                            </div><!-- end post-media -->
                            <div class="shop-desc">
                                <div class="shop-price clearfix">
                                    <div class="pull-left">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- end rating -->
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <small></small>
                                    </div><!-- end right -->
                                </div>
                                <h3><a href="course-single.html" title=""><?php echo $c->title ?></a></h3>
                            </div>
                       </div><!-- end shop-item -->
                         </div><!-- end carousel-item -->
                    <?php
                    }  
                }
                    ?>
                  
                </div>
            </div>
            </section>        
        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand">E<span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->
                        <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->


     <?php include_once("bottombar.php") ?><!-- end topbar -->
    </div><!-- end wrapper -->

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?php echo base_url("resources/user/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>