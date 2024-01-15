<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:13:07 GMT -->
<head>

    <title>Ecourse | Class More Info.</title>
    <?php include_once("topscript.php") ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

    <!-- PRELOADER -->
    <!--    <div id="loader">
            <div class="loader-container">
                <img src="<?php echo base_url("resources/user/") ?>images/load.gif" alt="" class="loader-site spinner">
            </div>
        </div>-->
    <!-- END PRELOADER -->

    <!-- START SITE -->
    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="site-logo">
                            <a class="navbar-brand"><b>E</b><span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

              <!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->

         
         <?php 
         if($_SESSION['level']==="1")
         {
         include_once("header.php");
         }
         else{
            include_once("header2.php");
         } ?>
            <section class="section paralbackground banner" style="background-image:url('<?php echo base_url("resources/institute/upload/pagebanner_02.jpg")?>');" data-img-width="2400" data-img-height="907" data-diff="100">
            <div class="overlay"></div>
        </section><!-- end section -->

        <div class="page-title bgg">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2> Single Class</h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                          
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div>
        <!-- SLIDER -->
        <br>
          <div class="container">
    
        <section class="section bgw">
            <div class="container">
                <div class="row">
                    <div id="post-content" class="col-md-12 col-sm-12 single-course">
                      <div class="navb nav-tabs">
                     <a class="active" href="" id="nav_cls">Class</a>
                        <a href="" id="nav_lec">Resources</a>
                            <a href="" id="nav_mem">Members</a>
                    </div>
                    <hr class="invis">


                      <div class="tab-pane active" id="classdetails">
                        <div class="post-media clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span><font size="5"></font></span>
                                    <input type="text" hidden id="class_id" value="<?php echo $cinfo->classid; ?>">
                                </h2>
                            </div>   
                               <div class="col-md-6">                          
                        <img src="<?php echo base_url("resources/shared/instituteimg/insclass/"). $cinfo->classimage ?>" style="height:400px">
                      </div>

                          <div class="col-md-6 custom-form clearfix" style="height:400px">
                               <div class="widget clearfix">
                            <div class="member-profile">
                                <div class="big-title">
                                    <h2 class="related-title">
                                        <span>Class Information</span>            
                                        </h2>
                                        <hr>
                                        <label>Class</label>:
                                          <?php echo $cinfo->title; ?>
                                          <br><br>
                                        <label>Institute</label>:
                                          <?php echo $cinfo->institutename; ?>
                                           <br><br>
                                        <label>Instructors</label>:
                                          <?php 
                                          foreach ($usrinfo as $u) {
                                          if(isset($u->username))
                                          {
                                          echo $u->fullname;
                                          }
                                          else{

                                          } 
                                        }
                                          ?>
                                          <br><br>
                                          <label>Class Code</label>:
                                          <?php echo $cinfo->classcode; ?>
                                           <br><br>
                                             <label>Class Link</label>:
                                          
                                             <a href="<?php echo $cinfo->classlink; ?>"><i class="fa fa-share"></i></a>
                                      </div>
                                    </div>
                                  </div>
                          </div>
                        </div><!-- end media --> 

                        <hr class="invis">
                        <div class="course-single-desc custom-form clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Class Description</span>
                                </h2>
                            </div><!-- end big-title -->

                            <p><?php echo $cinfo->description; ?>.</p>
                        </div><!-- end post-padding -->
                      </div>
                        <hr class="invis">
                        <div class="tab-pane fade" id="lecturedetails">
                        <div class="course-table clearfix">
                            <div class="big-title">
                                <h2 class="related-title">
                                    <span>Class Resources</span>
                                </h2>
                            </div><!-- end big-title -->
                        
                             <div class="container">
                                    <!-- start Video -->
                                    <?php
                                     foreach ($linfo as $l1)
                                     {
                                        if($l1->resourcetype==0)
                                        {
                                            ?>
                                            <div class="row">                          
                                              <div class="col-md-6 col-sm-12">
                                              <div class="popular-courses">
                                                <div class="post-media clearfix">
                                                    <video class="videoplayer" poster="upload/video.jpg" controls controlsList="nodownload" style="background-image: url('<?php echo base_url('resources/institute/') ?>upload/video.jpg'); width: 100%; height: 100%;background-size: cover;">
                                                        <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                                                        <source type="video/mp4" src="<?php echo base_url("resources/shared/institutevideo/$l1->resourceurl");?>" />
                                                        <!-- Optional: Add subtitles for each language -->
                                                    </video>
                                                </div><!-- end media -->
                                              </div><!-- end courses -->
                                              </div>
                                           <!-- end Video -->
                                       
                                            <!-- start Description -->    
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>VIDEO MATERIAL</h4>

                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <div style="max-height:10px;">
                                                    <p><?php 
                                                  $desc=$l1->resourcedescription; 
                                                    $strcut=substr($desc,0,100);
                                                    $desc=substr($strcut,0,strrpos($strcut,' ')).'...';
                                                    echo $desc;

                                                  ?>
                                                    
<a href="<?php echo site_url("institute/Resources/loadsinglelecture/$l1->resourceid") ?>" class="btn btn-radius btn-sm">Read more.</a>
                                                  </p>
                                                  </div>
                                                <br>
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->
                                                <br>
<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->
                                            </div>
                                            <?php
                                        }
                                        else if($l1->resourcetype==1)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                       <embed src="<?php echo base_url("resources/shared/institutepdf/$l1->resourceurl"); ?>"  type="application/pdf" style="border: 2px solid black;width:100%; height:300px;" controls/>
                                                      </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>PDF MATERIAL</h4>
                                                   
                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p><?php 
                                                    $desc=$l1->resourcedescription; 
                                                    $strcut=substr($desc,0,100);
                                                    $desc=substr($strcut,0,strrpos($strcut,' ')).'...';
                                                    echo $desc;

                                                  ?>
                                                    
<a href="<?php echo site_url("institute/Resources/loadsinglelecture/$l1->resourceid") ?>" class="btn btn-radius btn-sm">Read more.</a> 
                                                    </p>
                                                    
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->
<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <hr>
                                            <?php
                                        }
                                        else if($l1->resourcetype==5)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                           <h1 align="center" style="margin-top: 50px;">No Preview</h1>
                                                        </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>TEXT MATERIAL</h4>
                                                   
                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p><?php 

                                                    $desc=$l1->resourcedescription; 
                                                    $strcut=substr($desc,0,100);
                                                    $desc=substr($strcut,0,strrpos($strcut,' ')).'...';
                                                    echo $desc;

                                                  ?>
                                                    
