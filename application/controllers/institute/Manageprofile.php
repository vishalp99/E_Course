<?php 
defined('BASEPATH')or exit("no direct script is allowed");

class Manageprofile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/ManageprofileM","mp");
        
        $this->load->model("institute/InstituteregM","im");

        if(!isset($_SESSION['uid']))
        {
            redirect("user/Home");
        }
	}
	public function loadmyprofile()
	{
		$data=array("u.instituteuserid"=>$_SESSION['uid']);
        	$temp=array("uinfo"=>$this->mp->selectuserinfo($data));
        	if($temp["uinfo"]->level==="1")
        	{
        		$this->load->view("institute/myprofile",$temp);
        	}
        	else{
        			$this->load->view("institute/myfacprofile",$temp);	
        	}
	}
	public function loadeditmypro()
	{
		$data=array("u.instituteuserid"=>$_SESSION['uid']);
        	$temp=array("uinfo"=>$this->mp->selectuserinfo($data));
        		$this->load->view("institute/editsupprofile",$temp);
    
         
	}
	public function editpro()
	{

        	if($_FILES['fup']['name']!="")
    		 {
    		 	$img=$_FILES['fup']['name'];
    		 	copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/insuser/".$img)or die("can not upload image");
    		 	$data=array("profilepic"=>$img);
    		 	$this->mp->updateprofile($data);
    		 } 
        	redirect('institute/Manageprofile/loadeditmypro');
	}
	public function editbasicinfo()
	{
		$data=array(
    			"username"=>$this->input->post("txtuname"),
    			"fullname"=>$this->input->post("txtfname"),
    			"email"=>$this->input->post("txtmail"),
    			"mobilenumber"=>$this->input->post("txtmno"),
    			"description"=>$this->input->post("txtdesc")
    		);
    		 	$this->mp->updateprofile($data);
    		 	$_SESSION['uname']=$this->input->post("txtuname");
        	redirect('institute/Manageprofile/loadeditmypro');		 	
	}
	public function editpwd()
    	{
    		$opwd=$this->input->post("txtopwd");
    		$npwd=$this->input->post("txtnpwd");
    		$rpwd=$this->input->post("txtrpwd");

        $data=array("u.instituteuserid"=>$_SESSION['uid']);
        	$uinf=$this->mp->selectuserinfo($data);
        	if($rpwd!==$npwd)
    		{
    			$temp=array("uinfo"=>$uinf,
    				"errmsg"=>"password and confirm password doesn't match"
    		);
    					$this->load->view('institute/editsupprofile',$temp);
     		}
    		else{
    			if($opwd!=$uinf->password)
    			{
    	            $temp=array("uinfo"=>$uinf,
    				"errmsg"=>" old password not matched");
    			
    			$this->load->view('institute/editsupprofile',$temp);
    			} 
    			else{
  				$data=array("password"=>$this->input->post("txtnpwd"));
    	
     		 	$this->mp->updateprofile($data);
                        $temp=array("uinfo"=>$uinf,
                    "errmsg2"=>"password changed");
                
                $this->load->view('institute/editsupprofile',$temp);	
    				
    			}
    		}
    	}
    	public function editinsprofile()
    	{
    		$data=array("instituteid"=>$_SESSION['suid']);
        	$temp=array("insinfo"=>$this->mp->selectinsinfo($data),
                "states"=>$this->im->selectstate()
                    );
        		$this->load->view("institute/editinstituteprofile",$temp);
        }
    	public function editcoverpic()
		{

        	if($_FILES['fup']['name']!="")
    		 {
    		 	$img=$_FILES['fup']['name'];
    		 	copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/".$img)or die("can not upload image");
    		 	$data=array("coverpic"=>$img);
    		 	$this->mp->updateinsprofile($data);
    		 } 
        	redirect('institute/Manageprofile/editinsprofile');
		}
	public function editinsbasicinfo()
	{
		$data=array(
    			"institutename"=>$this->input->post("txtname"),
    			"email"=>$this->input->post("txtmail"),
    			"contactnumber"=>$this->input->post("txtmno"),
    			"description"=>$this->input->post("txtdesc")
    		);
    		 	$this->mp->updateinsprofile($data);
        	redirect('institute/Manageprofile/editinsprofile');		 	
	}	
	public function editlink()
	{
			$data=array(
    			"website"=>$this->input->post("txtwebsite"),
    			"googlemapurl"=>$this->input->post("txtgmu"),
    			"fblink"=>$this->input->post("txtfb"),
    			"instalink"=>$this->input->post("txtinsta"),
    			"twitterlink"=>$this->input->post("txttwt"),
    			"linkedinlink"=>$this->input->post("txtlinked"),
    			"youtubelink"=>$this->input->post("txtyt")
    		);
    		 	$this->mp->updateinsprofile($data);
        	redirect('institute/Manageprofile/editinsprofile');		 	
		
	}
    public function loadotheruserprofile($uid)
    {
        $where=array("instituteuserid"=>$uid);

            $temp=array("uinfo"=>$this->mp->selectuserinfo($where));
        $this->load->view("institute/ouprofile",$temp);

    }
    public function loadouclass($uid)
    {
        $data=array("u.instituteuserid"=>$uid);

        $temp=array("cinfo"=>$this->mp->classbyuid($data),
            "uinfo"=>$this->mp->selectuserinfo($data)
                );
     $this->load->view("institute/ouclasses",$temp);

    }
    public function loadstudentprofile($sid)
    {
        $data=array("s2.studentid"=>$sid);

        $temp=array("sinfo"=>$this->mp->selectstudentinfobystdid($data));
        $this->load->view("institute/studentprofile",$temp);
    }
    public function loadinstituteprofile()
    {
        $data=array("t1.instituteid"=>$_SESSION['suid']);
        $temp=array("sinfo"=>$this->mp->selectinsbyinsid($data));
        $this->load->view("institute/instituteprofile",$temp);
    

    }
    public function blockuser($id)
    {
        $data=array("status"=>"1");
        $where=array("instituteuserid"=>$id);

        $this->mp->buser($data,$where);
        
        redirect("institute/InsLogin/loadusers");
    }
    public function unblockuser($id)
    {
        $data=array("status"=>"0");
        $where=array("instituteuserid"=>$id);


        $this->mp->ubuser($data,$where);

        redirect("institute/InsLogin/loadusers");
    }
    

}

?>