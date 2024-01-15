<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Edit Super-user Profile</title>
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

            <?php 
            if($uinfo->level==="1")
            {
                include_once("header.php"); 
            }else{
                include_once("header2.php");     
            }
            ?>
        <section class="section litpadtop bgw">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 nopad">
                        <div class="member-cover">
                            <img src="<?php echo base_url('resources/institute/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
                            <div class="lightoverlay overlay"></div>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="clearfix">
                                            <div class="avatar-author">
                                                <a>
                                                    <img alt="" src="<?php echo base_url('resources/shared/instituteimg/insuser/'.$uinfo->profilepic) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $uinfo->username ?></h4>
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
                    <div id="sidebar" class="col-md-3 col-sm-12 page-left-sidebar">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Activity</span>
                                    </h2>
                                </div><!-- end big-title -->
                                <div class="member-desc clearfix">
                                    <ul>
                                         <li><a href="<?php echo site_url("institute/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li class="active"><a href="">Edit Profile</a></li>
                                    </ul><!-- end ul -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar1" class="col-md-9 col-sm-12 custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Edit Profile Information</span>            
                                        </h2>
                                        <ul>
                                            <li>
                                                <label>profile picture</label>
                                                <div>
                                                    <form method=post enctype="multipart/form-data" action="<?php echo site_url("institute/Manageprofile/editpro") ?>">
                                                    <input type=file name="fup">
                                                    <hr>
                                                    <input type=submit name=btnpic value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>Basic Infromation </label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url("institute/Manageprofile/editbasicinfo")?>">

                                                    <div class="form-group">
                                                        <lable>full name</lable>
                                                    <input type=text name=txtfname value="<?php echo $uinfo->fullname ?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>username</lable>
                                                    <input type=text name=txtuname value="<?php echo $uinfo->username ?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>email id</lable>
                                                    &nbsp;&nbsp;<input type=email name=txtmail value="<?php echo $uinfo->email ?>" class="form-control"></div><br>
                                                    <div class="form-group">
                                                        <lable>contact no</lable>
                                                    <input type=number name=txtmno value="<?php echo $uinfo->mobilenumber ?>" class="form-control"></div><br>
                                                     <div class="form-group">
                                                        <lable>Description</lable>
                                                        <textarea class="form-control" name="txtdesc" rows="6"  value="<?php echo $uinfo->description ?>"></textarea>
                                                    
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>Chnage Password</label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url("institute/Manageprofile/editpwd")?>">
                                                        <div class="form-group">
                                                        <lable>Old password</lable>
                                                    &nbsp;&nbsp;&nbsp;<input type=password name=txtopwd value="<?php echo $uinfo->password ?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>new passowrd</lable>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type=password name=txtnpwd class="form-control"></div><br>
                                                    <div class="form-group">
                                                        <lable>re-enter passowrd</lable>
                                                    <input type=password name=txtrpwd class="form-control"></div>
                                                    <div>
                                                        <?php if(isset($errmsg))
                                                            {
                                                        ?>
                                                        <p style="color:red"><?php echo $errmsg ?></p>
                                                        <?php 
                                                            }
                                                            else if(isset($errmsg2))
                                                            {
                                                                ?>

                                                               <p style="color:green"><?php echo $errmsg2;?></p>
                                                            <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                        </ul>
                                </div><!-- end big-title -->

                        
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar2" class="col-md-3 col-sm-12 mob30">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand" >E<span>Course</span>
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

    <script src="<?php echo base_url("resources/institute/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>