<a href="<?php echo site_url("institute/Resources/loadsinglelecture/$l1->resourceid/$l1->classid") ?>" class="btn btn-radius btn-sm">Read more.</a>

                                                    </p>

                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->
<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <?php
                                        }
                                        else if($l1->resourcetype==2)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                           <h1 align="center" style="margin-top: 50px;">No Preview</h1>
                                                        </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>DOCUMENT MATERIAL</h4>

                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p><?php echo $l1->resourcedescription; ?></p>

<a href="<?php echo base_url("resources/shared/institutedocument/$l1->resourceurl")?>" class="btn btn-radius btn-sm">Download.</a>
<br>
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->

<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <?php
                                        }  

                                        else if($l1->resourcetype==2)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                           <h1 align="center" style="margin-top: 50px;">No Preview</h1>
                                                        </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>EXCEL MATERIAL</h4>

                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p><?php echo $l1->resourcedescription; ?></p>

<a href="<?php echo base_url("resources/shared/instituteexcel/$l1->resourceurl")?>" class="btn btn-radius btn-sm">Download.</a>
<br>
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->

<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <?php
                                        }  
                                        else if($l1->resourcetype==6)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                           <h1 align="center" style="margin-top: 50px;">No Preview</h1>
                                                        </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>ZIP MATERIAL</h4>

                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p><?php echo $l1->resourcedescription; ?></p>

