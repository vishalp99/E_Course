<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Edit Class</title>
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
            <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_02.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2>Edit Class Permission</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                          
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->
        <section class="section litpadtop bgw">
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
                                       <li><a href="<?php echo site_url("institute/Manageprofile/loadinstituteprofile") ?>"> Institute Profile</a></li>
                                       <li><a href="<?php echo site_url("institute/Crtclass/loadallclass") ?>">Classes</a></li>
                                        <li><a href="<?php echo site_url("institute/Crtclass")?>">create class</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadReg/")?>">Register user</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadusers/")?>">All users</a></li>
                                        <li><a href="<?php echo site_url("institute/InsLogin/loadstudents/")?>">All Students</a></li>
                                    </ul><!-- end ul -l -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 custom-form clearfix">
                        <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Edit Class Information</span>            
                                        </h2>
                                        <ul>
                                            <li>
                                                <label>class picture</label>
                                                <div>
                                                    <form method=post enctype="multipart/form-data" action="<?php echo site_url("institute/Crtclass/editclasspic/".$cinfo->classid) ?>">
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
                                                    <form method="post" action="<?php echo site_url("institute/Crtclass/editclassinfo/".$cinfo->classid) ?>">

                                                    <div class="form-group">
                                                        <lable>Title</lable>
                                                    <input type=text name=txtti value="<?php echo $cinfo->title ?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>Change Status</lable><br>
                                                    <input type=radio name=txts value="0" class="form-check-input" <?php if ($cinfo->status == "0") echo 'checked="checked"'; ?> style="width:30px"> Active                    
                                                    <input type=radio name=txts value="1" class="form-check-input" <?php if ($cinfo->status == "1") echo 'checked="checked"'; ?> style="width:30px"> Block
                                                     <input type=radio name=txts value="-1" class="form-check-input" <?php if ($cinfo->status == "-1") echo 'checked="checked"'; ?> style="width:30px"> Delete
                                                  
                                                    </div>
                                                    <br>
                                                     <div class="form-group">
                                                      <lable>Description</lable>
                                                     <textarea class="form-control" name="txtdesc" rows="6" value="<?php echo $cinfo->description ?>"></textarea>
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>Change class Permission </label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url("institute/Crtclass/editclasspermission/".$cinfo->classid) ?>">
                                                        <div class="form-group">
                                                            <lable>Change permission</lable><br>
                                                            <div class="col-md-3 custom-form clearfix">
                                                        <?php 
                                    
                                        foreach ($users as $au) {
                                              if($au->level == 2)
                                     {
                                         ?>
                                     <input style="margin-left:10px" type="checkbox" name="txtuser[]" value="<?php echo $au->instituteuserid ?>" <?php  
                                     foreach ($cuinfo as $cu) {
                                     if ($cu->instituteuserid == $au->instituteuserid) echo 'checked="checked"';} ?>> <?php echo $au->username?>
                                     <br>
                                     <?php 
                                        }
                                    }
                                    ?>
                                </div>
                                                        </div>
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
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

    <script src="<?php echo base_url("resources/institute/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>