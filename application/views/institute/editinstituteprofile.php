<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Edit Institute Profile</title>
   <?php include_once("topscript.php") ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                            <img src="<?php echo base_url('resources/institute/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
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
                                                <h4><?php echo $insinfo->institutename?></h4>
                                               
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
                                         <li><a href="<?php echo site_url("institute/Manageprofile/loadinstituteprofile") ?>">Profile</a></li>
                                        <li class="active"><a href="">Edit Profile</a></li>
                                    </ul><!-- end ul -->
                                    <hr>
                                </div><!-- end team-desc -->
                            </div><!-- end team-member -->
                        </div>
                    </div><!-- end right -->

                    <div id="sidebar1" class="col-md-8 col-sm-12 custom-form clearfix">
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
                                                    <form method=post enctype="multipart/form-data" action="<?php echo site_url("institute/Manageprofile/editcoverpic") ?>">
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
                                                    <form method="post" action="<?php echo site_url("institute/Manageprofile/editinsbasicinfo")?>">

                                                    <div class="form-group">
                                                        <lable>Institute name</lable>
                                                    <input type=text name=txtname value="<?php echo $insinfo->institutename ?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>email id</lable>
                                                    &nbsp;&nbsp;<input type=email name=txtmail value="<?php echo $insinfo->email ?>" class="form-control"></div><br>
                                                    <div class="form-group">
                                                        <lable>contact no</lable>
                                                    <input type=number name=txtmno value="<?php echo $insinfo->contactnumber ?>" class="form-control"></div><br>
                                                           <div class="form-group">
                                                        <lable>State</lable>
                                             
                                                    <select class="form-control" id="" name="state" onchange="loadcity(this.value)">
                                        <option value="-1">select State</option>
                                                        <?php
                                           foreach ($states as $s) {
                                         ?>
                                         <option value="<?php echo $s->stateid ?>"><?php echo $s->statename ?></option>
                                         <?php  
                                          }  
                                        ?>
                                    </select>
                                            </div>

                                                  <div class="form-group">
                                                        <lable>State</lable>
                                              <select class="form-control" id="city" name="txtcity">
                                                <option selected value="<?php echo $insinfo->cityid  ?>"><?php echo $insinfo->cityname ?></option>
                                        </select>
                                             </div>
                                                     <div class="form-group">
                                                        <lable>Description</lable>
                                                    <input type=text name=txtdesc value="<?php echo $insinfo->description ?>" class="form-control"></div>
                                                    
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>links</label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url('institute/Manageprofile/editlink')?>">
                                                    <div class="form-group">
                                                        <lable>website</lable>
                                                    <input size=50 type=text name=txtwebsite value="<?php echo $insinfo->website?>" class="form-control"></div>    <br>
                                                    <div class="form-group">
                                                        <lable>Location</lable>
                                                    <input type=text size=50 name=txtgmu value="<?php echo $insinfo->googlemapurl?>" class="form-control"></div>
                                                     <br>
                                                    <div class="form-group">
                                                        <lable>Facebook</lable>
                                                    <input type=text size=50 name=txtfb value="<?php echo $insinfo->fblink?>" class="form-control"></div>    
                                                     <br>
                                                    <div class="form-group">
                                                        <lable>instalgram</lable>
                                                    <input type=text size=50 name=txtinsta value="<?php echo $insinfo->instalink?>" class="form-control"></div>    <br>
                                                    <div class="form-group">
                                                        <lable>Twitter</lable>
                                                    <input type=text size=50 name=txttwt value="<?php echo $insinfo->twitterlink?>" class="form-control"></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>Linkedin</lable>
                                                    <input type=text size=50 name=txtlinkedin value="<?php echo $insinfo->linkedinlink?>" class="form-control"></div>
                                                    
                                                    <br>
                                                    <div class="form-group">
                                                        <lable>Yoututbe</lable>
                                                    <input type=text size=50  size=50 name=txtyt value="<?php echo $insinfo->youtubelink?>" class="form-control"    ></div>
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
<script type="text/javascript">
  function loadcity(sid)
  {
       if(sid!=-1){
           $.ajax({
              url:"<?php echo site_url('institute/Institutereg/loadcitybystate/') ?>"+sid,
              success:function(result)
              {
                  document.getElementById('city').innerHTML=result;
              }
             });
       }
  }
   </script> 

    <script src="<?php echo base_url("resources/institute/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/institute/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>