<a href="<?php echo base_url("resources/shared/instituteother/$l1->resourceurl")?>" class="btn btn-radius btn-sm">Download</a>
                                                    <br>
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->
<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <hr>
                                            <?php
                                        }
                                         else if($l1->resourcetype==7)
                                        {
                                            ?>
                                            <br><br>
                                            <div class="row">                          
                                                  <div class="col-md-6 col-sm-12">
                                                      <div class="popular-courses">
                                                        <div class="post-media clearfix">
                                                           <h1 align="center" style="margin-top: 50px;">No Preview</h1>
                                                        </div><!-- end media -->
                                                     </div><!-- end courses -->
                                                  </div>
                                              <div class="col-md-6 col-sm-12">
                                                <div class="about-module">
                                                    <h4>Announcement</h4>

                                                    <h3>Resource Title</h3>
                                                    <p><?php echo $l1->resourcetitle; ?></p>

                                                    <h3>Resource Description</h3>
                                                    <p>Announcement</p>

<a href="<?php echo base_url("resources/shared/institutedocument/$l1->resourceurl")?>" class="btn btn-radius btn-sm">Read more.</a>
<br>
                                                    <div class="large-post-meta">
                                                        <span class="avatar"><img src="upload/avatar_02.png" alt="" class="img-circle"><!--<?php echo $l1->fullname; ?></a></span>
                                                        <small>&#124;</small>
                                                        <span class="hidden-xs"><i class="fa fa-users"></i> <?php echo $total; ?> Students--></span>
                                                    </div><!-- end meta -->

<a href="<?php echo site_url("institute/Resources/removeResource/$l1->resourceid/$l1->classid");?>" class="btn btn-primary btn-square">DELETE</a>
<a href="<?php echo site_url("institute/Resources/loadupdResource/$l1->resourceid/$l1->classid")?>" class="btn btn-primary btn-square">UPDATE</a>
                                                </div><!-- end about-module -->
                                             </div><!-- end description -->                                                  
                                            </div>  
                                            <?php
                                        }                          
                                     }
                                    ?>                                          

                                <!-- end row -->
                            </div><!-- end container -->
                                <br>

                        
                                <a href="<?php echo site_url("institute/Resources/loadAddResource/$cinfo->classid"); ?>" class="btn btn-primary btn-block btn-lg btn-square" name="add">Add Material</a>
                        </div><!-- end course-table -->
                      </div>
                                            <hr class="invis">


                    
                      <div class="tab-pane fade" id="memdetails">
                        <div id="custom-search-input">
                         
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." name="search_text" id="search_text" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <hr class="invis">
                                            <div id="result">
                                              
                                            </div>
                                            <hr class="invis">
                         <div class="forumwrapper">
                            <div class="forumwrapper-padding">
                                <div id="bbpress-forums">
                                    <div class="table-responsive">
                                        <ul class="bbp-forums">
                                            <li class="bbp-header">
                                                <ul class="forum-titles">
                                                    <li class="bbp-forum-info">Class Students</li>
                                                    <li class="bbp-forum-topic-count hidden-xs">Status</li>
                                                </ul>
                                            </li><!-- .bbp-header -->
                                            <?php
                                            foreach ($stuinfo as $s) {
                                            ?>
                                             <li class="bbp-body">       
                                                <ul class="forum type-forum status-publish hentry loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish">
                                                    <li class="bbp-forum-info">
                                                        <img src="<?php echo base_url("resources/shared/images/$s->profilepic") ?>" alt="" class="alignleft">
                                                       <a class="bbp-forum-title" href="<?php echo site_url("institute/Manageprofile/loadstudentprofile/$s->studentid") ?>" title="General"><?php echo $s->username ?></a>
                                                        <div class="bbp-forum-content"></div>
                                                    </li>
                                                    <li class="bbp-forum-topic-count hidden-xs"><?php if($s->status=="0")
                                                    {
                                                      echo "Active";
                                                    } ?></li>
                                                </ul><!-- end bbp forums -->
                                             </li>
                                             <?php 
                                           }
                                             ?>

                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
          </div>
    </div>
