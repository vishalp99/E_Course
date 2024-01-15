<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Institute Profile</title>
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
        <section class="section litpadtop bgw">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 nopad">
                        <div class="member-cover">
                            <img src="<?php echo base_url('resources/user/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
                            <div class="lightoverlay overlay"></div>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="clearfix">
                                            <div class="avatar-author">
                                                <a>
                                                    <img alt="" src="<?php echo base_url('resources/shared/instituteimg/'.$insinfo->coverpic) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $insinfo->institutename ?></h4>
                                                <ul class="list-inline social-small">
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end authorbox -->
                        </div><!-- end cover -->
                    </div>
                </div><!-- end row -->
            </div>

            <div class="container">
                <div class="row">
<div id="sidebar1" class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>About Class</span>            
                                        </h2>
                                    </div>
                                    <div class="row" style="max-height:500px;">
                                                             <?php echo $insinfo->description; ?>
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="custom-form clearfix">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Classes</span>            
                                        </h2>
                                    </div>
                                    <?php
                                    foreach ($allcls as $a) {
                                        if($a->status=="0")
                                        {
                                            ?>
                                            <li><?php echo $a->title ?></li>
                                            <?php
                                    }
                                }
                                    ?>
                            </div>
                        </div>
                        <div id="sidebar2" class="col-lg-4 col-lg-offset-0.5 col-md-12 col-sm-12 custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Details</span>            
                                        </h2>
                                        <ul>
                                            <li>
                                                <div><label disabled>Institute</label></div>
                                                <div>&nbsp;<?php echo $insinfo->institutename ?></div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Total Instructor</label></div>
                                                <div>
                                                <?php echo $totalusers; ?>
                                                </div>
                                            </li>
                                            <hr>

                                            <li>
                                                <div><label disabled>Total Classes</label></div>
                                                <div>
                                                <?php echo $totalcls; ?>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Institute Site</label>

                                                    <label disabled style="margin-left:20px;">Location</label>
                                                </div>
                                                <div>
                                                        <ul class="list-inline social-small">
                                                    <li><a href="<?php echo $insinfo->website ?>" target="_blank"><i class="fa fa-globe" style="color:blue"></i></a></li>
                                                <li style="margin-left:70px;"><a href="<?php echo $insinfo->googlemapurl ?>" target="_blank"><i class="fa fa-map-marker" style="background-color:white;color:black"></i></a></li>
                                                </ul>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <div><label disabled>Followe Institute</label>
                                                    <div>
                                                         <ul class="list-inline social-small">
                                                    <li><a href="<?php echo $insinfo->fblink ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="<?php echo $insinfo->twitterlink ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="<?php echo $insinfo->instalink ?>" target="_blank"><i class="fa fa-instagram" style="background-color:pink"></i></a></li>
                                                    <li><a href="<?php echo $insinfo->linkedinlink ?>" target="_blank"><i class="fa fa-linkedin" style="background-color:blue"></i></a></li>
                                                    <li><a href="<?php echo $insinfo->youtubelink ?>" target="_blank"><i class="fa fa-youtube" style="background-color:red"></i></a></li>
                                                </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
        
                                  </div>
                                </div>
                            </div>
                        </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

<?php include_once("footer.php") ?>
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