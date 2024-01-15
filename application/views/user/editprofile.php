<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:30 GMT -->
<head>

    <title>Ecourse | Edit Profile</title>
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
                            <img src="<?php echo base_url('resources/user/') ?>upload/member-cover.jpg" alt="" class="img-responsive">
                            <div class="lightoverlay overlay"></div>
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="clearfix">
                                            <div class="avatar-author">
                                                <a>
                                                    <img alt="" src="<?php echo base_url('resources/shared/images/'.$stuinfo->profilepic) ?>" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <h4><?php echo $stuinfo->username ?></h4>
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
                                        <li><a href="<?php echo site_url("user/Manageprofile/loadmyprofile") ?>">Profile</a></li>
                                        <li class="active"><a>Edit Profile</a></li>
                                       <li><a href="<?php echo site_url("user/Manageprofile/myclasses") ?>">Enrolled Classes</a></li>
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
                                                    <form method=post enctype="multipart/form-data" action="<?php echo site_url("user/Manageprofile/editpropic") ?>">
                                                    <input type=file name="fup" class="form-control" required>
                                                    <hr>
                                                    <input type=submit name=btnpic value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>Basic Infromation </label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url("user/Manageprofile/editbasicinfo")?>">
                                                        <div>
                                                        <lable>full name</lable>
                                                    <input type=text name=txtfname value="<?php echo $stuinfo->fullname ?>" class="form-control"></div>
                                                    <br>
                                                    <div>
                                                        <lable>username</lable>
                                                    <input type=text name=txtuname value="<?php echo $stuinfo->username ?>" class="form-control" required></div>
                                                    <br>
                                                    <div>
                                                        <lable>email id</lable>
                                                    &nbsp;&nbsp;<input type=email name=txtmail value="<?php echo $stuinfo->emailid ?>" class="form-control" required></div><br>
                                                    <div>
                                                        <lable>contact no</lable>
                                                    <input type=number name=txtmno value="<?php echo $stuinfo->mobilenumber ?>" class="form-control"></div>
                                                <br>
                                                     <lable>State</lable>

                                                      <select class="form-control" id="" name="state" onchange="loadcity(this.value)" required>
                                        <option value="-1">select State</option>
                                                        <?php
                                           foreach ($states as $s) {
                                         ?>
                                         <option value="<?php echo $s->stateid ?>"><?php echo $s->statename ?></option>
                                         <?php  
                                          }  
                                        ?>
                                    </select> 
                                                <br>
                                                        <lable>City</lable>
                                                  <select class="form-control" id="city" name="txtcity" required>
                                 <option selected value="<?php echo $stuinfo->cityid ?>"><?php echo $stuinfo->cityname ?></option>
                                        </select>
                                                    <br>
                                                        <lable>Bio</lable>
                                                    <textarea name=txtbio value="<?php echo $stuinfo->mobilenumber ?>" class="form-control">
                                                        </textarea> 
                                                    </div>
                                                    
                                                    <hr>
                                                    <input type=submit name=btnbedit value="apply changes" class="btn btn-primary">
                                                </form>
                                                </div>
                                            </li>
                                            <hr>
                                            <li>
                                                <label>Chnage Password</label>
                                                <div>
                                                    <form method="post" action="<?php echo site_url("user/Manageprofile/editpwd")?>">
                                                        <div>
                                                        <lable>Old password</lable>
                                                    &nbsp;&nbsp;&nbsp;<input type=password name=txtopwd value="<?php echo $stuinfo->password ?>" class="form-control"></div>
                                                    <br>
                                                    <div>
                                                        <lable>new passowrd</lable>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type=password name=txtnpwd class="form-control" required></div><br>
                                                    <div>
                                                        <lable>re-enter passowrd</lable>
                                                    <input type=password name=txtrpwd class="form-control" required></div>
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
    <script type="text/javascript">
  function loadcity(sid)
  {
       if(sid!=-1){
           $.ajax({
              url:"<?php echo site_url('user/Student/loadcitybystate/') ?>"+sid,
              success:function(result)
              {
                  document.getElementById('city').innerHTML=result;
              }
             });
      }
  }
 </script>

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?php echo base_url("resources/user/") ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/") ?>js/plugins.js"></script>

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:31 GMT -->
</html>