<?php include_once("footer.php") ?>
        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand" ><b>E</b><span>Course</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-8 text-right hidden-xs">
                        <div class="postpager">
                            <ul class="pager row-fluid">
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                      
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                  
                                </li>
                            </ul>   
                        </div><!-- end postpager -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->
    <?php include_once("bottombar.php") ?><!-- end topbar -->
    </div><!-- end wrapper -->

 <style type="text/css">
      .navb {
  width: 100%;
    background:#272e38;
  overflow: auto;
}
.navb a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 33.33%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
  text-align: center; /* If you want the text to be centered */
}
.navb a:hover {
    background: #e74c3c;
  }
.navb a.active {
    background: #e74c3c;
  }
@media screen and (max-width: 500px) {
  .navb a {
    float: none;
    display: block;
    width: 100%;
    text-align: left; /* If you want the text to be left-aligned on small screens */
  }
}
    </style>


    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->
<?php include_once("bottomscript.php") ?>
<script>
$(document).ready(function(){
    $('#lecturedetails').hide();
    $('#memdetails').hide();
    $('#nav_lec').click(function(){
           $('#classdetails').hide();
    $('#memdetails').hide();
           $('#lecturedetails').show();
    $('#nav_cls').removeClass('active');
      $('#nav_cls').removeAttr('href data-toggle');
      $('#classdetails').removeClass('active');
     $('#nav_mem').removeClass('active');
      $('#nav_mem').removeAttr('href data-toggle');
      $('#memdetails').removeClass('active');
      $('#nav_lec').addClass('active');
      $('#nav_lec').attr('href','#lecturedetails');
      $('#nav_lec').attr('data-toggle','tab');
      $('#lecturedetails').addClass('active');
      
    });

$('#nav_cls').click(function(){
           $('#classdetails').show();
           $('#lecturedetails').hide();
    $('#memdetails').hide();
    $('#nav_lec').removeClass('active');
      $('#nav_lec').removeAttr('href data-toggle');
      $('#lecturedetails').removeClass('active');
     $('#nav_mem').removeClass('active');
      $('#nav_mem').removeAttr('href data-toggle');
      $('#memdetails').removeClass('active');
      $('#nav_cls').addClass('active');
      $('#nav_cls').attr('href','#classdetails');
      $('#nav_cls').attr('data-toggle','tab');
      $('#classdetails').addClass('active');
      
    });


$('#nav_mem').click(function(){
           $('#classdetails').hide();
           $('#lecturedetails').hide();
           $('#memdetails').show();
    $('#nav_cls').removeClass('active');
      $('#nav_cls').removeAttr('href data-toggle');
      $('#classdetails').removeClass('active');
    $('#nav_lec').removeClass('active');
      $('#nav_lec').removeAttr('href data-toggle');
      $('#lecturedetails').removeClass('active');
      $('#nav_mem').addClass('active');
      $('#nav_mem').attr('href','#memdetails');
      $('#nav_mem').attr('data-toggle','tab');
      $('#memdetails').addClass('active');
      
    });
  function load_data(query,cid)
  {
     $.ajax({
      url:"<?php echo site_url("institute/Ajexsearch/fetch/") ?>",
      method:"post",
      data:{query:query,cid:cid},
      success:function(data){
        document.getElementById("result").innerHTML=data;
      }
      });
  }
var cid=$('#class_id').val();   
  $('#search_text').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data(search,cid);
   }
   else
   {
    load_data();
   }

  });
});

</script></body>

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:14:34 GMT -->
</html>




<!--//aa document mate ne badha mate 6 aa use karje display mate --> 
<!-- <object data="pic_trulli.jpg" width="300" height="200"></object> -->