<?php 
 defined('BASEPATH')or exit("no direct script is allowed");

 
 class Manageprofile extends CI_Controller
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model("user/ManageprofileM","mp");

        $this->load->model("user/HomeM","hm");

        $this->load->model("user/StudentM","sm");

        if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
        {
            redirect("user/Home");
        }
 	}
       public function loadmyprofile()
        {
        	$data=array("s.studentid"=>$_SESSION['stid']);
        	$temp=array("stuinfo"=>$this->mp->selectstudinfo($data));
        	$this->load->view("user/stu_profile",$temp);
        }

        public function loadeditpro()
        {
        	$data=array("s.studentid"=>$_SESSION['stid']);
        	$temp=array("stuinfo"=>$this->mp->selectstudinfo($data),
                "states"=>$this->sm->selectallstate()
                );
        	$this->load->view("user/editprofile",$temp);
        }
        public function editpropic()
        { 

        	if($_FILES['fup']['name']!="")
    		 {
    		 	$img=$_FILES['fup']['name'];
    		 	copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/images/".$img)or die("can not upload image");
    		 	$data=array("profilepic"=>$img);
    		 	$this->mp->updateprofile($data);
    		 } 
                $_SESSION['propic']=$img;
        	redirect("user/Manageprofile/loadeditpro");
        }
        public function editbasicinfo()
        {

    			$data=array(
    			"username"=>$this->input->post("txtuname"),
    			"fullname"=>$this->input->post("txtfname"),
    			"emailid"=>$this->input->post("txtmail"),
    			"mobilenumber"=>$this->input->post("txtmno"),
                "cityid"=>$this->input->post('txtcity'),
                "bio"=>$this->input->post("txtbio")
    		);
    		 	$this->mp->updateprofile($data);
    		 	$_SESSION['stname']=$this->input->post("txtuname");
    			 redirect('user/Manageprofile/loadeditpro');	
    	}
    	public function editpwd()
    	{
    		$opwd=$this->input->post("txtopwd");
    		$npwd=$this->input->post("txtnpwd");
    		$rpwd=$this->input->post("txtrpwd");

        	$data=array("s.studentid"=>$_SESSION['stid']);
        	$stinfo=$this->mp->selectstudinfo($data);
    		if($rpwd!==$npwd)
    		{
    			$temp=array("stuinfo"=>$stinfo,
    				"errmsg"=>"password and confirm password doesn't match"
    		);
    					$this->load->view('user/editprofile',$temp);
     		}
    		else{
    			if($opwd!=$stinfo->password)
    			{
    	            $temp=array("stuinfo"=>$stinfo,
    				"errmsg"=>" old password not matched");
    			
    			$this->load->view('user/editprofile',$temp);
    			} 
    			else{
  				$data=array("password"=>$this->input->post("txtnpwd"));
    	
     		 	$this->mp->updateprofile($data);
                        $temp=array("stuinfo"=>$stinfo,
                    "errmsg2"=>"password changed");
                
                $this->load->view('user/editprofile',$temp);	
    				
    			}

    		}
  

    	}
        public function myclasses()
        {

         $d2=array("s1.studentid"=>$_SESSION['stid']);
         $temp=array(
                "myclasses"=>$this->hm->myclassesbystudentid($d2));
        
         $this->load->view('user/myclass',$temp);
        }
        public function otherstudentprofile($sid)
        {
            $data=array("studentid"=>$sid);

            $temp=array("stu"=>$this->mp->ostudentp($data));

            $this->load->view("user/ostudentprofile",$temp);
        }

        public function delprofile()
        {
            $data=array("studentid"=>$_SESSION['stid']);
            $this->mp->delprofileByallID($data);

            session_destroy();
            redirect("user/Home");
        }

 }
?>