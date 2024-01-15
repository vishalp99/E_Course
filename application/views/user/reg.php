
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:46 GMT -->
<head>

    <title>Ecourse | Sing UP</title>
    <?php include_once("topscript.php") ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style type=text/css>
        .lb1{
            color:black;
        }
        .row input{
          margin-bottom:30px;
          border-bottom:1px solid black;
          color:black;
        }
::-webkit-input-placeholder{

  color:white;
/*transition:opacity .5s ease-in-out;*/
}
        .row select{
          margin-bottom:5px;
          border-bottom:1px solid black;
          color:black;
        }
        .adiv{
        background-image:url(<?php echo base_url('resources/shared/backgd.jpg') ?>);
        background-size:cover;
        background-repeat:no-repeat;
        height:800px;
        }
        .bdiv{
          margin-top:100px;
        }
    </style>
</head>
<body class="register">

    <!-- PRELOADER -->
        <div id="loader">
            <div class="loader-container">
                <img src="images/load.gif" alt="" class="loader-site spinner">
            </div>
        </div>
    <div id="wrapper">         
            <div class="col-lg-8 hidden-xs adiv">
               <!-- <div class="news-image">
                  <img src="<?php echo base_url("resources/shared/backgd.jpg")?>" height=620px width=1010.5px>
                </div>-->

              <i class="fa fa-graduation-cap fa-3x" style="color:white;"><b style="color:cyan">E</b><span>Course</span></i>
             </div>
              <div class="col-lg-4 col-md-12 bdiv" style="float:center">
              <i class="fa fa-graduation-cap fa-3x" style="color:black; margin-top:0px;margin-left:20%"><b style="color:cyan">E</b><span>Course</span></i><br><br><br>
                <h1 class="related-title text-center" style="font:cursive;text-decoration:underline;letter-spacing:2px; margin-bottom:20px;float:center">
                                <span>Sign Up</span>
                            </h1>
                <form class="row" method="post" action="<?php echo site_url("user/Student/regstudent") ?>" enctype="multipart/form-data">
                               <ul class="nav nav-tabs">
                                    <li class="nav-item" id="st_reg">
                                      <a class="nav-link"></a>
                                    </li>

                                    <li class="nav-item"  id="st_otp">
                                      <a class="nav-link"></a>
                                    </li>
                                  </ul>
                                <!--<div class="col-md-8 col-md-offset-3"> -->
                                  <div class="tab-pane active" id="stdet">
                               <div class="col-lg-12">
                                   <span>
                                    <small id="o1" style="color:red"></small><input class="form-control" type="text" name="txtfname" class="form-control" placeholder="Full name" id="txtfname">
                                  </span>
                                  <span><small id="result" style="color:red"></small>
                                  <input type="text" name="txtuname" class="form-control" placeholder="Username" id="txtuname"> </span>
                                  <span>
                                    <small id="result1" style="color:red"></small>
                                   <input type="email" name="txtmail"  class="form-control" placeholder="Email" id="txtmail"> 
                                  </span>
                               </div>
                               <div>
                                                                   <span>
                                    <small id="o2" style="color:red"> </small>
                                  </span>
                                    <div class="col-lg-6">
                                   <input type="Password" name="txtpwd"  class="form-control" placeholder="Password" id="txtpwd">
                                  </div>
                                    <div class="col-lg-6"> 
                                      <input type="Password" name="txtcpwd" id="txtcpwd" class="form-control" placeholder="Re-Enter Password">
                                    </div>
                               </div>
                                <div>
                                 <div class="col-lg-6">
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
                                   <div class="col-lg-6">
                                      <select class="form-control" id="city" name="txtcity">
                                        </select>
                              </div>
                            </div>
                               <div>
                                  <div class="col-lg-6">
                                                                     <span>
                                    <small id="o3" style="color:red"></small>
                                    <label class=lb1>select profile pic</label>
                                      <input type="file" name="fup" class="form-control" id="fup">
                                    
                                  </span>
                                  </div>
                                <div class="col-lg-6">
                                  <label></label>
                                   
                                  <span>
                                    <small id="result2" style="color:red"></small>
                                  <input type="number" name="txtmno" class="form-control" placeholder="contact no" id="txtmno">

                                  </span>
                                </div>
                               </div>
                                  <div class="col-lg-12">
                                    <!--<input type="text" name="txtbio" class="form-control" placeholder="bio">-->
                                        <?php
                                        if(isset($regerr))
                                        { 
                                        ?>
                                        <p style="color:red"><?php echo $regerr ?></p>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <button type="button" value="submit" class="btn btn-primary btn-block btn-lg" id="btn_nxt"> Next</button>
                                Already have an Account ?<a href="<?php echo site_url("user/Student") ?>"> Login</a>
                              </div>
                              <div class="tab-pane fade" id="otpdet">
                                <div class="col-lg-12">
                                  <label id="lbl1" hidden></label>
                                  <label>OTP is send to your Email</label>
                                  <input type="text" name="txtotp" class="form-control" placeholder="Enter OTP" id="txtotp">
                                </div>
                                <button type="submit" value="SEND" class="btn btn-primary btn-block btn-lg" id="btn_sub"> Create Account</button>
                               

                             <p>  Already have an account,<a href="<?php echo site_url("user/Student") ?>"><b><u>login here</u></b></a></p>
                            </div>
                            </form> 
                            <!--<a href="<?php echo site_url("user/Emaildemo/display") ?>">demo</a>-->
              </div>  
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

$(document).ready(function(){
  $('#otpdet').hide();
  function load_data(query)
  {
     $.ajax({
      url:"<?php echo site_url("user/Student/checkusername") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result").innerHTML=data;
      }
      });
  }
  $('#txtuname').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data(search);
   }
   else
   {
    load_data();
   }

  });

  function load_data2(query)
  {
     $.ajax({
      url:"<?php echo site_url("user/Student/checkmail") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result1").innerHTML=data;
      }
      });
  }
  $('#txtmail').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data2(search);
   }
   else
   {
    load_data2();
   }
  });
  function load_data3(query)
  {
     $.ajax({
      url:"<?php echo site_url("user/Student/checkmno") ?>",
      method:"post",
      data:{query:query},
      success:function(data){
        document.getElementById("result2").innerHTML=data;
      }
      });
  }
  $('#txtmno').keyup(function(){
   var search=$(this).val();
   if(search != '')
   {
    load_data3(search);
   }
   else
   {
    load_data3();
   }

  });  

