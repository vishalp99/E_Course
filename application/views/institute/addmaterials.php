 <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:13:07 GMT -->
<head>

    <title>Ecourse | Add Lecture</title>
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
                    <div class="col-md-4 col-sm-12 text-center">
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
                    <h2> Add lecture Form</h2>
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
                                        <form method="post" action="<?php echo site_url("institute/Resources/addResource/$classid"); ?>" enctype="multipart/form-data"  id="contactform" 
                                class="row">
                    <div class="col-md-8 col-sm-12 custom-form clearfix">
                        <div class="big-title">
                            <h2 class="related-title">
                                <span>ADD NEW MATERIAL</span>
                            </h2>
                        </div><!-- end big-title -->
                        <div class="contact_form">
<!--                             <form method="post" action="<?php echo site_url("institute/Resources/addResource/$classid"); ?>" enctype="multipart/form-data"  id="contactform" 
                                class="row"> -->

                                <div class="col-md-8">
                                <b>Choose Resource Type</b>&nbsp;:=&nbsp;
                                Video &nbsp;&nbsp;<input type="radio" id="name" name="type" value="video">
                                &nbsp;&nbsp;
                                Pdf &nbsp;&nbsp;<input type="radio" name="type" id="name" value="pdf">
                                &nbsp;&nbsp;
                                Document &nbsp;&nbsp;<input type="radio" name="type" id="name" value="doc">
                                &nbsp;&nbsp;
                                Excel &nbsp;&nbsp;<input type="radio" name="type" id="name" value="exc">
                               &nbsp;&nbsp;
                                <!--Word &nbsp;&nbsp;<input type="radio" name="type" id="name" value="wor">-->
                                &nbsp;&nbsp;
                                Text &nbsp;&nbsp;<input type="radio" name="type" id="name" value="txt">
                                &nbsp;&nbsp;
                                Other &nbsp;&nbsp;<input type="radio" name="type" id="name" value="oth">
                                &nbsp;&nbsp;
                                Announcement &nbsp;&nbsp;<input type="radio" name="type" id="name" value="ann">
                                
                                <br>
                                <br>
                                <span><small id="result2" style="color:red;"></small></span>
                                <input type="text" name="rtitle" id="rtitle" class="form-control" placeholder="Resources Title">        
                                <textarea class="form-control" name="rdes" id="comments" rows="6" placeholder="Resources description"></textarea>
                                <b>Choose Resource</b>
                                <br>
                                <?php 
                                if(isset($err))
                                {
                                ?>
                                <p style="color:red"><?php  echo $err; ?></p>
                                <?php  
                                }
                                ?>
                                <br>
                                <span><small id="result3" style="color:red;"></small></span>
                                <input type="file" name="rimg" id="rimg" class="form-control">
                                <br><br>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 custom-form clearfix" style="height:543px;max-height:543px;">
                        <div class="big-title">
                            <h2 class="related-title">
                                <span>Select Students</span>
                            </h2>
                        </div>
                        <ul class="media-list">
                              <?php 
                                foreach ($stuinfo as $s) {
                                ?>

                                <li class="media">
                                    <div class="comment">
                                      
                                      <a href="#" class="pull-left">
                                          <img src="<?php echo base_url("resources/shared/images/$s->profilepic")?>" alt="" class="img-circle" style="max-height:50px;">
                                      </a>
                                      <div class="media-body">
                                     <strong class="text-success"><?php echo $s->username; ?></strong>

                                <input type="checkbox" name="txtstudents[]" value="<?php echo $s->studentid ?>" checked>
                                        </div>
                                    </div>
                                </li>
                                <?php 
                                }
                                ?>
                              </ul>


                    </div>
                    <button type="submit" value="SEND" id="submit" class="btn btn-primary"> Add Material</button>
                </form>

          </div>
    </div>
<?php include_once("footer.php") ?>
        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand"><b>E</b><span>Course</span>
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

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->
    <script>
        $(document).ready(function(){
             $('#submit').click(function(){
var r2=$('#rtitle').val();
var r3=$('#rimg').val();

if(r2=="")
{
  document.getElementById("result2").innerHTML="*";
}else{
      document.getElementById("result2").innerHTML="";
}
if(r3=="")
{
  document.getElementById("result3").innerHTML="*";
}else{
      document.getElementById("result3").innerHTML="";
}

var u2=$('#result2').html();
var u3=$('#result3').html();
if(u2 == "" && u3 == "")
{
 return true;
}
else{
    return false;
}
 
 });
        });
    </script>
<?php include_once("bottomscript.php") ?>
</body>

<!-- Mirrored from showwp.com/demos/teachme/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:14:34 GMT -->
</html>