$('#btn_nxt').click(function(){
var r1=$('#txtuname').val();
var r2=$('#txtmail').val();
var r3=$('#txtmno').val();
var r4=$('#txtfname').val();
var r5=$('#txtpwd').val();
var r6=$('#fup').val();
var r7=$('#txtcpwd').val();
if(r1=="")
{
  document.getElementById("result").innerHTML="*";
}
if(r2=="")
{
  document.getElementById("result1").innerHTML="*";
}
if(r3=="")
{
  document.getElementById("result2").innerHTML="*";
}
if(r4=="")
{
  document.getElementById("o1").innerHTML="*";
}
else{
  document.getElementById("o1").innerHTML="";  
}
if(r6=="")
{
  document.getElementById("o3").innerHTML="*";
}
else{
  document.getElementById("o3").innerHTML="";  
}
if(r5 != r7)
{
  document.getElementById("o2").innerHTML="Password not match";    
}
else if(r5 == ""){
  document.getElementById("o2").innerHTML="*";    
}
else{
  document.getElementById("o2").innerHTML="";      
}

var u1=$('#result').html();
var u2=$('#result1').html();
var u3=$('#result2').html();
var u5=$('#o2').html();
var u4=$('#o1').html();
var u6=$('#o3').html();

if(u1 == "" && u2 == "" && u3 == "" && u4 == "" && u5 == "" && u6 == "")
{    
      $('#otpdet').show();
      $('#stdet').hide();
      $('#st_reg').removeAttr('href data-toggle');
      $('#stdet').removeClass('active');
      $('#st_otp').attr('href','#otpdet');
      $('#st_otp').attr('data-toggle','tab');
      $('#otpdet').addClass('active in');


      var otmail=$('#txtmail').val();
    $.ajax({
      url:"<?php echo site_url("user/Student/sendotp") ?>",
      method:"post",
      data:{otmail:otmail},
      success:function(data){
        document.getElementById("lbl1").innerHTML= data;
      }
      });   
}
else{
  return false;
}

});


$('#btn_sub').click(function(){
  $ck=$('#lbl1').html();
  $ot=$('#txtotp').val();
  if($ck == md5($ot))
  {
    return true;
  }
  else{
    return false;
  }
  });
});

</script>
</script>
    <script src="<?php echo base_url("resources/user/")?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("resources/user/")?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("resources/user/")?>js/plugins.js"></script>
  

</body>

<!-- Mirrored from showwp.com/demos/teachme/member-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 12:20:46 GMT -->
</html>